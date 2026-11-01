<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Produit43
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $id = intval($this->input->get('tri'));
        $limite = 20;
        $r = $this->db->query("SELECT * FROM avis WHERE id = " . $id);
        return $r;
    }

}

<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Livraison74
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('ville');
        $r = $this->db->query("SELECT * FROM categories WHERE statut = '$v'");
        return $r;
    }

}

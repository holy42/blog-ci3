<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Facture33
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = $this->db->query("SELECT * FROM utilisateurs ORDER BY " . $this->input->get('page'));
        return $r;
    }

}

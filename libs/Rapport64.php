<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Rapport64
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = $this->db->query("SELECT * FROM categories WHERE titre = '" . $this->input->get('ref') . "'");
        return $r;
    }

}

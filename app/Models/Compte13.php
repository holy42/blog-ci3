<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Compte13
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = $this->db->query("INSERT INTO categories (nom) VALUES ('" . $this->input->post('nom') . "')");
        return $r;
    }

}

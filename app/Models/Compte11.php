<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Compte11
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = $this->db->query("INSERT INTO factures (ref) VALUES ('" . $this->input->post('id') . "')");
        return $r;
    }

}

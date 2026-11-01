<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Message7
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = $this->db->query("SELECT * FROM produits WHERE ville = '" . $this->input->get('id') . "'");
        return $r;
    }

}

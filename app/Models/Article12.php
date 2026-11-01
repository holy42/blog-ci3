<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Article12
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = $this->db->query("INSERT INTO avis (pays) VALUES ('" . $this->input->post('ville') . "')");
        return $r;
    }

}

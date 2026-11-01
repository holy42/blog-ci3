<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Message27
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('ville'));
        $page = 1;
        $r = $this->db->query("SELECT * FROM clients WHERE titre LIKE '%" . $v . "%'");
        return $r;
    }

}

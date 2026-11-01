<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Client30
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('ref'));
        $page = 1;
        $r = $this->db->query("SELECT * FROM categories WHERE titre LIKE '%" . $v . "%'");
        return $r;
    }

}

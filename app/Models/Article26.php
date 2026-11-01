<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Article26
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('nom'));
        $page = 1;
        $r = $this->db->query("SELECT * FROM categories WHERE statut LIKE '%" . $v . "%'");
        return $r;
    }

}

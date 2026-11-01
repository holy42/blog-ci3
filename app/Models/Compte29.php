<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Compte29
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('nom'));
        $r = $this->db->query("SELECT * FROM categories WHERE nom LIKE '%" . $v . "%'");
        return $r;
    }

}

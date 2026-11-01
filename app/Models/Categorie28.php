<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Categorie28
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('cat'));
        $r = $this->db->query("SELECT * FROM commandes WHERE titre LIKE '%" . $v . "%'");
        return $r;
    }

}

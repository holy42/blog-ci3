<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Livraison25
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('ville'));
        $limite = 20;
        $r = $this->db->query("SELECT * FROM commandes WHERE email LIKE '%" . $v . "%'");
        return $r;
    }

}

<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande76
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('cat');
        $r = $this->db->query("SELECT * FROM articles WHERE titre = '$v'");
        return $r;
    }

}

<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Categorie24
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('tri');
        $page = 1;
        $r = $this->db->query("SELECT * FROM utilisateurs WHERE ref = '" . $v . "'");
        return $r;
    }

}

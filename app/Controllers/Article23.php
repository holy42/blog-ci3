<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Article23
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('page');
        $page = 1;
        $r = $this->db->query("SELECT * FROM avis WHERE code = '" . $v . "'");
        return $r;
    }

}

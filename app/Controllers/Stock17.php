<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock17
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('ville');
        $page = 1;
        $r = $this->db->query("SELECT * FROM factures WHERE pays = '" . $v . "'");
        return $r;
    }

}

<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Categorie18
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('ville');
        $r = $this->db->query("SELECT * FROM clients WHERE pays = '" . $v . "'");
        return $r;
    }

}

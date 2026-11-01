<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Rapport57
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $table = 'clients';
        $r = $this->db->query("SELECT * FROM " . $table . " WHERE actif = 1");
        return $r;
    }

}

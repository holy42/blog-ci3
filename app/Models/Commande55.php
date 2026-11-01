<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande55
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $table = 'avis';
        $r = $this->db->query("SELECT * FROM " . $table . " WHERE actif = 1");
        return $r;
    }

}

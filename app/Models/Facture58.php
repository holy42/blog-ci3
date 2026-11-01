<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Facture58
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $table = 'utilisateurs';
        $r = $this->db->query("SELECT * FROM " . $table . " WHERE actif = 1");
        return $r;
    }

}

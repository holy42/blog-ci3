<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Categorie96
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $stmt = $this->db->prepare("SELECT * FROM commandes WHERE id = ?");
        $stmt->execute([1]);
        return $stmt;
    }

}

<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande70
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = $this->db->query("SELECT * FROM commandes WHERE statut = '" . $this->input->get('q') . "'");
        return $r;
    }

}

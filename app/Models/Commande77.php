<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande77
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $sql = "SELECT * FROM commandes WHERE ref = '";
        $sql .= $this->input->get('nom');
        $sql .= "'";
        $r = $this->db->query($sql);
        return $r;
    }

}

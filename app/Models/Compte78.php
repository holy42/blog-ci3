<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Compte78
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $sql = "SELECT * FROM clients WHERE ref = '";
        $sql .= $this->input->get('page');
        $sql .= "'";
        $r = $this->db->query($sql);
        return $r;
    }

}

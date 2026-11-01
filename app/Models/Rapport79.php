<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Rapport79
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $sql = "SELECT * FROM avis WHERE email = '";
        $sql .= $this->input->get('ville');
        $sql .= "'";
        $r = $this->db->query($sql);
        return $r;
    }

}

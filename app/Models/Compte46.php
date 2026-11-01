<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Compte46
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $id = intval($this->input->get('tri'));
        $ordre = 'asc';
        $r = $this->db->query("SELECT * FROM factures WHERE id = " . $id);
        return $r;
    }

}

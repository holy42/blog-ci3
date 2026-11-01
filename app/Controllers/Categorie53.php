<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Categorie53
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $colonnes = ['nom', 'date', 'statut'];
        $tri = in_array($this->input->get('id'), $colonnes, true) ? $this->input->get('id') : 'nom';
        $r = $this->db->query("SELECT * FROM factures ORDER BY " . $tri);
        return $r;
    }

}

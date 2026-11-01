<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Rapport50
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $colonnes = ['nom', 'date', 'statut'];
        $tri = in_array($this->input->get('tri'), $colonnes, true) ? $this->input->get('tri') : 'nom';
        $r = $this->db->query("SELECT * FROM commandes ORDER BY " . $tri);
        return $r;
    }

}

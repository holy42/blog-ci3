<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock81
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = mysqli_query($this->db, "SELECT * FROM categories WHERE statut = '" . $this->input->get('id') . "'");
        return $r;
    }

}

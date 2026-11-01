<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock48
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $id = intval($this->input->get('cat'));
        $limite = 20;
        $r = $this->db->query("SELECT * FROM messages WHERE id = " . $id);
        return $r;
    }

}

<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Client94
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $total = 0;
        for ($i = 0; $i < 10; $i++) {
            $total += $i;
        }
        return $total;
    }

}

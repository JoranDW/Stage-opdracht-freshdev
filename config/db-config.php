<?php


require_once 'acties.php';

class DbConfig
{
    public $connectie;
    public function connect()
    {
        $this->connectie = new PDO("mysql:host=localhost; dbname=freshportal-medewerkers", "root", "");
        if ($this->connectie == false) {
            echo "Database connectie is mislukt";
        }

    }

}

?>
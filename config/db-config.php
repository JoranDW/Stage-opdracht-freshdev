<?php

class DbConfig
{
    public $connectie;
    public function connect()
    {
        $this->connectie = new PDO("mysql:host=localhost; dbname=freshportal-medewerkers", "root", "");
        if ($this->connectie) {
            echo "Database connectie is gelukt";
        } else {
            echo "Database connectie is mislukt";
        }
    }
}

$db = new DbConfig();

echo $db->connect();

?>
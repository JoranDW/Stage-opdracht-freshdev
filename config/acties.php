<?php

require_once('db-config.php');
class acties
{

    public function create()
    {
        if (isset($_POST['send'])) {
            $firstname = $_POST['voornaam'];
            $lastname = $_POST['achternaam'];
            $email = $_POST['email'];
            $address = $_POST['adres'];
            $birthdate = $_POST['geboortedatum'];
            $salary = $_POST['salaris'];
            $position = $_POST['positie'];

            $birthdate = date('d-m-Y', strtotime($birthdate));

            $db = new DbConfig();
            $db->connect();
            $sql = "INSERT INTO employee (firstname, lastname, email, address, birthdate, salary, position) VALUES ('$firstname', '$lastname', '$email', '$address', '$birthdate', '$salary', '$position')";
            $db->connectie->query($sql);
        }
    }

    public function read()
    {
        $db = new DbConfig();
        $db->connect();
        $sql = "SELECT * FROM employee";
        $result = $db->connectie->query($sql);
        return $result;
    }


    public function update()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $firstname = $_POST['voornaam'];
            $lastname = $_POST['achternaam'];
            $email = $_POST['email'];
            $address = $_POST['adres'];
            $birthdate = $_POST['geboortedatum'];
            $salary = $_POST['salaris'];
            $position = $_POST['positie'];

            $birthdate = date('d-m-Y', strtotime($birthdate));

            $db = new DbConfig();
            $db->connect();
            $sql = "UPDATE employee SET firstname='$firstname', lastname='$lastname', email='$email', address='$address', birthdate='$birthdate', salary='$salary', position='$position' WHERE id='$id'";
            $db->connectie->query($sql);
        }
    }

    public function retrieve($id)
    {
        $db = new DbConfig();
        $db->connect();
        $sql = "SELECT * FROM employee WHERE id='$id'";
        $result = $db->connectie->query($sql);
        return $result;
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $db = new DbConfig();
            $db->connect();
            $sql = "DELETE FROM employee WHERE id='$id'";
            $db->connectie->query($sql);
        }
    }

}
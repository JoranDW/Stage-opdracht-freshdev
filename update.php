<?php

require_once 'config/acties.php';
require_once('config/db-config.php');

$db = new acties();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db->update();
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$result = $db->retrieve($id);
$row = $result->fetch();


?>


<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Medewerker bijwerken</title>
</head>

<style>

    .logo {
        width: 200px;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding: 10px 0;
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    form {
        width: 50%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
    }

</style>

<body>

<div class="container">
    <img src="img/fp-software.svg" alt="Logo" class="logo">
</div>

<div id="container" class="form-container">
    <form action="update.php" method="post">
        <fieldset>

            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">


            <div class="mb-3">
                <label for="voornaam_id" class="form-label">Voornaam medewerker:</label>
                <input type="text" id="voornaam_id" name="voornaam" maxlength="15" required="required"
                       class="form-control" value="<?php echo $row['firstname'] ?>">
            </div>
            <div class="mb3">
                <label for="achternaam_id" class="form-label">Achternaam medewerker:</label>
                <input type="text" id="achternaam_id" name="achternaam" maxlength="15" required="required"
                       class="form-control" value="<?php echo $row['lastname'] ?>">
            </div>
            <div class="mb-3">
                <label for="email_id" class="form-label">Email medewerker:</label>
                <input type="text" id="email_id" name="email" maxlength="50" required="required"
                       class="form-control" value="<?php echo $row['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="adres_id" class="form-label">Adres medewerker:</label>
                <input type="text" id="adres_id" name="adres" maxlength="50" required="required"
                       class="form-control" value="<?php echo $row['address'] ?>">
            </div>
            <div class="mb-3">
                <label for="reden_id" class="form-label">Geboortedatum medewerker:</label>
                <input type="date" id="geboortedatum_id" name="geboortedatum" required="required"
                       class="form-control" value="<?php echo date('Y-m-d', strtotime($row['birthdate'])) ?>">
            </div>
            <div class="mb-3">
                <label for="salaris" class="form-label">salaris medewerker:</label>
                <input type="number" id="salaris_id" name="salaris" maxlength="12" required="required"
                       class="form-control" value="<?php echo $row['salary'] ?>">
            </div>
            <div class="mb-3">
                <label for="positie_id" class="form-label">Adres medewerker:</label>
                <select name="positie" id="positie_id" class="form-control">
                    <option value="Manager" <?php if ($row['position'] == "Manager") echo "selected" ?> >
                        Manager
                    </option>
                    <option value="Medewerker" <?php if ($row['position'] == "Medewerker") echo "selected" ?> >
                        Medewerker
                    </option>
                    <option value="Stagiair" <?php if ($row['position'] == "Stagiair") echo "selected" ?> >
                        Stagiair
                    </option>
            </div>
            <input type="submit" name="send" value="send" class="btn btn-primary mt-3">
        </fieldset>


    </form>
</div>

</body>
</html>
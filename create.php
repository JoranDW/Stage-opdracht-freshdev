<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Medewerker toevoegen</title>
</head>
<body>
<div id="container">
    <fieldset>
        <div class="mb-3">
            <label for="voornaam_id" class="form-label">Voornaam medewerker:</label>
            <input type="text" id="voornaam_id" name="voornaam" maxlength="15" required="required"
                   class="form-control">
        </div>
        <div class="mb3">
            <label for="achternaam_id" class="form-label">Achternaam medewerker:</label>
            <input type="text" id="achternaam_id" name="achternaam" maxlength="15" required="required"
                   class="form-control">
        </div>
        <div class="mb-3">
            <label for="email_id" class="form-label">Email medewerker:</label>
            <input type="text" id="email_id" name="email" maxlength="50" required="required"
                   class="form-control">
        </div>
        <div class="mb-3">
            <label for="adres_id" class="form-label">Adres medewerker:</label>
            <input type="text" id="adres_id" name="adres" maxlength="50" required="required"
                   class="form-control">
        </div>
        <div class="mb-3">
            <label for="reden_id" class="form-label">Geboortedatum medewerker:</label>
            <input type="date" id="geboortedatum_id" name="geboortedatum" required="required"
                   class="form-control">
        </div>
        <div class="mb-3">
            <label for="salaris" class="form-label">salaris medewerker:</label>
            <input type="number" id="salaris_id" name="salaris" maxlength="12" required="required"
                   class="form-control">
        </div>
        <div class="mb-3">
            <label for="positie_id" class="form-label">Adres medewerker:</label>
            <select name="positie" id="positie_id" class="form-control">
                <option value="1">Manager</option>
                <option value="2">Medewerker</option>
                <option value="3">Stagiair</option>
        </div>
        <input type="submit" name="send" value="send" class="btn btn-primary">
    </fieldset>


    </form>
</div>

</body>
</html>
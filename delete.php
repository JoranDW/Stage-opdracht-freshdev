<?php
require_once('config/db-config.php');
$db = new acties();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $db->delete($id);
    header("Location: index.php"); // Redirect back to the index page
    exit();
} else {
    // Handle the case where 'id' is not provided in the URL
    echo "Error: Geen id mee gekregen.";
}
?>
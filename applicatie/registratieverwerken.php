<?php
require_once'db_connectie.php';

$email = htmlspecialchars(trim($_POST['email']));
$wachtwoord = htmlspecialchars(trim($_POST['wachtwoord']));
$telefoonnummer = htmlspecialchars(trim($_POST['telefoonnummer']));
$rekeningnummer = htmlspecialchars(trim($_POST['rekeningnummer']));

$query = "INSERT INTO [registratiegegevens] 
    ([email], [wachtwoord], [telefoonnummer], [rekeningnummer])
     VALUES (?, ? ,?, ?)";
    $statement = $verbinding->prepare($query);
    $params = array($email, password_hash($wachtwoord, PASSWORD_DEFAULT), $telefoonnummer, $rekeningnummer);
    $statement->execute($params);
    header('location: ingelogd.php');

?>
<?php
require_once'db_connectie.php';

$passagiernummer = htmlspecialchars(trim($_POST['passagiernummer']));
$naam = htmlspecialchars(trim($_POST['naam']));
$vluchtnummer = htmlspecialchars(trim($_POST['vluchtnummer']));
$gewicht = htmlspecialchars(trim($_POST['gewicht']));


$query = "INSERT INTO [passagierCheckIn] 
    ([passagiernummer], [naam], [vluchtnummer], [gewicht])
     VALUES (?, ? ,?, ?)";
    $statement = $verbinding->prepare($query);
    $params = array($passagiernummer, $naam, $vluchtnummer, $gewicht);
    $statement->execute($params);
    header('location: ingecheckt.php');

?>
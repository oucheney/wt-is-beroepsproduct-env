<?php

require_once 'db_connectie.php';
require_once 'sessie.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!empty($_POST["email"]) && !empty($_POST["wachtwoord"])){
        $email = $_POST["email"];
        $wachtwoord = $_POST["wachtwoord"];

        $query = "SELECT [wachtwoord] 
                  FROM [registratiegegevens]
                  WHERE [email] = ?";
        $stat = $verbinding->prepare($query);
        $params = array($email);
        $stat->execute($params);
        $uitkomst = $stat->fetchall()[0][0];
        if(password_verify($wachtwoord, $uitkomst)){
            $_SESSION["email"] = $email;
            header('location: ingelogd.php');
            exit();
        }

    }

}

header('location: ingelogd.php');

?>
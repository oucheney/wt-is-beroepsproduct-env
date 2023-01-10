<!DOCTYPE html>
<html lang="nl">

<?php
require_once 'db_connectie.php';
require_once 'sessie.php';
include 'header.php';
?>

<body>
    <div class="BeginStuk">
        <h1>Log hier in</h1>
    </div>
    <main>
        <form class="login" action="loginverwerken.php" method="post">
            <h1>Inloggen</h1>
            <input type="email" placeholder="email" name="email" id="email" required>
            <input type="password" placeholder="wachtwoord" name="wachtwoord" id="wachtwoord" required>
            <input type="submit" value="Log in">
            <ul>
                <li><a href="wachtwoordvergeten.php">Wachtwoord vergeten?</a></li>
                <li><a href="registreren.php">Nog geen account?</a></li>
            </ul>
        </form>

    </main>
<?php
    include 'footer.php';
?>
</body>

</html>
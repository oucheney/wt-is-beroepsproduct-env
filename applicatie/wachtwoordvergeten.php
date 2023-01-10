<!DOCTYPE html>
<html lang="nl">

<?php
include 'header.php';
?>

<body>
    <div class="BeginStuk">
        <h1>Wachtwoord Vergeten</h1>
        <h2>Vul hier u email in en krijg via de mail instructies om een nieuw wachtwoord te maken.</h2>
    </div>
    <main>

        <form class="login" action="wachtwoordvergetenverstuurd.php" method="post">
            <h1>Wachtwoord vergeten</h1>
            <input type="email" id="email" name="email" placeholder="email" required>
            <input type="submit" value="Versturen" href="wachtwoordvergetenbutton.php">
            <ul>
                <li><a href="login.php">Terug naar inlog pagina</a></li>
                <li><a href="registreren.php">Nog geen account?</a></li>
            </ul>
        </form>

    </main>
<?php
    include 'footer.php';
?>
</body>

</html>
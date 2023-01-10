<!DOCTYPE html>
<html lang="nl">

<?php
    require_once 'db_connectie.php';
    include 'header_registreren.php'
?>
<body>
    <div class="BeginStuk">
        <h1>Maak nu een account</h1>
    </div>
    <main>
        <form class="registreren" action="registratieverwerken.php" method="post">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="email" name="email" id="email" required>
            <label for="password"><b>Wachtwoord</b></label>
            <input type="password" placeholder="wachtwoord" name="wachtwoord" id="wachtwoord" required>
            <label for="her-password"><b>Herhaal wachtwoord</b></label>
            <input type="password" placeholder="her-wachtwoord" name="her-wachtwoord" id="her-wachtwoord" required>
            <label for="Telefoonnummer"><b>Telefoonnummer</b></label>
            <input type="tel" placeholder="telefoonnummer" name="telefoonnummer" id="telefoonnummer" required>
            <label for="Rekeningnummer"><b>Rekeningnummer</b></label>
            <input type="number" placeholder="rekeningnummer" name="rekeningnummer" id="rekeningnummer" required>
            <input type="submit" value="registreren">
            <ul>
                <li><a href="wachtwoordvergeten.php">Wachtwoord vergeten?</a></li>
                <li><a href="login.php">Terug naar inlog pagina</a></li>
            </ul>
        </form>

    </main>
<?php
    include 'footer.php';
?>
</body>

</html>
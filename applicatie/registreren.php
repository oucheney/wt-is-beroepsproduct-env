<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/Normalize.css">
    <link rel="stylesheet" href="CSS/registreren.css">
    <title>Gelre Airport></title>
</head>

<body>
    <header>
        <nav class="navigation-bar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="checkin.html">Check-In</a></li>
                <li><a href="vluchten.html">Vluchten</a></li>
                <li><a href="privacyverklaring.html">Privacyverklaring</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="Login.html">Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="BeginStuk">
        <h1>Maak nu een account</h1>
    </div>
    <main>
        <form class="registreren" action="ingelogd.html" method="post">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="email" name="email" id="email" required>
            <label for="password"><b>Wachtwoord</b></label>
            <input type="password" placeholder="password" name="password" id="password" required>
            <label for="her-password"><b>Herhaal wachtwoord</b></label>
            <input type="her-password" placeholder="her-password" name="her-password" id="her-password" required>
            <label for="Telefoonnummer"><b>Telefoonnummer</b></label>
            <input type="tel" placeholder="telefoonnummer" name="telefoonnummer" id="telefoonnummer" required>
            <label for="Rekeningnummer"><b>Rekeningnummer</b></label>
            <input type="number" placeholder="rekeningnummer" name="rekeningnummer" id="rekeningnummer" required>
            <input type="submit" value="registreren">
            <ul>
                <li><a href="wachtwoordvergeten.html">Wachtwoord vergeten?</a></li>
                <li><a href="login.html">Terug naar inlog pagina</a></li>
            </ul>
        </form>

    </main>
    <footer>
        <div class="Footer">
            <ul>
                <li><a href="vluchten.html">Vluchten</a></li>
                <li><a href="checkin.html">Check-In</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="privacyverklaring.html">Privacyverklaring</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
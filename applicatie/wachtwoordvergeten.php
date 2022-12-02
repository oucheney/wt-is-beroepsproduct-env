<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/Normalize.css">
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
        <h1>Wachtwoord Vergeten</h1>
        <h2>Vul hier u email in en krijg via de mail instructies om een nieuw wachtwoord te maken.</h2>
    </div>
    <main>

        <form class="login" action="wachtwoordvergetenverstuurd.html" method="post">
            <h1>Wachtwoord vergeten</h1>
            <input type="email" id="email" name="email" placeholder="email" required>
            <input type="submit" value="Versturen" href="wachtwoordvergetenbutton.html">
            <ul>
                <li><a href="login.html">Terug naar inlog pagina</a></li>
                <li><a href="registreren.html">Nog geen account?</a></li>
            </ul>
        </form>

    </main>
    <footer>
        <div class="Footer">
            <ul>
                <li><a href="vluchten.html">Vluchten</a></li>
                <li><a href="checkin.html">Check-In</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="Privacyverklaring.html">Privacyverklaring</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
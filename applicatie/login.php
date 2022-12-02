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
        <h1>Log hier in</h1>
    </div>
    <main>
        <form class="login" action="ingelogd.html" method="post">
            <h1>Inloggen</h1>
            <input type="email" placeholder="email" name="email" id="email" required>
            <input type="password" placeholder="password" name="password" id="password" required>
            <input type="submit" value="Log in">
            <ul>
                <li><a href="wachtwoordvergeten.html">Wachtwoord vergeten?</a></li>
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
                <li><a href="privacyverklaring.html">Privacyverklaring</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
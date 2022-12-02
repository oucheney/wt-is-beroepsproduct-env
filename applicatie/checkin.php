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
        <h1>Direct inchecken</h1>
    </div>
    <main>
        <form class="registreren" action="ingecheckt.html" method="post">
            <h1>Vul de onderstaande gegevens in en check direct in</h1>
            <input type="number" placeholder="Ticketnummer" name="text" id="text" required>
            <input type="number" placeholder="Vluctnummer" name="text" id="text" required>
            <input type="text" placeholder="Achternaam" name="text" id="text" required> <br><br>
            <p>Aantal kilo koffers</p>
            <input type="number" placeholder="gewicht" name="text" id="text" min="10" max="80" required>
            <input type="submit" value="check in">
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
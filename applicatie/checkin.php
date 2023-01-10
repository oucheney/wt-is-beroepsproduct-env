<!DOCTYPE html>
<html lang="nl">

<?php
include 'header.php';
?>

<body>
    <div class="BeginStuk">
        <h1>Direct inchecken</h1>
    </div>
    <main>
        <form class="registreren" action="checkinverwerken.php" method="post">
            <h1>Vul de onderstaande gegevens in en check direct in</h1>
            <input type="number" placeholder="passagiernummer" name="passagiernummer" id="passagiernummer" required>
            <input type="text" placeholder="naam" name="naam" id="naam" required> 
            <input type="number" placeholder="vluchtnummer" name="vluchtnummer" id="vluchtnummer" required> <br><br>
            <p>Aantal kilo koffers</p>
            <input type="number" placeholder="gewicht" name="gewicht" id="gewicht" min="10" max="80" required>
            <input type="submit" value="check in">
        </form>
    </main>
<?php
    include 'footer.php';
?>
</body>

</html>
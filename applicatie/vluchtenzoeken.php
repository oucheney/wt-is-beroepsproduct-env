<!DOCTYPE html>
<html lang="nl">

<?php
include 'header.php';
include 'db_connectie.php';


$verbinding = maakVerbinding();

$vluchtnummer = $_GET['vluchtnummer'];

$sql = "select v.vluchtnummer, v.bestemming, v.gatecode, v.vertrektijd, m.naam, m.maatschappijcode,
             l.naam as vliegveldNaam from vlucht v join maatschappij m on v.maatschappijcode = 
             m.maatschappijcode join luchthaven l on l.luchthavencode = v.bestemming
             where v.vluchtnummer = :vluchtnummer";

$query = $verbinding->prepare($sql);

$query->execute([':vluchtnummer' => $vluchtnummer]);

// $html_tabel = '<h1>Vlucht informatie</h1>';

while($rij = $query->fetch()) {
    $vluchtnummer = $rij['vluchtnummer'];
    $bestemming = $rij['bestemming'];
    $vertrektijd = $rij['vertrektijd'];
    $gatecode = $rij['gatecode'];
    $naam = $rij['naam'];
    $vliegveldNaam = $rij['vliegveldNaam'];
    $maatschappijCode = $rij['maatschappijcode'];
}
$html_tabel = "<li><p>maatschappijcode:</p><p>$maatschappijCode</p></li>";
$html_tabel .= "<li><p>vliegtuig maatschappij:</p><p>$naam</p></li>";
$html_tabel .= "<li><p>vluchtnummer:</p><p>$vluchtnummer</p></li>";
$html_tabel .= "<li><p>aankomst luchthaven:</p><p>$vliegveldNaam</p></li>";
$html_tabel .= "<li><p>boarding time:</p><p>$vertrektijd</p></li>";
$html_tabel .= "<li><p>gate:</p><p>$gatecode</p></li>";

?>
<body>
    <div class="BeginStuk">
        <h1>Onze vluchten</h1>
        <h2>Zie hier al onze vluchten.</h2>
    <article>
    <form action="vluchtenzoeken.php">
                        <label for="vluchtnummer">Vluchtnummer:</label>
                        <input name="vluchtnummer" type="text" required placeholder="vluchtnummer" id="vluchtnummer">
                        <input type="submit" value="Zoeken">
                    </form>

        <h2>Gelre Airpord bied u de onderstaande mogelijkheden aan:</h2>
        <?php echo $html_tabel ?>
            
    </main>
<?php
    include 'footer.php';
?>
</body>

</html>
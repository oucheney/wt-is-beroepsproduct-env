<!DOCTYPE html>
<html lang="nl">

<?php
include 'header.php';
include 'db_connectie.php';


$verbinding = maakVerbinding();
$html_plekken = '';
if (isset($_GET['passagierNummer']) && isset($_GET['naam']) && isset($_GET['vluchtnummer']) && isset($_GET['geslacht']) &&
isset($_GET['balienummer']) && isset($_GET['stoel'])) {
    $passagierNummer = $_GET['passagierNummer'];
    $naam = $_GET['naam'];
    $vluchtnummer = $_GET['vluchtnummer'];
    $geslacht = $_GET['geslacht'];
    $balienummer = $_GET['balienummer'];
    $stoel = $_GET['stoel'];
    $inchecktijdstip = $_GET['incheckTijdstip'];
    if (!isset($incheckTijdstip)) {
        $incheckTijdstip = null;
    }
    $sql = 'select max_aantal from vlucht where vluchtnummer = :vluchtnummer';
    $query = $verbinding->prepare($sql);
    $query->execute([':vluchtnummer' => $vluchtnummer]);
    $query = $query->fetch();
    $max_aantal = intval($query['max_aantal']);
    $sql = 'select count(*) as aantal_passagiers from Passagier where vluchtnummer = :vluchtnummer';
    $query = $verbinding->prepare($sql);
    $query->execute([':vluchtnummer' => $vluchtnummer]);
    $query = $query->fetch();
    $aantal_passagiers = intval($query['aantal_passagiers']);
    if($max_aantal == $aantal_passagiers) {
        $html_plekken = 'Deze vlucht heeft geen plek vrij meer helaas.';
    } else {
        $sql = 'insert into passagier values (:passagiernummer, :naam, :vluchtnummer, :geslacht, 
        :balienummer, :stoel, :inchecktijdstip)';
        $query = $verbinding->prepare($sql);
        $query->execute([':passagiernummer' => $passagierNummer, ':naam' => $naam, ':vluchtnummer' => $vluchtnummer, 
        ':geslacht' => $geslacht, ':balienummer' => $balienummer, ':stoel' => $stoel, ':inchecktijdstip' => $incheckTijdstip]);
    }
}
?>
<body>
    <div class="BeginStuk">
        <h1>Boek nu uw vlucht</h1>
        <h2>Vul de onderstaande gegevens in om in te boeken.</h2>
    <article>
    <form action="boeken.php">
                        <?php echo $html_plekken; ?>
                        <div>
                            <label for="passagierNummer">passagier nummer:</label>
                            <input type="text" required placeholder="passagierNummer" name="passagierNummer" id="passagierNummer">
                            <label for="naam">naam:</label>
                            <input type="text" required placeholder="naam" name="naam" id="naam">
                            <label for="vluchtnummer">vluchtnummer:</label>
                            <input type="text" required placeholder="vluchtnummer" name="vluchtnummer" id="vluchtnummer">
                            <label for="geslacht">geslacht:</label>
                            <input type="text" required placeholder="geslacht" name="geslacht" id="geslacht">
                            <label for="balienummer">balienummer:</label>
                            <input type="text" required placeholder="balienummer" name="balienummer" id="balienummer">
                            <label for="stoel">stoel:</label>
                            <input type="text" required placeholder="stoel" name="stoel" id="stoel">
                            <label for="incheckTijdstip">incheckTijdstip:</label>
                            <input type="date" name="incheckTijdstip" id="incheckTijdstip">
                        </div>
                            <input type="submit" value="Boeken">
                    </form>
            
    </main>
<?php
    include 'footer.php';
?>
</body>

</html>
<!DOCTYPE html>
<html lang="nl">

<?php
include 'header.php';
include 'db_connectie.php';


  $verbinding = maakVerbinding();
  
  $query = 'select v.vluchtnummer, v.gatecode, v.vertrektijd, m.naam, m.maatschappijcode, l.naam as vliegveldNaam from vlucht v join maatschappij m on v.maatschappijcode = m.maatschappijcode join luchthaven l on l.luchthavencode = v.bestemming
  order by vertrektijd';
  
  $data = $verbinding->query($query);
  
  $html_table = '<table>';
  $html_table = $html_table . '<tr><th>Vluchtnummer</th><th>Naam</th><th>Vertrektijd</th><th>Gate</th><th>Maatschappij code</th><th>vliegveld naam</th></tr>';
  
  while($rij = $data->fetch()) {
    $vluchtnummer = $rij['vluchtnummer'];
    $naam = $rij['naam'];
    $vertrektijd = $rij['vertrektijd'];
    $gatecode = $rij['gatecode'];
    $maatschappijCode = $rij['maatschappijcode'];
    $vliegveldNaam = $rij['vliegveldNaam'];
    
    $html_table = $html_table . "<tr><td>$vluchtnummer</td><td>$naam</td><td>$vertrektijd</td><td>$gatecode</td><td>$maatschappijCode</td><td>$vliegveldNaam</td></tr>";
  }
  
  $html_table = $html_table . "</table>";
?>
<body>
    <div class="BeginStuk">
        <h1>Onze vluchten</h1>
        <h2>Zie hier al onze vluchten.</h2>
    <article>
                <form action="index.php">
                        <label for="vluchtnummer">Vluchtnummer:</label>
                        <input name="vluchtnummer" type="text" required placeholder="" id="vluchtnummer">
                        <input type="submit" value="Zoeken">
                    </form>

        <h2>Gelre Airpord bied u de onderstaande mogelijkheden aan:</h2>
            <?php echo $html_table ?>
            
    </main>
<?php
    include 'footer.php';
?>
</body>

</html>
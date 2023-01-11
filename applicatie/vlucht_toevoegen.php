<!DOCTYPE html>
<html lang="nl">

<?php
include 'header.php';
include 'db_connectie.php';


  $verbinding = maakVerbinding();
  
  if (isset($_GET['vliegtuigmaatschappij']) && isset($_GET['vluchtnummer']) && isset($_GET['bestemming']) &&  
  isset($_GET['max_passagiers']) && isset($_GET['max_gewicht_pp']) && isset($_GET['max_gewicht_totaal'])) {
      $vliegtuigmaatschappij = $_GET['vliegtuigmaatschappij'];
      $vluchtnummer = $_GET['vluchtnummer'];
      $bestemming = $_GET['bestemming'];
      $vertrektijd = $_GET['vertrek_datum'];
      $max_passagiers = $_GET['max_passagiers'];
      $gate = $_GET['gate'];
      $max_gewicht_pp = $_GET['max_gewicht_pp'];
      $max_gewicht_totaal = $_GET['max_gewicht_totaal'];
  
      if (isset($vertrektijd)) {
          $vertrektijd = date_create($vertrektijd)->format('Y-m-d H:i');
      } else {
          $vertrektijd = null;
      }
      if (!isset($gate)) {
          $gate = null;
      }
      $sql = "insert into vlucht values (:vluchtnummer, :bestemming, :gate, :max_passagiers, 
      :max_gewicht_pp, :max_gewicht_totaal, :vertrektijd, :vliegtuigmaatschappij)";
      $query = $verbinding->prepare($sql);
      
      $query->execute([':vliegtuigmaatschappij' => $vliegtuigmaatschappij, ':vluchtnummer' => $vluchtnummer,
        ':bestemming' => $bestemming, ':vertrektijd' => $vertrektijd, ':max_passagiers' => $max_passagiers, ':gate' => $gate, ':max_gewicht_pp' => $max_gewicht_pp, 
        ':max_gewicht_totaal' => $max_gewicht_totaal]);
  }
  
?>
<body>
    <div class="BeginStuk">
    <h1>Vlucht toevoegen</h1>
    <h2>Voeg een nieuwe vlucht toe</h2>
                    <form action="vlucht_toevoegen.php">
                        <div>
                            <label for="vliegtuigmaatschappij">vliegtuigmaatschappij:</label>
                            <input type="text" name="vliegtuigmaatschappij" id="vliegtuigmaatschappij" placeholder="vliegtuigmaatschappij" required>
                            <label for="vluchtnummer">vluchtnummer:</label>
                            <input type="text" name="vluchtnummer" id="vluchtnummer" placeholder="vluchtnummer" required>
                            <label for="bestemming">Bestemming:</label>
                            <input type="text" name="bestemming" id="bestemming" placeholder="bestemming" required>
                            <label for="datum">datum vertrek:</label>
                            <input type="date" name="vertrek_datum" id="datum" >
                            <label for="max">max passagiers:</label>
                            <input type="text" name="max_passagiers" id="max" placeholder="max_passagiers" required>
                            <label for="gate">gate:</label>
                            <input type="text" id="gate" name="gate" placeholder="gate" >
                            <label for="gewichtpp">max gewicht pp:</label>
                            <input type="text" id="gewichtpp" name="max_gewicht_pp" placeholder="gewicht" required>
                            <label for="maxtot">max gewicht totaal:</label>
                            <input type="text" id="maxtot" name="max_gewicht_totaal" placeholder="max-gewicht" required>
                        </div>
                        <input type="submit" value="Toevoegen">
                    </form>
<?php
    include 'footer.php';
?>
</body>

</html>
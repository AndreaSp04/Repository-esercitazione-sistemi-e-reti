<!DOCTYPE html>
<html lang="it">
   <head>
      <!-- inserimento delle informazioni base per la pagina -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- titolo della pagina -->
      <title>Esercitazione sistemi</title>
      <!-- implementazione di bootstrap.css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- implementazione di style.css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
   </head>
   <body>
      <!-- inizio header -->
      <div class="header_section">
      </div>
      <!-- fine header -->
      <!-- inizio sezione ricerca dati -->
      <div class="our_section layout_padding">
         <div class="container">
            <!-- scritta grande al centro della pagina -->
            <h1 class="our_text"><strong>Ricerca i dati</strong></h1>
            <p class="client_long_text">Qui noi raccoglieremo le informazioni dal nostro database garantendo:</p>
            <div class="row padding_top_0">
               <div class="col-lg-4">
                  <!-- inizio della parte con le immagini -->
                  <div class="image_7"><a href="#"><img src="images/img-1.png"></a></div>
                  <h2 class="design_text">Sicurezza</h2>
                  <p class="fact_text">I tuoi dati sono all'interno di un database remoto crittato</p>
               </div>
               <div class="col-lg-4">
                  <div class="image_7"><a href="#"><img src="images/img-2.png"></a></div>
                  <h2 class="design_text">Comodità</h2>
                  <p class="fact_text">Basterà premere un tasto per trovare i tuoi dati</p>
               </div>
               <div class="col-lg-4">
                  <div class="image_7"><a href="#"><img src="images/img-3.png"></a></div>
                  <h2 class="design_text">Velocità</h2>
                  <p class="fact_text">L'estrazione dei dati è praticamente immediata</p>
               </div>
            </div>
           <!-- <select> 
               <option value="0">Seleziona un prezzo</option>
               <option value="300">€300</option>
               <option value="500">€500</option>
               <option value="1000">€1000</option>
               <option value="2000">€2000</option>
             </select>
            </form>


             <select>
               <option value="0">Seleziona una categoria</option>
               <option value="tutte">tutte le categorie</option>
               <option value="Videogiochi">Videogiochi</option>
               <option value="TV">TV</option>
               <option value="Telefoni">Telefoni</option>
             </select>
               -->
         </div>

               <div class="bt_main">
                  <a href="#" class="bottone">Ricerca dati</a><br><br>
               </div>
            
      </div>
      <!-- fine sezione ricerca dati -->
      <!-- inizio sezione copyright -->
      <div class="copyright_section">
         <p class="copyright_text">Copyright 2023 Tutti i diritti riservati</p>
      </div>
      <!-- fine sezione copyright -->
      <!-- inizio php -->

      <?php
         // configurazione del database
         $servername = "localhost";
         $username = "nome_utente";
         $password = "password!";
         $dbname = "prova_sistemi";

         // connessione al database
         $conn = new mysqli($servername, $username, $password, $dbname);
         if ($conn->connect_error) {
          die("Connessione al database fallita: " . $conn->connect_error);
         }

         // esecuzione della query
         $sql = "SELECT * FROM prodotto";
         $result = $conn->query($sql);

         // verifica se la query ha restituito dei risultati
         if ($result->num_rows > 0) {
             // Stampa dei risultati della query
             while ($row = $result->fetch_assoc()) {
             echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";
             }
         } else {
             echo "Nessun risultato trovato.";
}

// chiusura della connessione al database
$conn->close();
?>

   <!-- tag di chiusura -->
   </body>
</html>


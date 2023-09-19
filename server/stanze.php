<?php

        // inizializzo l'oggetto che conterrĂ  la risposta al client
        $obj = null;

        // inizializza una connessione a un database MySQL
        $indirizzoServerDBMS = "localhost";
        $nomeDB = "4a_hotel";
        $conn = mysqli_connect($indirizzoServerDBMS, "root", "", $nomeDB);
    
        // verifica la connessione
        if($conn -> connect_errno)
            $obj = getRisposta(-1, "Errore connessione al DBMS");
        else
            $obj = getRisposta(0, "Connessione al DBMS effettuata");

        // creo la query per estrarre tutte le stanze dal DB
        $query = "SELECT * FROM stanze";
        $ris = $conn -> query($query);
        if($ris){
            $obj -> stanze = array();
            while($vet = $ris -> fetch_assoc()){
                array_push($obj -> stanze, $vet);
            }
        }


function getRisposta($cod, $desc, $obj = null){
    if(!$obj) $obj = new stdClass();
    $obj -> cod = $cod;
    $obj -> desc = $desc;
    return $obj;
}
?>
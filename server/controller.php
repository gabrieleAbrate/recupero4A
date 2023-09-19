<?php
    // n.b. => http://localhost/_abrate/_fea/5A/recupero4A/server/controller.php/  + "quello che ti serve (test, ecc)" per richiamare il controller
    // prelevo tutto quello che è davanti al primo slash
    $request = $_SERVER['REQUEST_URI'];
    // recupero solo quello che è dopo il l'ultimo slash
    $request = substr($request, strrpos($request, '/') + 1);
    // aggiungo in testa a $request il carattere /
    $request = '/' . $request;
    echo $request, '<br>';

    switch($request){
        case '/' :
        case '' :
            include("../index.html");
            break;
        case '/test' :
            include("test.php");
            break;
        default:
            echo "Nessuna risposta dal server";
            break;
    }
    

?>
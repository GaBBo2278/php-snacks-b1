<?php
    //tramite un if controllo se i valori passati sono vuoti
    if (!empty($_GET['name']) || !empty($_GET['age']) || !empty($_GET['mail'])) {
        echo 'Parametri mancanti';
    //tramite un if controllo se la lunghezza del nome è minore di 3 caratteri
    } elseif (strlen($_GET['name']) <= 3) {
        echo 'Nome troppo breve';
    //tramite un if controllo se l'età è un valore numerico
    } elseif (!is_numeric($_GET['age'])) {
        echo 'Eta non è un numero';
    //tramite un if controllo se nella mail c'è la chiocciola(@) e il punto(.)
    } elseif (strpos($_GET['mail'], '@') === false || strpos($_GET['mail'], '.') === false) {
        echo 'E-mail non è valida';
    //se tutte le richieste sono state rispettate stampo Accesso consentito
    } else {
        echo 'Accesso consentito';
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Elaborazione</title>
</head>
<body>
<?php
    // Controlla se i dati sono stati inviati correttamente
    if(isset($_POST['paragrafo']) && isset($_POST['parola'])) {
        // Prendi il paragrafo e la parola da censurare dalla richiesta
        $paragrafo = $_POST['paragrafo'];
        $parolaDaCensurare = $_POST['parola'];

        // Stampa il paragrafo e la sua lunghezza
        echo "<h2>Paragrafo:</h2>";
        echo "<p>" . $paragrafo . "</p>";
        echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . " caratteri</p>";

        // Sostituisci la parola da censurare con "***" nel paragrafo
        $paragrafoCensurato = str_ireplace($parolaDaCensurare, '***', $paragrafo);

        // Stampa di nuovo il paragrafo censurato e la sua lunghezza
        echo "<h2>Paragrafo Censurato:</h2>";
        echo "<p>" . $paragrafoCensurato . "</p>";
        echo "<p>Lunghezza del paragrafo censurato: " . strlen($paragrafoCensurato) . " caratteri</p>";
    } else {
        // Se i dati non sono stati inviati correttamente, mostra un messaggio di errore
        echo "<h2>Errore: Dati mancanti</h2>";
    }
?>
</body>
</html>

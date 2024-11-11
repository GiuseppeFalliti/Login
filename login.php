<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex; 
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #dfdfdf;
        }
        .dati {
            display: flex;
            justify-content: center; 
            flex-direction: column;
            width: 440px;
            height: 480px;
            padding: 30px;
        }
    </style>
</head>
<body>
<?php
    $accessoConsentito = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeUtente = $_POST["UserName"];
        $password = $_POST["password"];

        
        $file = fopen("utenti.txt", "r");
        if ($file) {
            while (($line = fgets($file)) !== false) {
                $datiUtente = explode("|", trim($line)); 
                if ($datiUtente[0] == $nomeUtente && $datiUtente[3] == $password) {
                    $accessoConsentito = true;
                    $nome = $datiUtente[1];
                    $cognome = $datiUtente[2];
                    $dataNascita = $datiUtente[4];
                    break;
                }
            }
            fclose($file);
        }
    }
?>

<div class="dati">
    <?php if ($accessoConsentito): ?>
        <h1>Accesso effettuato con successo</h1>
        <h3>Nome Utente: <?php echo htmlspecialchars($nomeUtente); ?></h3>
        <h3>Nome: <?php echo htmlspecialchars($nome); ?></h3>
        <h3>Cognome: <?php echo htmlspecialchars($cognome); ?></h3>
        <h3>Data di Nascita: <?php echo htmlspecialchars($dataNascita); ?></h3>
    <?php else: ?>
        <h1>Errore: credenziali non valide</h1>
    <?php endif; ?>
</div>
</body>
</html>

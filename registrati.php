<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Icrizione</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
}
body{
    display: flex; 
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #dfdfdf;
}
.dati{
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
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeUtente = $_POST["UserName"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $password = $_POST["password"];
        $dataNascita = $_POST["data"];
    
}
?>
<div class="dati">
<h1>Hai Effetuato l'accesso</h1>
<h3>Nome Utente: <?php echo($nomeUtente);?></h3>
<h3>Nome: <?php echo($nome);?></h3>
<h3>Cognome: <?php echo($cognome);?></h3>
<h3>Password: <?php echo($password);?></h3>
<h3>Data Nascita: <?php echo($dataNascita);?></h3>
</body>
</html>
</div>
<!DOCTYPE html>
<html>
<body>
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nomeUtente = $_POST["utente"];
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $password = $_POST["password"];
    $dataNascita = $_POST["data"];

    printf("Dati: ". "Nome Utente:" .$nomeUtente ."|Nome:". $nome."|Cognome:". $cognome."|Password:". $password."|Data: ". $dataNascita);
    echo("<h1></h1>",$nomeUtente); //fare tutto
}
?>
</body>
</html>

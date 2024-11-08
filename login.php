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
    echo("<h1>Iscritto!</h1>");
    echo("<h3>Nome Utente:</h3>".$nomeUtente);
    echo("<h3>Nome:</h3>".$nome);
    echo("<h3>Cognome:</h3>".$cognome);
    echo("<h3>Password:</h3>".$password);
    echo("<h3>Data Nascita:</h3>".$dataNascita);
}
?>
</body>
</html>

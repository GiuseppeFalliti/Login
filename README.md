Progetto di Login e Registrazione

Questo progetto implementa un sistema di login e registrazione di base con pagine HTML e PHP. Include tre pagine principali: una per il login (index.html), una per la registrazione (registrati.html), e una per la visualizzazione dei dati dell'utente dopo l'accesso o la registrazione (login.php e registrati.php).
Struttura dei File
1. index.html

La pagina di login iniziale, dove l'utente può inserire nome utente e password per effettuare l'accesso. Include:

    Un form per il login con due campi: UserName (nome utente) e password.
    Un link "Password Dimenticata" (solo a scopo illustrativo) e un'opzione "Resta Connesso" per l'utente.
    Un link che reindirizza alla pagina di registrazione (registrati.html) se l'utente non ha un account.

2. login.php

Questo file PHP riceve i dati di login inviati da index.html e visualizza i dati dell'utente.

    Raccoglie UserName e password tramite $_POST.
    Visualizza un messaggio di conferma dell'accesso e i dettagli dell'utente.

3. registrati.html

La pagina di registrazione, che consente agli utenti di creare un nuovo account. Include un form con i campi:

    UserName: nome utente scelto dall'utente
    nome: nome dell'utente
    cognome: cognome dell'utente
    password: password dell'utente (con requisiti di lunghezza e complessità)
    data: data di nascita dell'utente
    Una volta inviato il form, l'utente viene reindirizzato a registrati.php.

4. registrati.php

Questo file PHP gestisce i dati di registrazione inviati da registrati.html e mostra i dettagli dell'account creato.

    Raccoglie UserName, nome, cognome, password, e data.
    Visualizza un messaggio di conferma della registrazione e i dati dell'utente registrato.

Stile CSS

    I file HTML fanno riferimento a fogli di stile esterni style.css e style2.css per l'estetica e il layout.
    Viene utilizzato il font Poppins per lo stile dei testi, con una formattazione responsiva e uno sfondo chiaro.

Requisiti della Password

La password deve contenere:

    Almeno 8 caratteri.
    Almeno una lettera e un numero.

Funzionamento

    L'utente può accedere tramite index.html o registrarsi tramite registrati.html.
    In caso di registrazione, i dati vengono inviati a registrati.php, che mostra un messaggio di conferma e i dati dell'utente.
    In caso di login, i dati vengono inviati a login.php, che mostra un messaggio di conferma dell'accesso con i dettagli dell'utente.

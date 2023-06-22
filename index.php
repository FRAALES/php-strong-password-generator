<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <?php include "functions.php" ?>

    <style>
    
    </style>
    </head>
    <body class="container bg-danger  ">
        <!-- Todo

            Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
        
        Milestone 1

            Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere minuscole e maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php.
        
        Milestone 2

            Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale. 
            LEZIONE 21 GIUGNO 02:43:40 (SI CREANO I DUE FILE E SI USA INCLUDE) -->

        <h1 class="text-light text-center my-5">
            Strong Password Generator
        </h1>
        <h2 class="text-light text-center">
            Genera una Password Sicura
        </h2>
        <form class="text-center my-5 bg-light">
            <label for="password">Lunghezza Password:</label>
            <input type="password" name="password" id="password">
            <br>
            <label for="ripetizioni_consentite">Consenti ripetizioni di uno o più caratteri:</label>
            <label for=""><input type="radio">Sì</label>
            <br>
            <label for=""><input type="radio">No</label>
            <br>
            <input class="bg-info text-light"type="submit" value="INVIA LUNGHEZZA PASSWORD">
            <input type="submit" value="Annulla">
        </form>

    </body>
</html>
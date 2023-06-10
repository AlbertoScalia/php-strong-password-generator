<?php 

/*
DESCRIZIONE
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato. Il layout allegato è solo d'esempio e si riferisce comunque alla versione con bonus. Fate attenzione alle singole milestone preoccupandovi solo del necessario.
MILESTONE 1
Creare un form dove l'utente può scegliere la lunghezza dalla password da generare.
La lunghezza scelta verrà inviata tramite GET.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
MILESTONE 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
MILESTONE 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
MILESTONE 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
*/


include __DIR__ . '/helpers/functions.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="text-center">PHP Strong Password Generator</h1>
        <h2 class="text-center">Genera una password sicura</h2>
        <div class="card rounded-0 shadow">
            <div class="card-body p-5">
                <form action="" method="get">
                    <div class="mb-3 d-flex">
                        <label for="length" class="form-label w-50">Lunghezza password:</label>
                        <input type="text" class="form-control w-50" id="length" name="length">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-light">Annulla</button>
                </form>
                <?php if(!empty($_GET['length'])) : ?>
                <p class="pt-4">La tua password è <?= $password ?></p>
                <?php endif ?>
            </div>
        </div>
    </div>

</body>
</html>
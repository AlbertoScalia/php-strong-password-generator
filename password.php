<?php 

session_start();


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
    <h2 class="text-center pb-5">Genera una password sicura</h2>
        <div class="card rounded-0 shadow">
            <div class="card-body p-5">

                <p>La tua password è <?= $_SESSION['password'] ?></p>

            </div>
        </div>
    </div>

</body>
</html>
<?php

$length = $_GET['psw-gen'];    


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/12bool.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header class="my-container"> <!--header-->
            <h1>
                Strong Password Generator
            </h1>
        </header>

        <main class="my-container"> <!--main-->
            <div >
                <form method="GET">
                    <label for="psw-gen">Choose Password Length</label>
                    <input id="psw-gen" name="psw-gen" type="number" min="1" max="30" class="form-control"  aria-label="Password's length" >
                    <button class="btn btn-outline-secondary" type="submit" >Genera</button>
                </form>
            </div>
            <div class="pt-5">
                <h2>
                    Password Generated: <?php
                     echo substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwz.,-_#[]%$/()="!'),1,$length);
                     ?>
                </h2>
            </div>
        </main>
    </body>
</html>
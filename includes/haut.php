<?php
    require 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Histoire dont vous êtes le héros</title>
    </head>

    <body>
        <div id="conteneur">
            <header>
                <div id="logo">
                    <div>
                        <img src="images/logo.png" alt="Logo d'un chaudron d'or" />
                    </div> 
                    
                    <div id="titre-logo">
                        <h1>
                            <?php
                                if (isset($_COOKIE["pseudo"])) {
                                    echo $_COOKIE["pseudo"];
                                } else {
                                    echo "Voyage";
                                }
                            ?>
                         au pays des Leprechauns
                        </h1>
                    </div>
                </div>

                <nav class="ordinateur">
                    <ul>
                        <li><a href="/recommencer.php">Recommencer</a></li>
                        <li><a href="/credits.php">Crédits</a></li>
                    </ul>
                </nav>
            </header>

            <hr id="separation-1" />

            <section>
                <article>
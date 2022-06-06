<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/I-Never-Came-Home-Again.mp3" controls></audio></div>

    <p>Au bout de plusieurs minutes, vous recevez un nouveau message. Vous lisez ceci : RPMGQ.</p>

    <?php if (!isset($_GET["indices"])) { ?>
    <p><a href="/aide_2.php?indices=1">Voir l'indice 1</a></p>
    <?php } else {
        $indice = intval($_GET["indices"]);

        if ($indice >= 1) {
            echo "<p>Indice 1 : Code César</p>";
        }
    
        if ($indice >= 2) {
            echo '<p>Indice 2 : Décaler chaque lettre de 2</p>';
        }
    
        if ($indice >= 3) {
            echo '<p>Solution : TROIS (taper 3)</p>';
        }

        if ($indice === 1) {
            echo '<p><a href="/aide_2.php?indices=2">Voir l\'indice 2</a></p>';
        }

        if ($indice === 2) {
            echo '<p><a href="/aide_2.php?indices=3">Voir la solution</a></p>';
        }
    } ?>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li>
            <p>
                <form method="post" action="enigme_2_bis.php">            
                <label for="enigme">Vous envoyez le code (taper le chiffre) : </label>
            </p>

            <div>    
                <input type="number" name="enigme" id="enigme" maxlength="1" />            
                <input type="submit" value="Valider" />
            </div></form>
        </li>
        <li><a href="hasard.php">Vous donnez un code au hasard.</a></li>
        <li><a href="abandonner_2.php">Le code est trop compliqué. Vous baissez les bras et expliquez que vous ne pouvez pas plus aider.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Votre salon douillet, sur votre téléphone";
require "includes/bas.php";
?> 
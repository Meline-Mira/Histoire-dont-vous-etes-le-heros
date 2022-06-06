<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/The-Cave-of-the-Ancient-Warriors-1-c_01.mp3" controls></audio></div>

    <p>Vous avancez tout droit sur quelques mètres, puis tombez de nouveau sur plusieurs embranchements. Heureusement, 
    cette fois encore, le voleur a dû se repérer lui aussi et a laissé un nouveau code. </p>
    
    <p>Vous lisez ceci : RPMGQ.</p>

    <?php if (!isset($_GET["indices"])) { ?>
    <p><a href="/code_2.php?indices=1">Voir l'indice 1</a></p>
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
            echo '<p><a href="/code_2.php?indices=2">Voir l\'indice 2</a></p>';
        }

        if ($indice === 2) {
            echo '<p><a href="/code_2.php?indices=3">Voir la solution</a></p>';
        }
    } ?>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li>
            <p>
                <form method="post" action="enigme_2.php">
                <label for="enigme">Vous trouvez le code (taper le chiffre) : </label>
            </p>

            <div>
                <input type="number" name="enigme" id="enigme" maxlength="1" />            
                <input type="submit" value="Valider" />
            </div></form>
        </li>
        <li><a href="perdu.php">Vous prenez un tunnel au hasard.</a></li>
        <li><a href="abandonner_1.php">Vous ne savez pas comment décrypter le message. Vous baissez les bras et préférez rentrer chez 
        vous.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Les tunnels labyrinthiques des Leprechauns";
require "includes/bas.php";
?> 
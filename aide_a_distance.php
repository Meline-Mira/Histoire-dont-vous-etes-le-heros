<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/I-Never-Came-Home-Again.mp3" controls></audio></div>

    <p>Vous recevez un premier message avec une photo d'empreintes</p>

    <p id="image"><img src="images/empreintes.jpg" alt="empreintes des pas" /></p>

    <p>Les traces sont certes grandes, comme on vous l’avait annoncé, mais très rapprochées et vraiment trop peu 
    profondes pour que tout concorde. Votre première hypothèse est donc que le voleur est plus petit et moins lourd que 
    ce que les Leprechauns ne le pensaient. Il porte sûrement de faux pieds immenses pour impressionner. Vous faites 
    part de vos premières impressions.</p>

    <p>Peu de temps après, vous recevez ce code : 17.21.1.20.18.5</p>

    <?php if (!isset($_GET["indices"])) { ?>
    <p><a href="/traces.php?indices=1">Voir l'indice 1</a></p>
    <?php } else {
        $indice = intval($_GET["indices"]);

        if ($indice >= 1) {
            echo "<p>Indice 1 : emplacement des lettres dans l'alphabet</p>";
        }
    
        if ($indice >= 2) {
            echo '<p>Indice 2 : A = 1, B = 2, C = 3, ...</p>';
        }
    
        if ($indice >= 3) {
            echo '<p>Solution : quatre (taper 4)</p>';
        }

        if ($indice === 1) {
            echo '<p><a href="/traces.php?indices=2">Voir l\'indice 2</a></p>';
        }

        if ($indice === 2) {
            echo '<p><a href="/traces.php?indices=3">Voir la solution</a></p>';
        }
    } ?>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><p>
                <form method="post" action="enigme_1_bis.php">            
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
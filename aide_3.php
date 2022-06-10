<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/I-Never-Came-Home-Again.mp3" controls
    <?php echo musique_autoplay(); ?>
    ></audio></div>

    <p>Cette fois, vous attendez beaucoup plus longtemps avant de recevoir un nouveau message. Le nouveau code est 
    "N - I = ". Votre tante vous précise que vous n'avez pas besoin de vous presser pour répondre, qu'elle a tout son 
    temps.</p>

    <p>Serait-elle fatiguée ? Après tout, elle n'est plus de la première jeunesse. Dans le doute, et parce que vous 
    tenez beaucoup à elle malgré ses requêtes étranges, vous décidez de faire durer le décryptage.</p>

    <p>Le code est : N - I =</p>

    <div id="indice">
        <?php if (!isset($_GET["indices"])) { ?>
        <p><a href="/aide_3.php?indices=1#indice">Voir l'indice 1</a></p>
        <?php } else {
            $indice = intval($_GET["indices"]);

            if ($indice >= 1) {
                echo "<p>Indice 1 : Emplacement des lettres dans l'alphabet</p>";
            }
        
            if ($indice >= 2) {
                echo '<p>Indice 2 : N = 14, I = 9</p>';
            }
        
            if ($indice >= 3) {
                echo '<p>Solution : 14 - 9 = 5 (taper 5)</p>';
            }

            if ($indice === 1) {
                echo '<p><a href="/aide_3.php?indices=2#indice">Voir l\'indice 2</a></p>';
            }

            if ($indice === 2) {
                echo '<p><a href="/aide_3.php?indices=3#indice">Voir la solution</a></p>';
            }
        } ?>
    </div>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li>
            <p>    
                <form method="post" action="enigme_3_bis.php">            
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
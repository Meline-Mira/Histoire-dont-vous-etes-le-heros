<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>Tatie Germaine commence à fatiguer. Vous l'auriez bien porté pour la soulager, mais la hauteur des tunnels ne 
    vous le permet pas... À moins que vous ne teniez particulièrement à ce qu'elle se cogne la tête à tous les pas. Vous 
    ne regrettez pas de l'avoir accompagné à ce point, n'est-ce pas ? Pour faire bonne figure, vous ferez exprès de 
    mettre du temps à trouver le tunnel à choisir lors du prochain embranchement. Comme ça, votre tante adorée pourra se 
    reposer un peu.</p>

    <p>D'ailleurs, en parlant d'embranchement, vous en trouvez enfin un. Vous cherchez pendant de longues minutes le 
    prochain code à déchiffrer. Si on vous le demande, vous répondrez que non le "N - I = " n'était pas écrit assez 
    gros, et qu'en plus il était caché dans une ombre. Quelles bêtises vous êtes 
    <?php
            echo accorder('prêt', 'prête');
    ?> à dire pour préserver votre tatie Germaine.</p>

    <p>Le code est donc : N - I =</p>

    <?php if (!isset($_GET["indices"])) { ?>
    <p><a href="/code_3.php?indices=1">Voir l'indice 1</a></p>
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
            echo '<p><a href="/code_3.php?indices=2">Voir l\'indice 2</a></p>';
        }

        if ($indice === 2) {
            echo '<p><a href="/code_3.php?indices=3">Voir la solution</a></p>';
        }
    } ?>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><form method="post" action="enigme_3.php">
            
            <label for="enigme">Vous trouvez le code (taper le chiffre) : </label>
            <input type="number" name="enigme" id="enigme" maxlength="1" /> 
            <p>
            <input type="submit" value="Valider" />
            </p></form></li>
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
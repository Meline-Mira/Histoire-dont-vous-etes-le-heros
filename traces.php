<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/The-Cave-of-the-Ancient-Warriors-#1-c_01.mp3" controls></audio></div>

    <p id="image"><img src="images/empreintes.jpg" alt="empreintes des pas" /></p>

    <p>Les traces sont certes grandes, comme on vous l’avait annoncé, mais très rapprochées et vraiment trop peu 
    profondes pour que tout concorde. Votre première hypothèse est donc que le voleur est plus petit et moins lourd que 
    ce que les Leprechauns ne le pensaient. Il porte sûrement de faux pieds immenses pour impressionner. Un voleur trop 
    grand se serait cogné de partout avec cette si petite hauteur sous plafond, ce qui n’est pas très pratique.</p>

    <p>Alors que vous vous dites qu’au moins cette habitation ne doit pas être trop compliquée à chauffer l’hiver, vous 
    surprenez le regard insistant d’Asling. Il serait bien que vous reveniez à vos moutons… Enfin vos Leprechauns en 
    l'occurrence. Vous donnez donc vos premières conclusions, puis suivez les empreintes un moment.</p>

    <p>Malheureusement, les traces de pas finissent par disparaître. En effet, la terre laisse place à de la roche (bien 
    moins meuble, dommage), vous ne pouvez pas pister le voleur si facilement. De plus, à partir d’ici commencent 
    plusieurs tunnels qui semblent tous aller dans des directions différentes. Au premier abord, vous pourriez vous dire 
    que c’est une sacrée tuile (bon, ok, s’en est un peu une quand même). Mais vous êtes un enquêteur de renom, vous 
    n’allez pas vous laisser aller si facilement. Alors vous sortez votre loupe et commencez à regarder autour de vous.</p>

    <p>Déjà, vous voyez un nombre au-dessus de chaque tunnel, ce qui sera plus simple pour vous repérer. Au bout d’un 
    moment, sur un mur, vous trouvez un code. Il vous indiquera peut-être quel tunnel emprunter.</p>

    <p>Vous lisez ceci : 17.21.1.20.18.5</p>

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
                <form method="post" action="enigme_1.php">            
                <label for="enigme">Vous trouvez le code (taper le chiffre) : </label> </p>
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
$zone = "La demeure des Leprechauns";
require "includes/bas.php";
?> 
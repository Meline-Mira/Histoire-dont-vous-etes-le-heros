<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/skin_cells_touch.flac" controls></audio></div>

    <p>Les Leprechauns sont furieux de vous avoir fait confiance. Malheureusement, leur courroux à votre égard s'étend à 
    votre tante qui se retrouve obligée de quitter l'Irlande. Elle est immensément déçue par votre comportement et 
    triste d'avoir perdu la confiance de ces êtres qu'elle cherchait depuis si longtemps. </p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Je vous conseille de vous faire pardonner et de prendre bien soin d'elle. Vous ne voulez pas que tatie Germaine 
    tombe dans la dépression. Mais comme vous la connaissez bien, vous savez que de la patience et de grosses boîtes de 
    chocolats seront vos meilleurs alliés pour traverser cette période.</p>

    <p>Toute cette histoire vous aura appris une chose : il ne faut jamais, contrarier un Leprechaun. Maintenant, vous 
    êtes 
    <?php
            echo accorder('prévenu', 'prévenue');
    ?></p>
</div>

<?php
$zone = "Votre salon douillet";
require "includes/bas.php";
?> 
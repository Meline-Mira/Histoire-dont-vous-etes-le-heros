<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/skin_cells_touch.flac" controls
    <?php echo musique_autoplay(); ?>
    ></audio></div>

    <p>Votre tante vous remercie d'avoir pris le temps de discuter avec elle. Elle comprend que ce ne soit pas simple 
    de venir sur un coup de tête, même si vous la sentez déçue. </p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Quelques jours plus tard, tatie Germaine vous envoie un message pour vous dire qu'elle et Leprechauns ont 
    retrouvé le trésor. Elle s'est amusée comme une folle et regrette que vous n'ayez pas pu partager ce moment ensemble. 
    À charge de revanche ? La prochaine fois que vous irez la voir, elle vous présentera ses nouveaux amis.</p>
</div>

<?php
$zone = "Votre salon douillet";
require "includes/bas.php";
?> 
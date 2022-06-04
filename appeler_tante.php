<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>À peine le temps d’une tonalité, que votre tante décroche déjà. Elle ne vous laisse pas le temps de la saluer 
    qu’elle annonce déjà :</p>

    <p>“ J’étais certaine que tu m'appellerais. Et je sais aussi ce que tu vas me dire : que je deviens folle. Rappelle-moi 
    en visio, et on en reparle. “</p>

    <p>Sur ces mots, elle vous raccroche au nez. Vous êtes 
    <?php
        echo accorder('abasourdi', 'abasourdie');
    ?>. 
    Et dire que ce sont les jeunes qu’elle traite 
    de mal élevés. Vous vous jurez de lui dire de balayer devant sa porte la prochaine fois qu’elle vous critiquera sur 
    vos manières. Malgré tout, vous suivez les instructions de tatie Germaine et l’appelez en visio.</p>

    <p>Encore une fois, elle ne vous laisse pas le temps de parler. Vous espérez que ce comportement ne deviendra pas 
    une manie. Cela commence à bien faire.</p>

    <p>“Regarde qui est avec moi. “</p>

    <p>Elle tourne son écran vers un petit être tout de vert vêtu. Celui-ci vous fait signe de la main en souriant et 
    vous en restez comme deux ronds de flan. Vous êtes face (enfin presque) à un Leprechaun. Sous le choc, vous ne 
    trouverez rien de plus malin à faire que raccrocher au nez de votre tante à votre tour. </p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><a href="avion.php">Vous réservez dès à présent votre billet d’avion pour rejoindre votre tante.</a></li>
        <li><a href="bloquer_apres_telephone.php">Vous allez vous coucher et décidez de prendre quelques jours de congés. Cela vous semble 
            indispensable. Vous espérez qu’un peu de repos évitera de nouvelles hallucinations. Vous bloquez votre tante 
            sur votre boîte mail et téléphone, on n'est jamais trop 
            <?php
            echo accorder('prudent', 'prudente');
            ?>.</a></li>
        <li><a href="reflexion.php">Vous décidez de rappeler votre tante, puis de prendre quelques jours de réflexion avant de 
            prendre une décision.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Votre salon douillet, au téléphone";
require "includes/bas.php";
?> 
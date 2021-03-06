<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/koertes-ccby-birdsongloop16s.mp3" controls
    <?php echo musique_autoplay(); ?>
    ></audio></div>

    <p>En ce doux samedi de printemps, vous avez décidé d’aller vous acheter des viennoiseries à la 
    boulangerie. Vous les dégustez avec votre boisson chaude préférée. Son effluve remplit vos 
    narines avec délice et réchauffe agréablement vos mains. Cette journée commence bien, tout en 
    douceur. </p>

    <p>Vous décidez de regarder vos mails en finissant de boire le contenu de votre tasse. Parmi vos 
    nouveaux messages, vous en avez un de votre tante, un brin loufoque, qui vit en Irlande. Elle 
    vous l’a envoyé tard dans la nuit avec pour objet “une enquête à mener”. Cela faisait quelque 
    temps que vous n’aviez pas eu de ses nouvelles, mais un mail à cette heure-ci et avec cet objet… 
    Elle ne tourne toujours pas rond la tantine.</p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><a href="intrigue_mail.php">
            <?php
                echo accorder('Intrigué', 'Intriguée');
            ?>, vous ouvrez le mail.</a></li>
        <li><a href="mail_plus_tard.php">Vous regarderez ce mail plus tard, d’autres vous paraissent plus urgents.</a></li>
        <li><a href="pas_ouvrir_mail.php">Vous décidez de ne pas ouvrir le mail. Cette tante est complétement folle de 
        toute façon.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Votre salon douillet";
require "includes/bas.php";
?> 
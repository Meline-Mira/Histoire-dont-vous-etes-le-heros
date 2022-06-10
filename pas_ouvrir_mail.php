<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/Malloga_Ballinga_Mastered_mp.mp3" controls
    <?php echo musique_autoplay(); ?>
    ></audio></div>

    <p>Deux jours plus tard et plus de 300 messages identiques de votre tante en plus sur votre boite mail, vous devez 
    vous rendre à l’évidence : tatie Germaine cherche à vous contacter. Vous ne pouvez pas continuer à noyer vos 
    courriers de la plus haute importance sous ceux de votre parente. Comment savoir s’il y a des promotions sur ces 
    superbes chaussettes bien chaudes pour l’hiver sinon ? Et vous aurez l’air de quoi demain au travail, si vous ne 
    connaissez pas les derniers potins de stars ? Accessoirement, ce serait une bonne idée de prendre connaissance des 
    informations que vous a envoyées votre fournisseur d'électricité.?</p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><a href="intrigue_mail.php">
            <?php
                echo accorder('Intrigué', 'Intriguée');
            ?>, vous ouvrez le mail.</a></li>
        <li><a href="bloquer_tante.php">Vous bloquez votre tante. Cela suffit maintenant. Elle est au courant que vous pouvez porter 
            plainte pour harcèlement ?</a></li>
        <li><a href="appeler_tante.php">Vous décidez d‘appeler votre tante pour en savoir plus.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Votre salon douillet, devant votre ordinateur";
require "includes/bas.php";
?> 
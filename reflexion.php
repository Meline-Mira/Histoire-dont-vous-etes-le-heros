<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>Vous avez rappelé votre tante et vu le Leprechaun de nouveau. Au cas où vous n'auriez pas bien lu son mail, elle 
    vous a expliqué que ses nouveaux amis se sont fait voler leur or et qu'ils demandaient de l'aide pour le retrouver. 
    Elle vous caresse dans le sens du poil en vous rappelant que vous êtes 
    <?php
        echo accorder('un', 'une');
    ?> incroyable détective. De plus, vous pouvez gagner gros en donnant ce coup de pouce.</p>

    <p>Vous pesez le pour et le contre. Une belle enquête bien rémunérée, c'est intéressant. Mais avez-vous le temps et 
    l'énergie ?</p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><a href="avion.php">Vous réservez dès à présent votre billet d’avion pour rejoindre votre tante.</a></li>
        <li><a href="charge.php">Vous recontactez votre tante pour lui expliquer que vous avez un emploi du temps chargé et que 
        vous ne pouvez pas vous libérer.</a></li>
        <li><a href="aide_a_distance.php"> 
        <?php
            echo accorder('Chargé', 'Chargée');
        ?>  par votre quotidien, vous acceptez néanmoins de donner quelques conseils et idées à distance.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Votre salon douillet";
require "includes/bas.php";
?> 
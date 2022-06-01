<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>Vous arrivez chez un Leprechaun, qui vous regarde rentrer chez lui avec les yeux ronds. Il semblerait qu'il 
    s'appelle Dubhan et qu'il soit le plus grand ennemi d'Asling. Les deux lutins se disputent et en viennent aux mains. 
    Vous, vous n'avez pas signé pour ça, alors vous vous contentez de ne pas rester dans leur chemin et vous décaler 
    lorsque cela semble nécessaire. Au bout d'un moment, ils semblent se mettre d'accord : Asling (qui est en train 
    d'étouffer Dubhan) récupère son or avec quelques chaudrons supplémentaires en dommages et intérêt (qui aurait cru 
    que les Leprechauns avaient un sens de la justice si proche de celle des êtres humains). En contrepartie, son 
    adversaire garde la vie sauve (pour cette fois au moins).</p>

    <p>Vous vous retrouvez donc à faire le chemin en sens inverse pour retourner chez Asling, Iverna et leurs trois 
    enfants, des dizaines de chaudrons dans les bras. Vous êtes stupéfait de voir la quantité d'or que les Leprechauns 
    peuvent porter en une seule fois. Votre tante, en revanche, est bien trop fatiguée pour porter plus d'un chaudron 
    dans chaque main.</p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Vous vous félicitez d'avoir noté le chemin que vous aviez utilisé et effacez les indices vous ayant permis de 
    retrouver le trésor au fur et à mesure que vous passez devant.</p>

    <p>Après avoir cavalé dans un terrier toute la journée, vous êtes 
        <?php
            echo accorder('plein', 'pleine');
        ?> 
    de terre et de transpiration, et ravi de retourner chez votre tante pour vous reposer. Les trois beaux chaudrons 
    débordant d'or que vous rapportez avec vous sont un réconfort bienvenu. Après tout, vous avez des billets d'avion et 
    une tenue ruinée à rentabiliser. Quant à votre tante, avec elle aussi ses trois chaudrons, elle ne trouve rien à 
    redire.</p>

    <p>Félicitations, vous avez résolu le mystère et vous pouvez rentrer chez vous riche. Vous avez bien fait d'aider 
    votre tante. Qui sait ce qu'il se serait passé sinon ?</p>
</div>

<?php
$zone = "Entre la demeur de Dubhan et la maison de votre tante";
require "includes/bas.php";
?> 
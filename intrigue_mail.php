<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>Le message s’ouvre et vous le lisez.</p>
    
    <p>
        <?php
            echo accorder('Mon cher', 'Ma chère').' '.$_COOKIE["pseudo"];
        ?>,
    </p>

    <p>Mon message risque de te paraître fou, mais ce que je m'apprête à te révéler est pourtant tout à fait véridique. 
    Après des années de recherches, je viens enfin de trouver des Leprechauns. En réalité, c’est surtout eux qui sont 
    venus me trouver, mais peu importe. Je vais tout t’expliquer.</p>

    <p>Les Leprechauns sont des créatures extrêmement timides et ils savent se montrer discrets. Ils savaient que je 
    cherchais à les rencontrer, mais préféraient rester cachés. Du moins jusqu'à tout à l'heure.</p>

    <p>Ils ont décidé de venir à ma rencontre afin de me confier une quête. Quelqu'un leur a volé tout leur or. Au vu 
    des traces que le suspect a laissées, il est bien trop imposant pour mes nouveaux amis. De plus, ce ne sont pas de 
    grands fanatiques d’enquêtes, et moi non plus d’ailleurs. Je ne sais même pas par où commencer, alors que toi… Ta 
    réputation n’est plus à faire. Tu es à la hauteur des plus grands détectives de fiction.</p>

    <p>Voici donc ce que je te demande : viens nous aider à retrouver le trésor dérobé. Si nous y parvenons, nous aurons 
    même droit à une compensation pour notre peine. Je te dis cela au cas où la simple amitié de ces adorables personnes 
    ne te suffirait pas.</p>

    <p>Je t'attends très vite.</p>

    <p>Gros bisous sur les deux joues,</p>

    <p>Tatie Germaine</p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><a href="#">Vous réservez dès à présent votre billet d’avion pour rejoindre votre tante.</a></li>
        <li><a href="#">Vous appelez un hôpital psychiatrique proche de chez votre tante, pour leur expliquer qu’elle 
            est persuadée de discuter avec des Leprechauns et que vous vous inquiétez pour sa santé mentale.</a></li>
        <li><a href="#">Vous décidez d‘appeler votre tante pour en savoir plus sur cette histoire abracadabrante.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Votre salon douillet, devant votre ordinateur";
require "includes/bas.php";
?> 
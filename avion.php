<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>Vous envoyez un mail à votre tante pour lui donner votre horaire d'atterrissage, l'appelez pour être certain 
    qu'elle ait toutes les informations dont elle a besoin, puis faites votre valise. N'oubliez pas de prendre votre 
    pyjama et vos sous-vêtements, on a tendance à les oublier facilement… Ce serait dommage, non ? </p>

    <p>Bref, le temps file à toute allure. Le voyage se passe à merveille. 
    <?php
        echo accorder ('Arrivé', 'Arrivée')
    ?> à l'aéroport, votre tante vous attend et vous embrasse les deux joues (comme elle l'avait promis dans son mail). 
    Elle vous amène chez elle pour que vous déposiez vos bagages. </p>

    <p>Vous la suivez ensuite jusque dans son jardin d'où elle appelle les Leprechauns. Un arc-en-ciel apparaît, et son 
    pied est juste devant vous. Sans la moindre hésitation, votre tante dévore les quelques mètres qui la séparent de ce 
    qui semble être l'entrée de la demeure des nouveaux amis de tatie Germaine. 
    <?php
        echo accorder ('Émerveillé', 'Émerveillée')
    ?>, vous la suivez. 

    <p>Vous êtes accueilli par une famille de Leprechauns. Asling (le père) vous présente rapidement Iverna (son épouse), 
    Niallan (son fils aîné), Magosia (sa fille) et Dahey (son cadet). Il vous mène ensuite jusqu'à son lieu de stockage 
    de chaudrons remplis d'or. </p>

    <p>Vous profitez du trajet pour regarder l'habitation autour de vous. Elle est basse de plafonds, je vous conseille 
    de baisser la tête pour ne pas vous cogner. Les murs sont en bois. Il n'y a pas de fenêtre, mais étrangement, il 
    fait pourtant clair à l'intérieur. Le sol est en terre battue, dommage pour vos baskets blanches préférées. Vous 
    n'auriez peut-être pas dû choisir cette paire de chaussures pour partir à l'aventure.</p>

    <p>Vous arrivez devant la porte d'une pièce incroyablement grande. Asling vous informe que c'est là qu'il entrepose 
    habituellement son or. Vous imaginez déjà le nombre de chaudrons qu'il faut pour la remplir et estimez la valeur que 
    cela représente. Le calcul est très approximatif, mais le résultat donne tout de même une somme très coquette. De 
    quoi largement vous racheter des baskets blanches en tout cas. </p>

    <p>Vous décidez de mettre vos rêves de fortune de côté pour le moment, vous avez une enquête à mener. Iverna vous 
    montre de grosses empreintes de pieds présentes devant leur réserve d'or. Elle vous explique que c'est à cause de 
    cela que sa famille a eu peur que le voleur soit trop gros pour eux. </p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><a href="#">Vous examinez les traces de plus près.</a></li>
        <li><a href="#">Vous cherchez sur internet à quel animal ces empreintes peuvent appartenir (et êtes agréablement 
        surpris d'avoir du réseau sur votre téléphone).</a></li>
        <li><a href="#">La taille des empreintes vous impressionne. Finalement vous n'avez pas très envie de vous 
        frotter à un adversaire si grand. Vous faites semblant de regarder ça et là, puis déclarez qu'il n'y a pas assez 
        d'indices pour continuer l'enquête. Vous dites à la petite famille être 
        <?php
            echo accorder('désolé', 'désolée');
        ?>  de ne pas pouvoir les aider plus, puis vous rentrez chez vous.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "À l'aéroport";
require "includes/bas.php";
?> 
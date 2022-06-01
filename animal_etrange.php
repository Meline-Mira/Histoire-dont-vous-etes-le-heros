<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>La forme des traces est plus ou moins humanoïde... Enfin, un humain qui chausserait du 58, mais humain tout de 
    même.</p>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><a href="#">Vous examinez les traces de plus près.</a></li>
        <li><a href="#">La taille des empreintes vous impressionne. Finalement vous n'avez pas très envie de vous 
        frotter à un adversaire si grand. Vous faites semblant de regarder ça et là, puis déclarez qu'il n'y a pas assez 
        d'indices pour continuer l'enquête. Vous dites à la petite famille être 
        <?php
            echo accorder('désolé', 'désolée');
        ?> de ne pas pouvoir les aider plus, puis vous rentrez chez vous.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "La demeure des Leprechauns";
require "includes/bas.php";
?> 
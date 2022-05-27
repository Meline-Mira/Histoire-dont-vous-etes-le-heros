<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>Bienvenue dans cette histoire dont vous allez être le héros.</p>
    <p>Tout au long de votre parcours, vous aurez la possibilité d'activer ou non les musiques proposées.</p>
    <p>Avant de vous lancer, je vais vous demander de renseigner quelques informations.</p>
</div>

<hr id="reliure" />

<div id="propositions">
    <form method="post" action="enregistrer_infos.php">
        <p>
            <label for="pseudo">Choisissez votre pseudo :</lable>
            <input type="text" name="pseudo" id="pseudo" maxlength="10" placeholder="10 caractères max"/>
        </p>

        <p>
            Quel est votre genre (l'intérêt est purement grammatical) ?
        </p>

        <p>
            <input type="radio" name="genre" value="feminin" id="feminin" />
            <label for="feminin">Féminin</label>
        </p>

        <p>
            <input type="radio" name="genre" value="masculin" id="masculin" />
            <label for="masculin">Masculin</label>
        </p>

        <p>
            <input type="radio" name="genre" value="neutre" id="neutre" />
            <label for="neutre">Neutre</label>
        </p>

        <p>
            <input type="submit" value="Valider" />
        </p>
    </form>
</div>

<?php
$zone = "Accueil";
require "includes/bas.php";
?>   
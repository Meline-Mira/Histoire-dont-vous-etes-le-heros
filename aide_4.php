<?php require "includes/haut.php" ?>

<div id="histoire">
    <div id="audio"><audio src="musique/I-Never-Came-Home-Again.mp3" controls></audio></div>

    <p>Jusque là, les codes étaient presque trop simples. Vous espérez que le prochain sera plus corsé. Vous recevez un 
    message et vous jetez sur votre téléphone. C'est bien tatie Germaine qui vous l'envoie, mais elle vous remercie 
    juste de lui avoir permis de faire une pause lorsqu'elle vous a envoyé le code précédent.</p>

    <p>Pour faire passer le temps, vous regardez les publicités que vous suggèrent vos réseaux sociaux. Vous avez le 
    choix entre une peluche géante de licorne, un super aspirateur que vous ne pourrez vous payer qu'avec le trésor des 
    Leprechauns, un mini-golf pour jouer aux wc et un mug avec un emplacement en partie basse pour mettre des biscuits à 
    déguster avec votre boisson. Vous pourriez vous demander pendant des heures ce que cela dit de votre personnalité, 
    lorsque vous recevez enfin un nouveau code.</p>

    <p>Le code est : </p>

    <table>
        <tr>
            <td>3</td>
            <td>9</td>
            <td></td>
            <td>4</td>
            <td></td>
            <td>2</td>
            <td>8</td>
            <td>1</td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td>1</td>
            <td>6</td>
            <td></td>
            <td>7</td>
            <td></td>
            <td>4</td>
            <td></td>
            <td>5</td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
            <td>6</td>
            <td>3</td>
        </tr>

        <tr>
            <td>6</td>
            <td>7</td>
            <td></td>
            <td>9</td>
            <td>8</td>
            <td>4</td>
            <td>5</td>
            <td></td>
            <td>2</td>
        </tr>
        
        <tr>
            <td></td>
            <td>2</td>
            <td>9</td>
            <td></td>
            <td>3</td>
            <td></td>
            <td>x</td>
            <td></td>
            <td>4</td>
        </tr>

        <tr>
            <td>4</td>
            <td>3</td>
            <td>8</td>
            <td>5</td>
            <td>2</td>
            <td></td>
            <td></td>
            <td>7</td>
            <td>9</td>
        </tr>

        <tr>
            <td>7</td>
            <td>5</td>
            <td></td>
            <td>1</td>
            <td></td>
            <td></td>
            <td>3</td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>1</td>
            <td></td>
            <td>4</td>
            <td>7</td>
            <td></td>
            <td>3</td>
            <td></td>
            <td>9</td>
            <td>8</td>
        </tr>

        <tr>
            <td>9</td>
            <td>8</td>
            <td>3</td>
            <td>2</td>
            <td></td>
            <td>6</td>
            <td></td>
            <td>5</td>
            <td>1</td>
        </tr>
    </table>

    <?php if (!isset($_GET["indices"])) { ?>
    <p><a href="/aide_4.php?indices=1">Voir l'indice 1</a></p>
    <?php } else {
        $indice = intval($_GET["indices"]);

        if ($indice >= 1) {
            echo "<p>Indice 1 : Sudoku</p>";
        }
    
        if ($indice >= 2) {
            echo '<p>Indice 2 : Dans chaque ligne, chaque colonne et chaque région (carrés de 3x3), les chiffres de 1 à 
            9 ne peuvent apparaitre qu\'une fois.</p>';
        }
    
        if ($indice >= 3) {
            echo '<p>Solution :</p>
            <table>
            <tr>
                <td>3</td>
                <td>9</td>
                <td class="chiffre">5</td>
                <td>4</td>
                <td class="chiffre">6</td>
                <td>2</td>
                <td>8</td>
                <td>1</td>
                <td class="chiffre">7</td>
            </tr>
    
            <tr>
                <td class="chiffre">8</td>
                <td>1</td>
                <td>6</td>
                <td class="chiffre">3</td>
                <td>7</td>
                <td class="chiffre">9</td>
                <td>4</td>
                <td class="chiffre">2</td>
                <td>5</td>
            </tr>
    
            <tr>
                <td class="chiffre">2</td>
                <td class="chiffre">4</td>
                <td class="chiffre">7</td>
                <td>8</td>
                <td class="chiffre">1</td>
                <td class="chiffre">5</td>
                <td class="chiffre">9</td>
                <td>6</td>
                <td>3</td>
            </tr>
    
            <tr>
                <td>6</td>
                <td>7</td>
                <td class="chiffre">1</td>
                <td>9</td>
                <td>8</td>
                <td>4</td>
                <td>5</td>
                <td class="chiffre">3</td>
                <td>2</td>
            </tr>
            
            <tr>
                <td class="chiffre">5</td>
                <td>2</td>
                <td>9</td>
                <td class="chiffre">6</td>
                <td>3</td>
                <td class="chiffre">7</td>
                <td id="reponse">1</td>
                <td class="chiffre">8</td>
                <td>4</td>
            </tr>
    
            <tr>
                <td>4</td>
                <td>3</td>
                <td>8</td>
                <td>5</td>
                <td>2</td>
                <td class="chiffre">1</td>
                <td class="chiffre">6</td>
                <td>7</td>
                <td>9</td>
            </tr>
    
            <tr>
                <td>7</td>
                <td>5</td>
                <td class="chiffre">2</td>
                <td>1</td>
                <td class="chiffre">9</td>
                <td class="chiffre">8</td>
                <td>3</td>
                <td class="chiffre">4</td>
                <td class="chiffre">6</td>
            </tr>
    
            <tr>
                <td>1</td>
                <td class="chiffre">6</td>
                <td>4</td>
                <td>7</td>
                <td class="chiffre">5</td>
                <td>3</td>
                <td class="chiffre">2</td>
                <td>9</td>
                <td>8</td>
            </tr>
    
            <tr>
                <td>9</td>
                <td>8</td>
                <td>3</td>
                <td>2</td>
                <td class="chiffre">4</td>
                <td>6</td>
                <td class="chiffre">7</td>
                <td>5</td>
                <td>1</td>
            </tr>
        </table>

        <p>(taper 1)</p>';
        }

        if ($indice === 1) {
            echo '<p><a href="/aide_4.php?indices=2">Voir l\'indice 2</a></p>';
        }

        if ($indice === 2) {
            echo '<p><a href="/aide_4.php?indices=3">Voir la solution</a></p>';
        }
    } ?>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li>
            <p>    
                <form method="post" action="enigme_4_bis.php">            
                <label for="enigme">Vous envoyez le code (taper le chiffre) : </label>
            </p>

            <div>
                <input type="number" name="enigme" id="enigme" maxlength="1" /> 
                <input type="submit" value="Valider" />
            </div></form>
        </li>
        <li><a href="hasard.php">Vous donnez un code au hasard.</a></li>
        <li><a href="abandonner_2.php">Le code est trop compliqué. Vous baissez les bras et expliquez que vous ne pouvez pas plus aider.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Votre salon douillet, sur votre téléphone";
require "includes/bas.php";
?> 
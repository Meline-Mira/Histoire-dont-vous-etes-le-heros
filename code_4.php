<?php require "includes/haut.php" ?>

<div id="histoire">
    <p>Vous sentez que votre tante va mieux. Vous repartez donc plus 
        <?php
            echo accorder('confiant', 'confiante');
        ?>. Vous adorez cette enquête, et vous permettez donc de siffloter quelques notes. Bien vite, vos compagnons de 
        voyage vous font subtilement (un coup de pied dans les chevilles) comprendre que vous sifflez faux. Cela vous 
        coupe le sifflet (oui les Leprechauns sont plus adepte des jeux de mots que des sifflements, surtout lorsqu'ils 
        sonnent faux).</p>

    <p>Vous décidez donc de bouder en silence jusqu'au prochain embranchement, et vous vous promettez de les faire 
    poireauter un bon moment ces mal-élevés. Et oui, on ne dirait pas comme ça, mais il ne faut pas trop vous chercher.</p>

    <p>Vous finissez par voir un nouveau carrefour (non, pas le magasin, même si vous rêvez d'une bonne petite glace 
    bien méritée). Vous accomplissez votre vengeance tout en regardant avec beaucoup d'attention une nouvelle 
    inscription. Le code est : </p>

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
    <p><a href="/code_4.php?indices=1">Voir l'indice 1</a></p>
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
            echo '<p><a href="/code_4.php?indices=2">Voir l\'indice 2</a></p>';
        }

        if ($indice === 2) {
            echo '<p><a href="/code_4.php?indices=3">Voir la solution</a></p>';
        }
    } ?>
</div>

<hr id="reliure" />

<div id="propositions">
    <p>Que faites-vous ?</p>
    <ul>
        <li><form method="post" action="enigme_4.php">
            
            <label for="enigme">Vous trouvez le code (taper le chiffre) : </label>
            <input type="number" name="enigme" id="enigme" maxlength="1" /> 
            <p>
            <input type="submit" value="Valider" />
            </p></form></li>
            <li><a href="perdu.php">Vous prenez un tunnel au hasard.</a></li>
            <li><a href="abandonner_1.php">Vous ne savez pas comment décrypter le message. Vous baissez les bras et préférez rentrer 
            chez vous.</a></li>
    </ul>
    </form>
</div>

<?php
$zone = "Les tunnels labyrinthiques des Leprechauns";
require "includes/bas.php";
?> 
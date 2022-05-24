<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Histoire dont vous êtes le héros</title>
    </head>

    <body>
        <div id="conteneur">
            <header>
                <div id="logo">
                    <div id="image">
                        <img src="images/logo.png" alt="Logo d'un chaudron d'or" />
                    </div> 
                    
                    <div id="titre-logo">
                        <h1>Voyage au pays des Leprechauns</h1>
                    </div>
                </div>

                <nav>
                    <ul>
                        <li><a href="#">Recommencer</a></li>
                        <li><a href="#">Changer de pseudo</a></li>
                        <li><a href="#">Crédits</a></li>
                    </ul>
                </nav>
            </header>

            <hr id="separation-1" />

            <section>
                <article>
                    <div id="histoire">
                        <p>Bienvenue dans cette histoire dont vous allez être le héros.</p>
                        <p>Tout au long de votre parcours, vous aurez la possibilité d'activer ou non les musiques proposées.</p>
                        <p>Avant de vous lancer, je vais vous demander de renseigner quelques informations.</p>
                    </div>

                    <hr id="reliure" />

                    <div id="propositions">
                        <form method="post" action="traitement.php">
                            <p>
                                <label for="pseudo">Choisissez votre pseudo :</lable>
                                <input type="text" name="pseudo" id="pseudo" seize="10" placeholder="10 caractères max"/>
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
                </article>

                <aside>
                    <div id="texte">
                    
                        <div id="titre-aside">
                            <h1>Voyage au pays des Leprechauns</h1>
                        </div>

                        <div id="zone">
                            <p>Zone</p>
                        </div>

                        <div id="zone-actuelle">
                            <p>Accueil</p>
                        </div>
                    </div>
                </aside>
            </section>

            <hr id="separation-2" />

            <footer>
                <p>À propos de l'autrice :</p>

                <p id="git">
                    <span class="icone"><i class="fa fa-github" aria-hidden="true"></span></i> <a href="#">Mon profil</a>
                </p>

                <p id="linkedin">
                    <span class="icone"><i class="fa fa-linkedin-square" aria-hidden="true"></span></i> <a href="#">Mon profil</a>
                </p>
            </footer>
        </div>
    </body>
</html>
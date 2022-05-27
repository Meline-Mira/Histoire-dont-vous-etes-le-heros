</article>

                <aside>
                    <div id="texte">
                    
                        <div id="titre-aside">
                            <h1>
                                <?php
                                    if (isset($_COOKIE["pseudo"])) {
                                        echo $_COOKIE["pseudo"];
                                    } else {
                                        echo "Voyage";
                                    }
                                ?>
                                au pays des Leprechauns
                            </h1>
                        </div>

                        <div id="zone">
                            <p>Zone : </p>
                        </div>

                        <div id="zone-actuelle">
                            <p><?php echo $zone; ?></p>
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
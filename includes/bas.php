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

                        <div>
                            <p>
                                <span id="zone">Zone</span> : </br>
                                <?php echo $zone; ?>
                            </p>
                        </div>
                    </div>
                </aside>
            </section>

            <hr id="separation-2" />

            <footer>
                <p>À propos de l'autrice :</p>

                <p id="git">
                    <span class="icone"><i class="fa fa-github" aria-hidden="true"></span></i> 
                    <a href="https://github.com/Meline-Mira">Github</a>
                </p>

                <p id="linkedin">
                    <span class="icone"><i class="fa fa-linkedin-square" aria-hidden="true"></span></i> 
                    <a href="https://www.linkedin.com/in/emeline-gineys-35b2b714b">Linkedin</a>
                </p>
            </footer>
        </div>
    </body>
</html>
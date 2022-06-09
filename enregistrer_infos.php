<?php

setcookie("pseudo", htmlspecialchars($_POST["pseudo"]));
setcookie("genre", $_POST["genre"]);
setcookie("musique", $_POST["musique"]);

header('Location: /intro.php');

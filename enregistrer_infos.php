<?php

setcookie("pseudo", htmlspecialchars($_POST["pseudo"]));
setcookie("genre", $_POST["genre"]);

header('Location: /intro.php');

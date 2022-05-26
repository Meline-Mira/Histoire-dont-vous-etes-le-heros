<?php

setcookie("pseudo", $_POST["pseudo"]);
setcookie("genre", $_POST["genre"]);

header('Location: /intro.php');

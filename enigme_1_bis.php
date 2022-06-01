<?php

if ($_POST["enigme"] === "4") {
    header('Location: /aide_2.php');
} else {
    header('Location: /hasard.php');
}

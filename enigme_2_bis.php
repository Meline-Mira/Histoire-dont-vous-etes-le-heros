<?php

if ($_POST["enigme"] === "3") {
    header('Location: /aide_3.php');
} else {
    header('Location: /hasard.php');
}

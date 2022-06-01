<?php

if ($_POST["enigme"] === "5") {
    header('Location: /aide_4.php');
} else {
    header('Location: /hasard.php');
}

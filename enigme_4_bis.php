<?php

if ($_POST["enigme"] === "1") {
    header('Location: /aide_5.php');
} else {
    header('Location: /hasard.php');
}

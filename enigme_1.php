<?php

if ($_POST["enigme"] === "4") {
    header('Location: /code_2.php');
} else {
    header('Location: /perdu.php');
}

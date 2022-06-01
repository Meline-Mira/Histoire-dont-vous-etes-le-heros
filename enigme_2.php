<?php

if ($_POST["enigme"] === "3") {
    header('Location: /code_3.php');
} else {
    header('Location: /perdu.php');
}

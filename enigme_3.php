<?php

if ($_POST["enigme"] === "5") {
    header('Location: /code_4.php');
} else {
    header('Location: /perdu.php');
}

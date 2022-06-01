<?php

if ($_POST["enigme"] === "1") {
    header('Location: /code_5.php');
} else {
    header('Location: /perdu.php');
}

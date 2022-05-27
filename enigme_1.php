<?php

// Vérifier la valeur qui vient du formulaire
// Si elle est correcte, alors rediriger vers le prochain truc
// Sinon, rediriger vers perdu.php

if ($_POST["enigme"] === "4") {
    header('Location: /code_2.php');
} else {
    header('Location: /perdu.php');
}

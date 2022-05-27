<?php

function accorder(string $masculin, string $feminin): string {
    if ($_COOKIE['genre'] === 'feminin') {
        return $feminin;
    }
    else {
        return $masculin;
    }
}

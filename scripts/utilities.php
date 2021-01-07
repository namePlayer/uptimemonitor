<?php

function isLoggedIn(): bool
{
    if(isset($_SESSION['uptimeLoggedIn']) && $_SESSION['uptimeLoggedIn'] > 0) {
        return true;
    }
    return false;
}
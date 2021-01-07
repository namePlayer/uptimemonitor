<?php

function isLoggedIn(): bool
{
    if(isset($_SESSION['uptimeLoggedIn']) && $_SESSION['uptimeLoggedIn'] > 0) {
        return true;
    }
    return false;
}

function getUserId(): int
{
    if(isset($_SESSION['uptimeLoggedIn']) && $_SESSION['uptimeLoggedIn'] > 0) {
        return $_SESSION['uptimeLoggedIn'];
    }
    return 0;
}
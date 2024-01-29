<?php

declare(strict_types=1);

function redirect_back(): never {
    if (array_key_exists('HTTP_REFERER', $_SERVER)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit(1);
}

function session_set(string $key, mixed $value): void {
    $_SESSION[$key] = $value;
}

function session_unset_value(string $key): void {
    unset($_SESSION[$key]);
}

function session_get(string $key, mixed $default = null): mixed {
    if (array_key_exists($key, $_SESSION)) {
        return $_SESSION[$key];
    }

    return $default;
}

function session_get_and_remove(string $key, mixed $default = null): mixed {
    if (array_key_exists($key, $_SESSION)) {
        $value = $_SESSION[$key];
        session_unset_value($key);
        return $value;
    }

    return $default;
}
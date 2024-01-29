<?php

declare(strict_types=1);

session_start();

require __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Connection.php';

function validate_input_exists(string $key): bool {
    session_unset_value("error_$key");

    if (empty($_POST[$key])) {
        session_set("error_$key", "$key este necesar.");
        return false;
    }

    return true;
}

// start here

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    session_set('error', 'Eroare in procesarea formularului.');
    redirect_back();
}

session_unset_value('success');
session_unset_value('error');

$all_input_exists = true;
$all_input_exists &= validate_input_exists('nume');
$all_input_exists &= validate_input_exists('prenume');
$all_input_exists &= validate_input_exists('email');
$all_input_exists &= validate_input_exists('mesaj');

if (! $all_input_exists) {
    redirect_back();
}

$nume = htmlspecialchars($_POST['nume']);
$prenume = htmlspecialchars($_POST['prenume']);
$email = htmlspecialchars($_POST['email']);
$mesaj = htmlspecialchars($_POST['mesaj']);

$conn = new Connection();
$stmt = $conn->prepare("INSERT INTO contact(prenume, nume, email, mesaj) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nume, $prenume, $email, $mesaj);
$res = $stmt->execute();

if ($res) {
    session_set('success', 'Mesajul a fost trimis cu success!');
} else {
    session_set('error', 'Eroare in procesarea mesajului! Va rugam incercati mai tarziu.');
}

$stmt->close();
$conn->close();

redirect_back();


<?php

declare(strict_types=1);

session_start();

require __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Connection.php';

// start here

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    session_set('error', 'Eroare in procesarea formularului.');
    redirect_back();
}

session_unset_value('success');
session_unset_value('error');

if (empty($_POST['id'])) {
    session_set('error', 'Eroare in procesarea formularului.');
    redirect_back();
}

$id = htmlspecialchars($_POST['id']);
$now = date("Y-m-d H:i:s");

$conn = new Connection();
$stmt = $conn->prepare("UPDATE contact SET read_at = ? WHERE id = ?");
$stmt->bind_param("ss", $now, $id);
$res = $stmt->execute();

if ($res) {
    session_set('success', 'Mesajul a fost marcat ca citit!');
} else {
    session_set('error', 'Va rugam incercati mai tarziu.');
}

$stmt->close();
$conn->close();

redirect_back();

<?php

session_start();

require_once __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Connection.php';

$conn = new Connection();
$sql = "SELECT id, prenume, nume, email, mesaj, read_at, created_at, updated_at FROM contact";
$res = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/person.css">
    <title>Contact</title>
</head>

<body>

<div class="page">
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '__nav.php' ?>

    <div class="page__content">
        <div class="container">
            <h1 style="margin-bottom: 1rem;">Lista Contact</h1>

            <div style="margin: 1rem 0;">
                <div style="color: green;">
                    <?php echo session_get_and_remove('success') ?>
                </div>

                <div style="color: red;">
                    <?php echo session_get_and_remove('error') ?>
                </div>
            </div>

            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nume</th>
                        <th>Prenume</th>
                        <th>Email</th>
                        <th>Mesaj</th>
                        <th>Trimis La</th>
                        <th>Actiuni</th>
                        <th>Modificat La</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    while ($row = $res->fetch_assoc()) {
                        [
                            'id' => $id,
                            'nume' => $nume,
                            'prenume' => $prenume,
                            'email' => $email,
                            'mesaj' => $mesaj,
                            'read_at' => $read_at,
                            'created_at' => $created_at,
                            'updated_at' => $updated_at
                        ] = $row;

                        $background_color = is_null($read_at) ? "" : "style='background-color: lightgray;'";
                        $disabled_read = is_null($read_at) ? "" : "disabled";

                        echo "<tr $background_color>";
                        echo '<td style="white-space: nowrap;">'; echo $id; echo '</td>';
                        echo '<td style="white-space: nowrap;">'; echo $nume; echo '</td>';
                        echo '<td style="white-space: nowrap;">'; echo $prenume; echo '</td>';
                        echo '<td style="white-space: nowrap;">'; echo $email; echo '</td>';
                        echo '<td>'; echo $mesaj; echo '</td>';
                        echo '<td style="white-space: nowrap;">'; echo $created_at; echo '</td>';
                        echo '<td style="white-space: nowrap;">';
                            echo "
                                <form method='POST' action='formular-marcheaza-citit.php'>
                                    <input type='hidden' name='id' id='id' value='$id' />
                                    <button $disabled_read  type='submit'>Marcheaza ca citit</button>
                                </form>
                                
                                <form method='POST' action='formular-sterge.php'>
                                    <input type='hidden' name='id' id='id' value='$id' />
                                    <button type='submit'>Sterge</button>
                                </form>
                            ";
                        echo '</td>';
                        echo '<td style="white-space: nowrap;">'; echo $updated_at; echo '</td>';
                        echo '</tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '__footer.php' ?>
</div>

</body>
</html>


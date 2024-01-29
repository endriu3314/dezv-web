<?php session_start() ?>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php' ?>

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
            <h1>Formular Contact</h1>

            <div style="margin: 1rem 0;">
                <div style="color: green;">
                    <?php echo session_get_and_remove('success') ?>
                </div>

                <div style="color: red;">
                    <?php echo session_get_and_remove('error') ?>
                </div>
            </div>

            <form style="display: flex; flex-direction: column; gap: 1rem;" method="POST" action="formular-contact.php">
                <div>
                    <div style="display: flex; gap: 1rem;">
                        <label for="nume">Nume</label>
                        <input type="text" name="nume" id="nume"/>
                    </div>
                    <div style="color: red;">
                        <?php echo session_get_and_remove('error_nume') ?>
                    </div>
                </div>

                <div>
                    <div style="display: flex; gap: 1rem;">
                        <label for="prenume">Prenume</label>
                        <input type="text" name="prenume" id="prenume"/>
                    </div>
                    <div style="color: red;">
                        <?php echo session_get_and_remove('error_prenume') ?>
                    </div>
                </div>

                <div>
                    <div style="display: flex; gap: 1rem;">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <div style="color: red;">
                        <?php echo session_get_and_remove('error_email') ?>
                    </div>
                </div>

                <div>
                    <div style="display: flex; gap: 1rem;">
                        <label for="mesaj">Mesaj</label>
                        <textarea name="mesaj" id="mesaj" rows="4" cols="50"></textarea>
                    </div>
                    <div style="color: red;">
                        <?php echo session_get_and_remove('error_mesaj') ?>
                    </div>
                </div>

                <div>
                    <button type="submit">Trimite</button>
                </div>
            </form>
        </div>
    </div>

    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '__footer.php' ?>
</div>

</body>
</html>


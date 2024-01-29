<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/person.css">
    <title>Echipa</title>
</head>

<body>

<div class="page">
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '__nav.php' ?>

    <div class="page__content">
        <div class="container">
            <h1 style="margin-bottom: 1rem;">Echipa</h1>

            <div style="margin-bottom: 1rem;">
                Suntem mai mult decât o simplă echipă, suntem o familie diversă de profesioniști
                pasionați, dedicați excelenței în tot ceea ce facem. Fiecare membru al echipei noastre este ales nu doar
                pentru
                competențele și experiența sa profesională, ci și pentru personalitatea și valorile sale, care se aliniază
                cu
                viziunea și cultura noastră corporativă.
            </div>

            <div class="persons--container">
                <div class="persons--category">
                    <div class="persons--category--title">Conducere</div>
                    <div class="persons--category--list">
                        <div class="person--container">
                            <img class="person--image" src="assets/persons/person4.png" alt="Andrei Croitoru-Rusan"/>
                            <div class="person--name">Andrei Croitoru-Rusan</div>
                            <div class="person--title">Fondator</div>
                        </div>

                        <div class="person--container">
                            <img class="person--image" src="assets/persons/person3.png" alt="Andrei Croitoru-Rusan"/>
                            <div class="person--name">David F. Yates</div>
                            <div class="person--title">Director Tehnic</div>
                        </div>
                    </div>
                </div>

                <div class="persons--category">
                    <div class="persons--category--title">Dezvoltare</div>
                    <div class="persons--category--list">
                        <div class="person--container">
                            <img class="person--image" src="assets/persons/person2.png" alt="Andrei Croitoru-Rusan"/>
                            <div class="person--name">Michael D. Sato</div>
                            <div class="person--title">Backend Developer</div>
                        </div>

                        <div class="person--container">
                            <img class="person--image" src="assets/persons/person1.png" alt="Andrei Croitoru-Rusan"/>
                            <div class="person--name">Linda M. Rodriguez</div>
                            <div class="person--title">Full Stack Developer</div>
                        </div>

                        <div class="person--container">
                            <img class="person--image" src="assets/persons/person5.png" alt="Andrei Croitoru-Rusan"/>
                            <div class="person--name">Louise J. Harrison</div>
                            <div class="person--title">Full Stack Developer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="join--container">
            <h2 class="join--container--title">Alatura-te echipei!</h2>

            <div class="join--container--description">
                Dacă ești pasionat, dedicat și dornic să te dezvolți într-un mediu dinamic
                și susținător acesta ar putea fi locul perfect pentru tine.
            </div>

            <div class="container" style="display: flex; gap: 1rem; justify-content: center;">
                <div class="join--container--item">
                    <div class="join--container--item--title">
                        Front-End Developer
                    </div>
                    <div class="join--container--item--description">
                        Full-Time
                    </div>
                </div>

                <div class="join--container--item">
                    <div class="join--container--item--title">
                        Director Resurse Umane
                    </div>
                    <div class="join--container--item--description">
                        Full-Time
                    </div>
                </div>

                <div class="join--container--item">
                    <div class="join--container--item--title">
                        Back-End Developer
                    </div>
                    <div class="join--container--item--description">
                        Part-Time
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '__footer.php' ?>
</div>

</body>
</html>


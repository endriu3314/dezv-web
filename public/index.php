<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/home.css">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

    <title>Acasa</title>
</head>

<body>
<div class="page">
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '__nav.php' ?>
    <div class="page__content">
        <div class="container">
            <div style="display: flex; flex-direction: column; gap: 5rem;">
                <div class="categorie">
                    <h1>Servicii</h1>

                    <div style="margin: 1rem 0;">
                        La compania noastră, ne mândrim cu furnizarea unui portofoliu diversificat de servicii
                        profesionale, concepute să răspundă nevoilor complexe ale afacerilor moderne. Portofoliul nostru
                        include:

                        <ul>
                            <li>
                                <b>Dezvoltare Web</b> <br/>
                                Creăm soluții web personalizate, de la site-uri de prezentare la platforme
                                complexe, utilizând tehnologii de ultimă generație pentru a asigura funcționalitate
                                optimă și o
                                prezență online impresionantă.
                            </li>

                            <li>
                                <b>Dezvoltare Aplicații Mobile</b> <br/>
                                Specializați în dezvoltarea de aplicații mobile native și
                                cross-platform, livrăm produse inovatoare, optimizate pentru sistemele de operare iOS și
                                Android, garantând o experiență de utilizare excepțională.
                            </li>

                            <li>
                                <b>Integrări Servicii Externe</b> <br/>
                                Extindem funcționalitățile aplicațiilor și website-urilor
                                prin integrări profesionale cu diverse API-uri și sisteme terțe, îmbunătățind eficiența
                                și experiența utilizatorului.
                            </li>
                        </ul>
                    </div>

                    <div class="categorii">
                        <div class="categorii--item">
                            <span class="material-symbols-outlined" style="font-size: 48px;">
                                language
                            </span>
                            <h4>Dezvoltare Web</h4>
                            <div>
                                Serviciul nostru de dezvoltare web combină design modern, funcționalitate optimă și
                                tehnologii de ultimă oră pentru a crea site-uri web personalizate, performante și ușor
                                de utilizat, asigurând o prezență online puternică și eficientă pentru afacerea dvs.
                            </div>
                        </div>
                        <div class="categorii--item">
                            <span class="material-symbols-outlined" style="font-size: 48px;">
                                smartphone
                            </span>
                            <h4>Dezvoltare Mobile</h4>
                            <div>
                                Dezvoltăm aplicații mobile personalizate, inovatoare și ușor de utilizat, optimizate
                                pentru o performanță de top pe iOS și Android, asigurând o experiență de utilizare
                                fluidă și interactivă pentru afacerea dvs.
                            </div>
                        </div>
                        <div class="categorii--item">
                            <span class="material-symbols-outlined" style="font-size: 48px;">
                                link
                            </span>
                            <h4>Integrari Servicii Externe</h4>
                            <div>
                                Oferim integrări profesionale de servicii externe, conectând aplicația sau website-ul
                                dvs. cu o varietate de API-uri și sisteme terțe pentru a îmbunătăți eficiența,
                                funcționalitatea și experiența utilizatorului.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pachet">
                    <h1>Pachete</h1>

                    <div class="pachete">
                        <div class="pachete--item" data-target="web">Site Web & Gazduire</div>
                        <div class="pachete--item" data-target="crm">Aplicatie CRM & Integrare</div>
                        <div class="pachete--item" data-target="erp">Aplicatie ERP & Integrare</div>
                        <div class="pachete--item" data-target="facturare">Aplicatie Facturare & Integrare</div>
                        <div class="pachete--item" data-target="e_factura">Integrare E-Factura</div>
                    </div>

                    <div style="display: none; position: relative;" class="pachete--more--info">
                        <div class="pachete--more--info--content"></div>
                        <div class="pachete--more--info--close" style="position: absolute; right: 4px; top: 4px">
                            <span class="material-symbols-outlined">
                                cancel
                            </span>
                        </div>
                    </div>

                    <script>
                        document.querySelectorAll('.pachete--more--info--close').forEach((button) => {
                            button.addEventListener('click', function () {
                                const target = document.querySelector('.pachete--more--info')
                                target.style.display = 'none'
                            })
                        })
                    </script>

                    <script>
                        document.querySelectorAll('.pachete--item').forEach((button) => {
                            button.addEventListener('click', function () {
                                const target = document.querySelector('.pachete--more--info')
                                target.style.display = 'block'

                                const targetContent = this.getAttribute('data-target')
                                const ALL_CONTENT = {
                                    web: 'Oferim servicii complete de dezvoltare și design pentru site-uri web, adaptate nevoilor dvs. de afaceri. Site-urile noastre sunt optimizate pentru SEO, responsive și ușor de navigat, asigurând o experiență de utilizator excelentă. În plus, oferim servicii de gazduire web fiabile și securizate, garantând că site-ul dvs. este întotdeauna accesibil și performant.',
                                    crm: 'Dezvoltăm soluții personalizate de CRM (Customer Relationship Management) care ajută la gestionarea eficientă a relațiilor cu clienții. Aplicațiile noastre CRM sunt concepute pentru a îmbunătăți interacțiunile cu clienții, optimizarea proceselor de vânzări și marketing. Oferim, de asemenea, servicii de integrare CRM pentru a asigura o sincronizare perfectă cu alte sisteme și aplicații ale afacerii dvs.',
                                    erp: 'Oferim dezvoltare și implementare de soluții ERP (Enterprise Resource Planning) pentru optimizarea proceselor de afaceri. Sistemele noastre ERP sunt proiectate pentru a centraliza și automatiza procesele de afaceri, de la gestionarea stocurilor și a lanțului de aprovizionare până la contabilitate și resurse umane. Integrarea ERP facilitează schimbul de date între diferite departamente, îmbunătățind eficiența și transparența în cadrul organizației.',
                                    facturare: 'Oferim soluții de facturare digitală care simplifică procesul de emitere a facturilor și urmărire a plăților. Aplicațiile noastre de facturare sunt ușor de utilizat și se pot integra fără probleme cu alte sisteme financiare și de contabilitate, asigurând o gestionare eficientă a fluxului de numerar și conformitatea cu standardele fiscale.',
                                    e_factura: 'Specializați în integrarea sistemelor de e-facturare, vă ajutăm să treceți la facturarea electronică, conformă cu reglementările în vigoare. Integrarea noastră de e-factură permite transmiterea automată a facturilor în format electronic, facilitând un schimb de date rapid și securizat între afacerea dvs. și clienți sau furnizori, optimizând astfel procesul de facturare și conformitatea fiscală.'
                                }


                                const content = document.querySelector('.pachete--more--info--content')
                                content.innerHTML = ALL_CONTENT[targetContent]
                            })
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '__footer.php' ?>
</div>
</body>
</html>
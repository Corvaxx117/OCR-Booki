<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booki</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="main-container">
        <header>
            <nav class="header-container">
                <div class="logo">
                    <img src="/FORMATION_OCR/Booki/Booki-php/images/logo/Booki.png" alt="le logo booki">
                </div>
                <div class="header-links">
                    <a href="#hebergements-id">Hébergements</a>
                    <a href="#activite-id">Activités</a>
                </div>
            </nav>
        </header>
        <?php include('hebergements.php') ?>
        <?php include('activites.php') ?>

        <main>
            <div class="search-container">
                <h1>Trouvez votre hébergement pour des vacances de rêve</h1>
                <p>En plein centre-ville ou en pleine nature</p>

                <div class="search-bar">
                    <div class="location">
                        <svg class="location-icon" width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.13594 17.5955C4.23281 15.3326 0 9.84814 0 6.76751C0 3.02987 3.13396 0 7 0C10.8646 0 14 3.02987 14 6.76751C14 9.84814 9.73438 15.3326 7.86406 17.5955C7.41562 18.1348 6.58437 18.1348 6.13594 17.5955ZM7 9.02335C8.28698 9.02335 9.33333 8.01175 9.33333 6.76751C9.33333 5.52328 8.28698 4.51168 7 4.51168C5.71302 4.51168 4.66667 5.52328 4.66667 6.76751C4.66667 8.01175 5.71302 9.02335 7 9.02335Z" fill="black" />
                        </svg>
                        <input type="text" placeholder="Marseille, France">
                    </div>
                    <button class="search-button">Rechercher</button>
                </div>
                <div class="filter-container">
                    <h2>Filtre</h2>
                    <div class="filter">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.352 3.68473C20.0187 3.09418 18.6842 2.86951 17.3505 2.86951C13.1166 2.86914 8.88305 5.13224 4.64915 5.13224C3.58732 5.13224 2.52618 4.98995 1.46435 4.63425C1.34507 4.59432 1.22545 4.57545 1.10858 4.57545C0.516992 4.57545 0 5.05892 0 5.73004V17.2455C0 17.7039 0.248527 18.1384 0.647615 18.3148C1.981 18.9057 3.31542 19.1304 4.64915 19.1304C8.88305 19.1304 13.117 16.8673 17.3509 16.8673C18.4127 16.8673 19.4738 17.0096 20.5356 17.3653C20.6549 17.4052 20.7745 17.4241 20.8914 17.4241C21.483 17.4241 22 16.9406 22 16.2695V4.75439C21.9997 4.2956 21.7511 3.86149 21.352 3.68473ZM1.64997 6.50715C2.34159 6.69008 3.06345 6.78191 3.80594 6.83128C3.60382 7.89803 2.71558 8.702 1.64997 8.702V6.50715ZM1.64997 16.8517V15.1174C2.83142 15.1174 3.78738 16.1072 3.83997 17.346C3.06551 17.2803 2.34159 17.117 1.64997 16.8517ZM10.9998 14.4844C9.48082 14.4844 8.24987 12.924 8.24987 10.9999C8.24987 9.0755 9.48116 7.51547 10.9998 7.51547C12.5185 7.51547 13.7498 9.0755 13.7498 10.9999C13.7498 12.9247 12.5181 14.4844 10.9998 14.4844ZM20.3497 15.4927C19.7474 15.3334 19.1222 15.2441 18.4825 15.1864C18.6842 14.2398 19.4278 13.5211 20.3497 13.3977V15.4927ZM20.3497 6.92275C19.2879 6.78083 18.4639 5.84474 18.4312 4.68869C19.1029 4.76746 19.7406 4.91482 20.3497 5.14821V6.92275Z" fill="#0065FC" />
                        </svg>
                        <h3>Économique</h3>
                    </div>
                    <div class="filter">
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.2429 2.0625C13.2429 3.2016 12.3395 4.125 11.2261 4.125C10.1127 4.125 9.20931 3.2016 9.20931 2.0625C9.20931 0.923398 10.1127 0 11.2261 0C12.3395 0 13.2429 0.923398 13.2429 2.0625ZM10.89 15.125V20.625C10.89 21.3855 10.2891 22 9.54544 22C8.80175 22 8.20091 21.3855 8.20091 20.625V11.0387L7.0005 13.084C6.61815 13.7328 5.7921 13.9434 5.15555 13.5523C4.51899 13.1613 4.31308 12.3191 4.6956 11.666L7.1442 7.50234C7.87318 6.26055 9.1841 5.5 10.6001 5.5H11.8521C13.2681 5.5 14.579 6.26055 15.3101 7.50234L17.7555 11.666C18.1378 12.3191 17.9319 13.1613 17.2975 13.5523C16.6588 13.9434 15.8353 13.7328 15.453 13.084L14.2513 11.0387V20.625C14.2513 21.3855 13.6505 22 12.9068 22C12.1631 22 11.5622 21.3855 11.5622 20.625V15.125H10.89Z" fill="#0065FC" />
                        </svg>
                        <h3>Familial</h3>
                    </div>
                    <div class="filter">
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.503296 8.22829V7.98543C0.503296 5.05861 2.67408 2.56224 5.63376 2.08155C7.55447 1.76375 9.58689 2.38596 10.9877 3.75306L11.5033 4.25468L11.9802 3.75306C13.4197 2.38596 15.4135 1.76375 17.3728 2.08155C20.3334 2.56224 22.5033 5.05861 22.5033 7.98543V8.22829C22.5033 9.96595 21.7642 11.6283 20.458 12.8132L12.6935 19.8769C12.3713 20.17 11.9459 20.3333 11.5033 20.3333C11.0607 20.3333 10.6353 20.17 10.3131 19.8769L2.54818 12.8132C1.24365 11.6283 0.503309 9.96595 0.503309 8.22829H0.503296Z" fill="#0065FC" />
                        </svg>
                        <h3>Romentique</h3>
                    </div>
                    <div class="filter filter-active">
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.40057 1.21273C9.71396 0.92649 10.2001 0.930411 10.5135 1.21665C11.6224 2.23221 12.6631 3.32619 13.6354 4.51036C14.0774 3.94572 14.5796 3.33011 15.122 2.82821C15.4394 2.53805 15.9296 2.53805 16.247 2.83214C17.6372 4.12609 18.8144 5.83568 19.6421 7.45901C20.4577 9.05881 21.0001 10.6939 21.0001 11.8467C21.0001 16.85 16.9903 21.0769 12.0001 21.0769C6.95369 21.0769 3.00012 16.8461 3.00012 11.8428C3.00012 10.3371 3.7153 8.4981 4.82423 6.67872C5.94521 4.83189 7.52825 2.90664 9.40057 1.21273ZM12.0684 17.3127C13.0849 17.3127 13.9849 17.0382 14.8327 16.4893C16.5242 15.3365 16.9782 13.0309 15.9617 11.2193C15.7809 10.8664 15.3189 10.8429 15.0577 11.1409L14.0452 12.2898C13.78 12.5878 13.3019 12.5799 13.0528 12.2702C12.3899 11.4468 11.2046 9.97635 10.5296 9.14116C10.2765 8.82747 9.79432 8.82355 9.53718 9.13723C8.17914 10.8037 7.4961 11.8545 7.4961 13.0348C7.50012 15.7207 9.53316 17.3127 12.0684 17.3127Z" fill="#0065FC" />
                        </svg>
                        <h3>Nos Pépites</h3>
                    </div>
                </div>
                <div class="info-text">
                    <div class="info-text-container">
                        <svg width="6" height="16" viewBox="0 0 6 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.66996 13.1693H3.83663V6.60676C3.83663 6.0885 3.46345 5.66926 3.0033 5.66926H1.33663C0.876473 5.66926 0.503296 6.0885 0.503296 6.60676C0.503296 7.12502 0.876473 7.5179 1.33663 7.5179H2.16996V13.1429H1.33663C0.876473 13.1429 0.503296 13.5621 0.503296 14.0804C0.503296 14.5987 0.876473 15.0179 1.33663 15.0179H4.66996C5.13012 15.0179 5.5033 14.5987 5.5033 14.0804C5.5033 13.5621 5.1309 13.1693 4.66996 13.1693ZM3.0033 3.79426C3.69366 3.79426 4.2533 3.16467 4.2533 2.38801C4.2533 1.61135 3.6934 0.982056 3.0033 0.982056C2.31319 0.982056 1.7533 1.61165 1.7533 2.38831C1.7533 3.16497 2.31293 3.79426 3.0033 3.79426Z" fill="#0065FC" />
                        </svg>
                    </div>
                    <span>Plus de 500 logements sont disponibles dans cette ville</span>
                </div>
            </div>
            <div class="hebergements-and-populaires">
                <section id="hebergements-id" class="hebergements">
                    <div class="hebergements-title">
                        <h2 class="section-title">Hébergements à Marseille</h2>
                    </div>
                    <div class="hebergements-container">
                        <?php foreach ($hebergements as $hebergement) { ?>
                            <div class="hebergement-card">
                                <a href="hebergements.php?id=<?= htmlspecialchars($hebergement['id']); ?>">
                                    <article class="card">
                                        <!-- utilisation de la fonction htmlspecialchars pour éviter les failles xss  -->
                                        <img src="<?= htmlspecialchars($hebergement['image']); ?>" alt="photo de la chambre de :<?= htmlspecialchars($hebergement['titre']); ?>">
                                        <div class="info-card-container">
                                            <h3><?= htmlspecialchars($hebergement['titre']); ?></h3>
                                            <p class="card-subtitle">Nuit à partir de <?= htmlspecialchars($hebergement['prix']); ?><span class="euro">€</span></p>
                                            <div class="card-rating">
                                                <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                                <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                                <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                                <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                                <i class="fa-xs fa-solid fa-star neutral-star" aria-hidden="true"></i>
                                                <span class="sr-only">Note de 4 sur 5</span>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="show-more">
                        <a href="#" class="show-more-link">Afficher plus</a>
                    </div>
                </section>

                <section class="populaires">
                    <div class="populaires-title">
                        <h2 class="section-title">Les plus populaires</h2>
                        <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
                    </div>
                    <div class="populaires-cards">
                        <a href="#">
                            <article class="card">
                                <img src="./images/hebergements/emile-guillemot.jpg" alt="Image de la chambre d'hôtel montrant un lit">
                                <div class="card-content">
                                    <div class="card-txt">
                                        <h3 class="card-title">Hôtel Le soleil du matin</h3>
                                        <p class="card-subtitle">Nuit à partir de 128<span class="euro">€</span></p>
                                    </div>
                                    <div class="card-rating">
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star neutral-star" aria-hidden="true"></i>
                                        <span class="sr-only">Note de 4 sur 5</span>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <a href="#">
                            <article class="card">
                                <img src="./images/hebergements/aw-creative.jpg" alt="Image de la chambre d'hôtel montrant un lit">
                                <div class="card-content">
                                    <div class="card-txt">
                                        <h3 class="card-title">Chambres d’hôtes Au cœur de l’eau</h3>
                                        <p class="card-subtitle">Nuit à partir de 71<span class="euro">€</span></p>
                                    </div>
                                    <div class="card-rating">
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star neutral-star" aria-hidden="true"></i>
                                        <span class="sr-only">Note de 4 sur 5</span>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <a href="#">
                            <article class="card">
                                <img src="./images/hebergements/febrian-zakaria2.jpg" alt="Image de la chambre d'hôtel montrant un lit">
                                <div class="card-content">
                                    <div class="card-txt">
                                        <h3 class="card-title">Hôtel Bleu et Blanc</h3>
                                        <p class="card-subtitle">Nuit à partir de 68<span class="euro">€</span></p>
                                    </div>
                                    <div class="card-rating">
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star" aria-hidden="true"></i>
                                        <i class="fa-xs fa-solid fa-star neutral-star" aria-hidden="true"></i>
                                        <span class="sr-only">Note de 4 sur 5</span>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                </section>
            </div>
            <section class="activites-section">
                <div id="activite-id" class="activites">
                    <h2 class="section-title activite-title">Activités à Marseille</h2>
                    <div class="activite-container">
                        <?php foreach ($activites as $activite) { ?>
                            <aside class="activite-card">
                                <a href="activites.php?id=<?= htmlspecialchars($activite['id']); ?>">

                                    <!-- utilisation de la fonction htmlspecialchars pour éviter les failles xss  -->
                                    <div class="activite-card-content">
                                        <img src="<?= htmlspecialchars($activite['image']); ?>" alt="photo de la chambre de :<?= htmlspecialchars($activite['titre']); ?>">
                                        <div class="info-card-container">
                                            <h3><?= htmlspecialchars($activite['titre']); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </aside>

                        <?php } ?>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-container">
                <div class="footer-links">
                    <h2>A Propos</h2>
                    <ul>
                        <li>Fonctionnement du site</li>
                        <li>Condition générales</li>
                        <li>Données et confidentialité</li>
                    </ul>
                </div>
                <div class="footer-links">
                    <ul>
                        <h2>Hébergements</h2>
                        <li>Charte qualité</li>
                        <li>Proposez votre hôtel</li>
                    </ul>
                </div>
                <div class="footer-links">
                    <ul>
                        <h2>Assistance</h2>
                        <li>Centre d'aide</li>
                        <li>Nous contacter</li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
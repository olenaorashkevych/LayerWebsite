<?php
    include './app/components/0--head.php';

    include './app/components/header.php';
?>

    <header class="header article-header">
        <div class="container">
            <a href="/" class="logo">
                <img src="./img/Logo.png" alt="" class="logo-img">
            </a>
            <label class="hamburger">
                <input type="checkbox" onchange="setActive(event)" data-box-toggle=".header-nav">
                <svg viewBox="0 0 32 32">
                    <path class="line line-top-bottom"
                        d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
                    </path>
                    <path class="line" d="M7 16 27 16"></path>
                </svg>
            </label>
            <nav class="header-nav">
                <ul class="header-ul">
                    <li class="header-li"><a href="" class="header-link link-hover">Startseite</a></li>
                    <li class="header-li"><a href="" class="header-link link-hover">Kanzlei</a></li>
                    <li class="header-li"><a href="" class="header-link link-hover">Rechtsgebiete</a></li>
                    <li class="header-li"><a href="" class="header-link link-hover">Unsere Erfolge</a></li>
                    <li class="header-li"><a href="" class="header-link link-hover">Kontakt</a></li>
                    <li class="header-li"><a href="" class="header-link link-hover">Termin vereinbaren</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <div class="article-header-bg" style="background-image: url('./img/article-bg.webp');">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="link-hover">Hauptseite</a></li>
                    <li class="breadcrumb-item"><a href="#" class="link-hover">Kompetenzen</a></li>
                </ol>
            </nav>
        </div>
    </div>




    <div class="article">
        <div class="container">
            <h1 class="article-title">Hochschulrecht</h1>

            <div class="typo">
                <p>Benötigen Sie oder Ihr Kind <a href="">Unterstützung</a> im Bereich des Schulrechts?</p>
                <p>Kommt es bei der <a href="">Schulaufnahme</a> oder dem Schulbesuch zu Problemen und können Sie diese
                </p>

                <p>
                    <img src="./img/article-bg.webp" alt="">
                </p>

                <h2>Lorem ipsum dolor sit.</h2>
                <p>Häufige Themen im Zusammenhang mit dem Schulrecht sind zum Beispiel:</p>
                <p>Häufige Themen im Zusammenhang mit dem Schulrecht sind zum Beispiel:</p>
                <p>Häufige Themen im Zusammenhang mit dem Schulrecht sind zum Beispiel:</p>
                <h2>Lorem ipsum dolor sit.</h2>
                <ul>
                    <li>Einschulung</li>
                    <li>Gastschulantrag </li>
                    <li>Schulplatz</li>
                </ul>
            </div>
            <!-- typo -->


        </div>
    </div>



    <?php
    include './app/components/0--footer.php';
?>
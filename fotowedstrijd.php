<!DOCTYPE html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Fotowedstrijd</title>
<body>
<?php include "include/top_navbar.php"; ?>
<div class="container">
    <div class="card fotowedstrijd-page">
        <div class="card-body text-center">
            <h3 class="wedstrijd-titel">Maak jij deze foto het mooist na?</h3>
            <p class="wedstrijd-route">Wandelroute Iwema Steenhuis</p>
            <img src="assets/images/fotorollen/wedstrijd.svg" class="wedstrijd-foto" alt="...">
            <div class="row text-center pt-3">
                <div class="col">
                    <p class="wedstrijd-p">
                        Goud<br>
                        Zilver<br>
                        Brons
                    </p>
                </div>
                <div class="col">
                    <p class="wedstrijd-p">
                        50 Pt + 1 fotorol<br>
                        30 Pt + 1 fotorol<br>
                        15  Pt + 1 fotorol
                    </p>
                </div>
            </div>
            <a href="foto-overzicht.php" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotowedstrijd-btn">Upload</button></a>
            <a href="route.php" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotowedstrijd-btn">Maak foto</button></a>
            <p class="wedstrijd-p pt-3">uploaden kan tot 10 april 2020</p>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="card">
        <div class="card-body text-center">
            <a href="alle-fotowedstrijden" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Bekijk alle fotowedstrijden</button></a><br>
            <a href="stem-uitbrengen" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Breng je stem uit</button></a>
            <a href="mijn-inzendingen" data-transition="slide" rel="external"><button type="button" class="btn btn-outline-dark fotorollen-page-buttons">Mijn inzendingen</button></a>
        </div>
    </div>
</div>
<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>

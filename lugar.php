<?php
$title = "Lugares";
?>
<?php include("header.php"); ?>

    <!-- Contenido principal -->
    <main class="row">
        <div class="col-md-1 col-sm-12"></div>
        <div class="col-md-7 col-sm-12 div-img" style="padding: 20px;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/corani.jpg" alt="Represa de Corani">
                        <p class="descripcion">Represa de Corani</p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/criadero.jpg" alt="Criadero de peces">
                        <p class="descripcion">Criadero de peces</p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/cueva.jpg" alt="Cueva del diablo">
                        <p class="descripcion">Cueva del diablo</p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/velo_novia.jpg" alt="El velo de la novia">
                        <p class="descripcion">El velo de la novia</p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/nustas.jpg" alt="Baño de las ñustas">
                        <p class="descripcion">Baño de las ñustas</p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/ventana.jpg" alt="Third slide">
                        <p class="descripcion">La garganta del diablo</p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/bosque.jpg" alt="El bosque de la niebla">
                        <p class="descripcion">El bosque de la niebla</p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/casa_maquinas.jpg" alt="La casa de máquinas">
                        <p class="descripcion">La casa de máquinas</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-12" style="padding: 20px;">
            <aside class="box-info" style="text-align:center;">
                <h6> Cortesía de OpenWeather</h6>
            </aside>
        </div>
        <div class="col-md-1  col-sm-12"></div>
    </main>
    <!-- Contenido principal -->

<?php include("footer.php"); ?>
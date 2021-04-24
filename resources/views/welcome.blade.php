<x-layout>

    <header class="masthead pt-4">
        <h1 class="display-3 ms-5 mt-5">Azienda Agricola</h1>
        <h2 class="mt-3 ms-5">Da sempre al vostro servizio</h2>
        <div class="container container-fluid d-flex">
            <div class="col-12">
                <div class="row text-start">
                    <div class="col-3 col-md-3 col-sm-8 card-middle bg-white p-4 mt-5 ms-5 mb-5">
                        <h3>Da oggi puoi ordinare la tua spesa comodamente da casa tua!</h3>
                        <hr>
                        <img src="/img/frutta.jpg" class="img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-text">Prodotti genuini delle nostre terre - KM 0</p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-8 card-middle bg-white p-4 mt-5 ms-5 mb-5">
                        <h3>Da anni coltiviamo con passione i nostri prodotti</h3>

                        <hr>
                        <img src="/img/verdura.jpg" class="img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-text">Interamente coltivati da noi nelle nostre serre</p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-8 card-middle bg-white p-4 mt-5 ms-5 mb-5">
                        <h3>Verdura fresca di giornata sulla tua tavola</h3>
                        <hr>
                        <img src="/img/verdura2.jpg" class="img-fluid" alt="...">
                        <div class="card-body">
                            <p class="card-text">Frutta e verdura raccolti freschi ogni giorno</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5 mb-5">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/verdura3.jpg" class="d-block w-100 img-thumbnail" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="mt-3 p-2 fs-4 subtitle">Clicca in alto per scoprire di più</span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/img/verdura4.jpg" class="d-block w-100 img-thumbnail" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="mt-3 p-2 fs-4 subtitle">Ordinali ora direttamente da casa!</span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/img/frutta2.jpg" class="d-block w-100 img-thumbnail" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="mt-3 p-2 subtitle fs-4">Compila il form!<span>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5 mb-5">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button accordion text-light" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    La storia dell'azienda agricola
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button accordion text-light collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    I nostri prodotti
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button accordion text-light collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Produzione propria garantita
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>





</x-layout>
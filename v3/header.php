<header class="container-fluid p-0 cabecalho">
    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/biojorge_logo.png" alt="biojorge_logo" width="80" height="64">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Survival Horror</a></li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Action/Plataform</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Soon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Type here" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!--Carousel-->
    <div class="container p-3">
        <div class="row d-none d-md-block">
            <div class="col p-0">
                <div id="carouselExampleCaptions" class="carousel slide rounded-4"" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/dead_space_remake.jpg" class="d-block w-100 rounded-4" alt="dead_space">
                            <div class="carousel-caption d-none d-md-block rounded-4">
                                <h5>Dead Space (2023)</h5>
                                <p>Game of the Year winner contestant, a true Survival-Horror experience</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="images/re4_2023.webp" class="d-block w-100 rounded-4" alt="re4">
                            <div class="carousel-caption d-none d-md-block rounded-4">
                                <h5>Resident Evil 4 (2023)</h5>
                                <p>Game of the Year winner contestant, another true Survival-Horror experience</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="images/hogwarts.jpg" class="d-block w-100 rounded-4" alt="HP">
                            <div class="carousel-caption d-none d-md-block rounded-4">
                                <h5>Hogwarts Legacy</h5>
                                <p>Potterhead, time to dive deep into the Wizarding World</p>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img src="images/elden_ring.jpeg" class="d-block w-100 rounded-4" alt="...">
                            <div class="carousel-caption d-none d-md-block rounded-4">
                                <h5>Elden Ring</h5>
                                <p>Game of the Year winner, a true Souls-like masterpiece</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>
    </div>

</header>
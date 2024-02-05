<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bakorwil | Halaman Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: rgb(232, 227, 236)
    }
</style>

<body>
    <div class="container-fluid bg-body-secondary  justify-content-start">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="d-flex flex-row flex-3 justify-content-center align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-envelope text-danger" viewBox="0 0 16 16">
                    <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg>
                <a class="nav-link active text-dark" href="#">bakorwil4@gmail.com</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-headphones text-danger" viewBox="0 0 16 16">
                <path
                d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5" />
                    </svg>


                    <a class="nav-link active text-dark">(0324) 322318</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-geo-alt text-danger" viewBox="0 0 16 16 ">
                    <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <a class="nav-link active text-dark">Jl. Slamet Riadi No. 1 Kab.Pamekana Provinsi Jawa Timur</a>

                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link active" href="#">Peminjaman</a>
                </li>
                    </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <a href="/crud" class="btn btn-primary px-4 mx-3" type="submit">Login</a>
        </form>
    </div>
</div>
</nav>
<section>
    <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Bakorwil.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Bakorwil-2~.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Bakorwil-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/bakorwil-4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <div class="container py-4">
        <h2>Sewa Gedung</h2>
    </div>
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card shadow">
                        <img src="img/bakorwil-4.jpg " class="card-img-top" alt="img/bakorwil.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Aula Bakorwil</h5>
                            <p class="card-text">Berdasarkan Peraturan Daerah Provinsi Jawa Timur Nomor 12 Tahun 2008
                                tentang Organisasi dan Tata Kerja Badan Koordinasi Wilayah Pemerintahan dan Pembangunan
                                Jawa Timur dan Peraturan Gubernur Jawa Timur Nomor 117 Tahun 2008 Tentang Uraian Tugas
                                Sekretariat, Bidang, Sub Bagian dan Sub Bidang Badan Koordinasi Wilayah Pemerintahan dan
                                Pembangunan Jawa Timur maka kedudukan, tugas, fungsi, susunan organisasi dan tata kerja
                                Badan Koordinasi Wilayah Pemerintahan dan Pembangunan Pamekasan adalah sebagai berikut :
                            </p>y
                        </div>
                    </div>
                    <section class="py-2">
                        <a class="btn btn-info" href="/rincian">
                            RINCIAN
                        </a>
                        <a href="/formulir" class="btn btn-primary px-4">SEWA</a>
                    </section>
                </div>
            </div>
    </section>
    <section class="puter">
        <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center bg-primary mt-5">
            <div class="card bg-primary text-light border border-primary" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title">Kontak</h3>
                    <p class="card-text">Jl. Slamet Riadi No. 1 Kab.Pamekana Provinsi Jawa Timur</p>
                    <p class="card-text">(0324) 322318 bakorwil4@gmail.com</p>
                </div>
            </div>
            <div class="card bg-primary text-light border border-primary" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card bg-primary text-light border border-primary" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card bg-primary text-light border border-primary" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

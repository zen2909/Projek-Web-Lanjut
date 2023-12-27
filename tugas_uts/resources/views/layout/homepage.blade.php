<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <title>My Travelling</title>
</head>

<body class="bg-light">
  <div class="container-fluid text-dark" style="height: 100vh">
    <!-- nav section start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand text-dark" href="#">MY TRAVELLING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="paket" href="paket">Paket</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Others
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <li><a class="dropdown-item" href="merchandise">Merchandise</a></li>
                <li><a class="dropdown-item" href="contact">Contact</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <a href="login" class="btn btn-outline-dark text-light btn-dark" type="submit">Login</a>
          </form>
        </div>
      </div>
    </nav>
    <!-- nav section end -->

    <!-- carousel images -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/semeru.jpg" class="d-block w-100" alt="tour guide image" style="height: 500px">
          <div class="carousel-caption">
            <h5>✨ Semeru Tour Quartal 1 ✨</h5>
            <p>Menjelajahi gunung semeru di tahun 2023  </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/bromo.jpg" class="d-block w-100" alt="tour guide image 2" style="height: 500px">
          <div class="carousel-caption">
            <h5>✨ Bromo Tour Special ✨</h5>
            <p>Berpetualang melewati gunung bromo yang menantang</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/marchandise.jpg" class="d-block w-100" alt="tour guide image 3" style="height: 500px">
          <div class="carousel-caption">
            <h5>✨ Merchandise & Accessories ✨</h5>
            <p>Tersedia berbagai macam kebutuhan tour & travel</p>
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

    <!-- end of carousel images -->
    <div class="row text-center align-items-center mt-4">
      <div class="col-12">
        <img src="images/orang1final.jpg" width="150" height="150" />
        <h2 class="mt-2">✨My Travelling Tour Service✨</h2>
        <i>Berpengalaman lebih dari <span style="color:coral">100+</span> pulau di Indonesia</i>
      </div>
    </div>
    <div class="row text-dark mt-4">
      <div class="col-sm-4 g-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Tour Bersama Saya</h5>
            <p class="card-text">Hi, Kami bersedia mengajak kamu ke tempat yang menakjubkan di Indonesia</p>
            <a href="/contact" class="btn btn-dark d-block">Hubungi Sekarang</a>
          </div>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
            💲12
          </span>
        </div>
      </div>
      <div class="col-sm-4 g-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Paket Tour Terbaik</h5>
            <p class="card-text">Tersedia beragam macam paket tour terbaik & tour pilihan untuk explore Indonesia</p>
            <a href="/paket" class="btn btn-dark d-block">Biaya Paket</a>
          </div>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
            💲5
          </span>
        </div>
      </div>
      <div class="col-sm-4 g-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Spesial Merchandise</h5>
            <p class="card-text">Kami mennyediakan Merchandise untuk perlekapan tour travelling anda
            </p>
            <a href="layout/merchandise.blade.php" class="btn btn-dark d-block">Lihat Lebih Lengkap</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


  
</html>
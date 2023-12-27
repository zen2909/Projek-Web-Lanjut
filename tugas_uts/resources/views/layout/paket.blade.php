<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  
    <title>My Travelling</title>
</head>

<body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MY TRAVELLING</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/paket">Paket</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Others
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/Merchandise">Merchandise</a></li>
              <li><a class="dropdown-item" href="/Contact">Contact</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <a href="/login/index.html" class="btn btn-outline-light" type="submit">Login</a>
        </form>
      </div>
    </div>
  </nav>

  <!-- first layout start -->
  <div class="container-fluid text-dark mt-4">
    <div class="row justify-content-center">
      <div class="card m-3" style="max-width: 540px;cursor: pointer">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/b.jpg" class="img-fluid" alt="..." style="height: 100%;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Paket Entry Class</h5>
              <p class="card-text">Nikmati perjalanan bersama saya dengan biaya yang sangat terjangkau dan dapat
                menikmati
                keindahan Indonesia</p>
              <p class="card-text"><small class="text-muted">Rp. 300.000,- / orang</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="max-width: 540px; cursor: pointer">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/a.jpg" class="img-fluid" alt="..." style="height: 100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Paket Medium Class</h5>
              <p class="card-text">Nikmati perjalanan bersama saya dengan biaya yang sangat terjangkau dan dapat
                menikmati
                keindahan Indonesia</p>
              <p class="card-text"><small class="text-muted">Rp. 500.000,- / orang</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="max-width: 540px; cursor: pointer">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/s.jpg" class="img-fluid" alt="..." style="height: 100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Paket High Class</h5>
              <p class="card-text">Nikmati perjalanan bersama saya dengan biaya yang sangat terjangkau dan dapat
                menikmati
                keindahan Indonesia</p>
              <p class="card-text"><small class="text-muted">Rp. 1.000.000,- / orang</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- first layout end -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
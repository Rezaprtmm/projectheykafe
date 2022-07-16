<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hey Kafe</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Another CSS -->
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="/images/logo2.png" alt="logo" width="70px">
        </a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#">Coffee</a>
              <div class="dropdown-menu">
                <ul>
                  <li class="mb-2"><a href="#">Kopi Luwak</a></li>
                  <li class="mb-2"><a href="#">Kopi Item</a></li>
                  <li class="mb-2"><a href="#">Kopi ABC Moca</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Non Coffee</a>
              <div class="dropdown-menu">
                <ul>
                  <li class="mb-2"><a href="#">Susu Lemon</a></li>
                  <li class="mb-2"><a href="#">Lemon Tea</a></li>
                  <li class="mb-2"><a href="#">Lechy Tea</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Makanan</a>
              <div class="dropdown-menu">
                <ul>
                  <li class="mb-2"><a href="#">Kentang</a></li>
                  <li class="mb-2"><a href="#">Makaroni</a></li>
                  <li class="mb-2"><a href="#">Makaroni Scotel</a></li>
                </ul>
              </div>
            </li>
          </ul>
          <div class="registration">
            <a href="/login" class="btn">Sign in</a>
          </div>
        </div>
        </div>
    </nav>

    <!-- Section Hero -->
    <div class="hero">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image1 }}" alt="{{ $name1 }}">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="images/{{ $image2 }}" alt="{{ $name2 }}">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    
<script src="assets/scripts/_init.js"></script>
<script src="assets/scripts/login-script.js"></script>
  </body>
</html>
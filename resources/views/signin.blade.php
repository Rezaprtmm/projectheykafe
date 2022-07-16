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
        <a class="navbar-brand" href="/">
          <img src="/images/logo2.png" alt="logo" width="70px">
        </a> 
      </div>
    </nav>

    <!-- Section Registration -->
    <section class="regist d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="section-title">
                <h2>Sign in or create an account</h2>
            </div>


            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form id="loginForm" class="login-input">
                                <label for="inputEmail">Email</label>
                                <input id="inputEmail" type="email" required>
                                <label for="inputPassword">Password</label>
                                <input id="inputPassword" type="password" required>
                                <button id="buttonLogin" type="submit">Login</button>
                            </form>
                            <a href="#">forgot your password</a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="daftar d-flex flex-column justify-content-center align-items-center">
              <div class="row">
                <div class="col-md-12 mb-3 mt-4">
                  <h3>JOIN HEYKAFE</h3>
                  <p>Join HeyKafe to earn free food and drinks, get free refills, pay and order with your phone, and more.</p>
                  <span><p>New in Heykafe?<a href="/regist">Daftar</a></p></span>
                </div>
              </div>
            </section>
        </div>
    </section>

    <div id="modal" class="pop-up-modal">
      <h2>Login gagal!</h2>
      <p>Silakan coba lagi</p>
  </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    
<script src="assets/scripts/_init.js"></script>
<script src="assets/scripts/login-script.js"></script>
  </body>
</html>
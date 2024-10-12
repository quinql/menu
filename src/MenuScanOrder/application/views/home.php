<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MenuScanOrder - Initial Page</title>
    <!-- This is the main stylesheet for Bootstrap. It includes all the CSS necessary for Bootstrap's components and utilities to work. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Include Bootstrap Icons -->
    <!-- This link imports the Bootstrap Icons library, which provides a wide range of SVG icons for use in your projects. -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body >
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="home">MenuScanOrder</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a class="nav-link active" href="home">Home</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link <?= session()->get('isLoggedIn') ?  : '' ?>" href="<?= session()->get('isLoggedIn') ? site_url('logout') : site_url('login') ?>">
                                <?= session()->get('isLoggedIn') ? 'Logout' : 'Login' ?>
                            </a>
                       </li>
                      <li class="nav-item">
                        <a class="nav-link" href="items">Menu</a>
                    </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>

  <main>
      <section class="py-5 " style="background: url('Menu.jpg') no-repeat center center; background-size: cover;">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <h1 class="display-4">Welcome to MenuScanOrder! </h1>
                      <p class="lead">Emjoy Your Meal with Scan!</p>
                      <a href="items" class="btn btn-primary btn-lg mb-3 mb-lg-0">View Our Menu</a>
                  </div>
                  
              </div>
          </div>
      </section>

      <section class="py-5">
          <div class="container">
              <h2 class=" mb-4">About Us</h2>
              <p>Some background <p>
          </div>
          <div class="container">
            <h3 class=" mb-4"> How it Works</h3>
            <p>Just Scan the QR code on the table.</p>

          </div>
      </section>
  </main>

  <footer class="bg-dark text-light py-4">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <p>&copy; 2024 MenuScanOrder</p>
              </div>
              <div class="col-md-6 text-md-end">
                  <a href="#" class="text-light me-3">Privacy Policy</a>
                  <a href="#" class="text-light">Terms of Service</a>
              </div>
          </div>
      </div>
  </footer>
    <!-- This script includes all of Bootstrap's JavaScript-based components and behaviors, such as modal windows, dropdowns, and tooltips.  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
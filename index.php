<?php
include 'conn.php';

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sip & Savor</title>
    <link rel="icon" href="res/logoplain.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
        .nav_left {
          background-color: #4F7258;
          border-top-left-radius: 48px;
          border-bottom-left-radius: 48px;
        }

        .nav-tabs .nav-link.active {
          background-color: transparent;
          border-color: transparent;
          border-top: 4px solid #fff;
          color: #fff;
        }

        .nav-tabs .nav-link {
          border: none;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
          margin: 0 30px 0 40px;
        }

        .nav-tabs {
          border-bottom: none;
        }

        .nav-link {
          padding: 1rem 0.5rem;
          color: #fff;
        }

        .nav-link:focus,
        .nav-link:hover {
          color: #fff;
        }

        .search_input {
          width:100%;
          border-radius: 10px;
          border: none;
          line-height: initial;
          padding-top: 4px;
          padding-bottom: 4px;
          color: #f19159;
        }

        .search_input:focus-visible {
          outline: none;
        }

        input.search_input::placeholder {
          color: #cfd2ec;
          vertical-align: middle;
        }

        .search_img {
          top: 7px;
          right: 8px;
        }

        .navbar-toggler {
          border: 3px solid #f19159;
        }

        .navbar-toggler-icon {
          background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(35, 76, 203, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-toggler:focus {
          box-shadow: none;
        }
        .custom-btn {
          border-color: #4f7258;
          color: #4f7258;
        }

        .custom-btn:hover {
          background-color: #4f7258;
          border-color: #4f7258;
          color: #fff;
    </style>
</head>
<body>

    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg py-3 ">
          <div class="pe-lg-0 ps-lg-5 container-fluid justify-content-between">
              <a class="navbar-brand" href="#">
                  <img src="res/logonavbar.png" height="70" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <div class="nav_left d-lg-flex align-items-center">
                      <nav>
                          <div class="nav d-block d-lg-flex nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                  type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                              <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#about"
                                  type="button" role="tab" aria-controls="about" aria-selected="false">Order</button>
                              <button class="nav-link" id="timing-tab" data-bs-toggle="tab" data-bs-target="#timing"
                                  type="button" role="tab" aria-controls="timing" aria-selected="false">Location</button>
                              <a class="nav-link" href="contact.html">Contact</a>    
                              <a class="nav-link" href="cart.html">Cart</a>
                          </div>
                      </nav>
                      <!-- Search -->
                      <div class="position-relative d-inline-block me-lg-4">
                          <input class="search_input ms-5 mb-3 mb-lg-0 ms-lg-0 pe-5 ps-3" type="search" placeholder="Search"
                              aria-label="Search">
                          <img class="position-absolute search_img" src="res/search.png" width="16" height="16"
                              alt="twitter">
                      </div>
                  </div>
              </div>
          </div>
      </nav>
    <!-- End navbar-->

    <!-- Carousel start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="res/banner1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="res/banner2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="res/banner3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- End carousel -->
    <!-- Tentang start -->

    <!-- End tentang -->
    <!-- Rekomendasi start-->
    <h2 class="d-flex justify-content-center mt-5">Rekomendasi</h2>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-2">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col mb-5">';
                        echo '  <div class="card h-100">';
                        echo '      <img class="card-img-top" src="res/menu/' . $row['image'] . '" alt="Product Image">';
                        echo '      <div class="card-body p-4">';
                        echo '          <div class="text-center">';
                        echo '              <h5 class="fw-bolder">' . $row['name'] . '</h5>';
                        echo '              Rp. ' . number_format($row['price'], 0, ',', '.') . ',-';
                        echo '          </div>';
                        echo '      </div>';
                        echo '      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">';
                        echo '          <div class="text-center"><a class="btn btn-outline-dark mt-auto custom-btn" href="#">Pesan</a></div>';
                        echo '      </div>';
                        echo '  </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No products found.</p>';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- End rekomendasi-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzE4lcBlXKZwcZI5C8KDel09HSmHg6fPHY8G+LILIT3g" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-IH6Wmn5oOeF4YJm2+2DpPT3sb9SukzLBiZXmUKoNT5F/adUvUTLep4ihZOI2BKGb" crossorigin="anonymous"></script>
    <script>
      var myCarousel = document.querySelector('#carouselExampleIndicators');
      var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: true
      });
    </script>

</body>
</html>

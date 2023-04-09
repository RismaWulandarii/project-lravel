<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    body {
      /* background-image: url('image/slider2.jpg');
      background-size: cover; */
      background-color: rgb(219, 253, 242);
    }
    .carousel-item {
      height: 580px;
      background-color: wheat;
      opacity: 0.6;
    }
    .carousel-item img{
      height: 100%;
      width: 100%;
    }
    .display-4 {
      color: white;
      background-color: red;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{ url('image/Logo.png') }}" width="80" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index')}}">DASHBOARD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login.logout') }}">Login</a>
          </li>
        </ul> 
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ url('image/slider2.jpg') }}" class="d-block w-5" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark font-weight-bold">
          <h1 class="display-4">Selamat Datang di Toko Kami <br> <span class="font-weight-bold">Cemilan Suka-Suka</span></h1>
          <hr class="my-4">
          <p class="lead" style="color:rgb(0, 0, 83)">Login terlebih dahulu untuk berbelanja</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ url('image/slider1.jpg') }}" class="d-block w-5" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h1 class="display-4">Tersedia Cemilan-Cemilan Pedas yang Siap Memacu Adrenalin Anda</h1>
          <hr class="my-4">
          <p class="lead">Login terlebih dahulu untuk berbelanja</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ url('image/slider3.jpg') }}" class="d-block w-5" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h1 class="display-4">Pecinta Pedas Yuk Merapat!!!</h1>
          <hr class="my-4">
          <p class="lead">Login terlebih dahulu untuk berbelanja</p>
        </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
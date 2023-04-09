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
      background-image: url('image/slider2.jpg');
      background-size: cover;
      /* background-color: rgb(219, 253, 242); */
    }
    .row {
      background-color: rgb(106, 106, 204);
    }
    p {
      color: white;
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">MORE</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              @can('admin')
              <li><a class="dropdown-item" href="{{ route('Product.read')}}">Menu Admin</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              @endcan
              <li>
                <a class="dropdown-item" href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
              </li>
            </ul>
          </li>
        </ul> 
      </div>
    </div>
  </nav>

  <div class="container mt-5 text-center mb-5">
    <div class="">
      <div class="">
        <h2><marquee width="500" height="50">Selamat Datang, {{ Auth::user()->name }} Happy Shopping</marquee></h2>
        <br>
        <h4>Berikut Daftar Product Yang Tersedia :</h4>
      </div>
      <div class="container-fluid text-center">
        <br>
        <div class="row row-cols-3">
          @foreach ($snack as $item)
          <div class="col border pt-3">
            <p><img style="width: 75px" src="{{ asset('storage/'. $item->image)}}"></p>
            <br><p>{{$item->nama}}</p></b>
            <b><p>{{$item->deskripsi}}</p></b>
            <p>Rp. {{$item->harga}}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <p>{{ $snack->links() }}</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
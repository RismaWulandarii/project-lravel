<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    body {
      background-image: url('image/slider2.jpg');
      background-size: cover;
      /* background-color: rgb(219, 253, 242); */
    }
    /* .mb-3 {
      background-color: rgb(147, 147, 255);
      border-radius: 5%;
      width: 800px;
      margin-top: 100px;
    } */
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
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MORE
            </a>
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

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-10">
        <h1 class="text-center">Edit Data Product</h1>
        <br>
        <div class="container ">
          <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
              <form action="{{ route('Snack.update',$snack->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="nama_input" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('namaInput') is-invalid @enderror" name="namaInput" id="nama_input" value="{{$snack->nama}}">
                  @error('namaInput')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                  <label class="input-group-text" for="image">Upload</label>
                  @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="deskripsi_input" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control @error('deskripsiInput') is-invalid @enderror" id="deskripsi_input" name="deskripsiInput" value="{{$snack->deskripsi}}">
                  @error('deskripsiInput')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="prodi_input" class="form-label">Harga</label>
                  <input type="number" class="form-control @error('hargaInput') is-invalid @enderror" id="harga_input" name="hargaInput" value="{{$snack->harga}}">
                  @error('hargaInput')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="row mx-2">
                  <button type="submit" class="btn btn-primary mb-3">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

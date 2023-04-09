<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    body {
      background-image: url('image/slider2.jpg');
      background-size: cover;
      /* background-color: rgb(219, 253, 242); */
    }
    .container {
      background-color: rgb(147, 147, 255);
      border-radius: 5%;
      width: 800px;
      margin-top: 30px;
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
        </ul> 
      </div>
    </div>
  </nav>

  <div class="container p-3">
    <h1 class="text-center">Registrasi</h1>
      <div class="row justify-content-center mt-5">
        <div class="col-md-5">
          <div class="form">
            <form method="post" action="{{ route('register.store') }}">
              @csrf
              <div class="mb-3">
                <label for="namaInput" class="form-label">Nama</label>
                <input type="text" class="form-control @error('namaInput') is-invalid @enderror" id="namaInput" name="namaInput" value="{{ old('namaInput') }}">
                @error('namaInput')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="text" class="form-control @error('emailInput') is-invalid @enderror" id="emailInput" name="emailInput" value="{{ old('emailInput') }}">
                @error('emailInput')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control @error('passwordInput') is-invalid @enderror" id="passwordInput" name="passwordInput">
                @error('passwordInput')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="passwordInput_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control @error('passwordInput_confirmation') is-invalid @enderror" id="passwordInput_confirmation" name="passwordInput_confirmation">
                @error('passwordInput_confirmation')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
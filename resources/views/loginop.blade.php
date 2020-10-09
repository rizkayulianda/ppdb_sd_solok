
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
  </head>

  <body class="text-center bg-dark">
    <br><br>
    <span class="border border-right border-primary rounded">

      <form class="card bg-dark" method="POST" action=" {{ route('loginop') }}">
        <div class="p-5">
          @if ($message = session()->get('peringatan'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>NPSN/password salah, </strong><br>{{$message}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
          {{ csrf_field() }}
          <h1 class="h3 mb-3 font-weight-normal text-white">Login Operator <br>{{ config('app.name') }}</h1>
          <label for="inputNohp" class="sr-only">NPSN</label>
          <input class="form-control bg-dark text-white" type="text" name="kd_sekolah" id="inputNohp" class="form-control" placeholder="NPSN" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input class="mt-2 form-control bg-dark text-white" type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <button class="mt-2 btn btn-primary btn-block" type="submit">Log in</button>
          <p class="mt-1 text-white">belum punya akun? daftar <a href="{{route('registerop')}}">disini </a></p>
        </div>
        <p class="text-muted">ripuyu &copy;2020</p>
      </form>
    </span>
  </body>
</html>

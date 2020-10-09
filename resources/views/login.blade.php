
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login PPDB SD</title>

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
  <body class="bg-primary">
        <form class="card p-1 text-center" method="POST" action=" {{ route('login') }}">
          {{ csrf_field() }}
          <div class=" card-body p-5">
            @if ($message = session()->get('peringatan'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>No hp/password salah, </strong><br>{{$message}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <h1 class="h3 mb-3 font-weight-normal">Login {{ config('app.name') }}</h1>
            <label for="inputNohp" class="sr-only">No HP</label>
            <input type="no_hp" name="no_hp" id="inputNohp" class="form-control" placeholder="No HP" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input class="mt-2 form-control" type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="mt-2 btn btn-primary btn-block" type="submit">Log in</button>
            <p class="mt-3">belum punya akun? daftar <a href="{{url('/register')}}">disini </a></p>
            {{-- <p class="mt-4 mb-1 text-right">login <a href="{{route('loginop')}}">disini</a> sebagai operator</p> --}}
          </div>
          <p class="mb-4 text-muted">&copy;ripuyu 2020</p>
        </form>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

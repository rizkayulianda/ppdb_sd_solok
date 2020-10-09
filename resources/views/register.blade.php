 
<!doctype html>
<html lang="en">
  <head>
    <title>Signin Template for Bootstrap</title>
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
  <body class="text-center bg-primary">
        <form class="card p-1 text-center" method="POST" action=" {{ route('register') }}">
          <div class=" card-body p-5">
            {{ csrf_field() }}
            <h1 class="h3 mb-3 font-weight-normal">Register {{ config('app.name') }}</h1>
            <label for="inputNohp" class="sr-only">No HP</label>
            <input type="no_hp" name="no_hp" value="{{ old ('no_hp') }}" id="inputNohp" class="form-control mb-1 {{ $errors -> has ('no_hp') ? 'is-invalid' : '' }}" placeholder="No HP" required autofocus>
            @if ($errors->has('no_hp'))
                <div class="invalid-feedback">
                  {{$errors->first('no_hp')}}
                </div>
            @endif

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control mb-1 {{ $errors -> has ('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
            @if ($errors->has('no_hp'))
              <div class="invalid-feedback">
                {{$errors->first('password')}}
              </div>
            @endif

            <label for="inputPassword" class="sr-only">Password Confirmation</label>
            <input type="password" name="password_confirmation" id="inputPassword" class="form-control{{$errors -> has ('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
            @if ($errors->has('no_hp'))
            <div class="invalid-feedback">
              {{$errors->first('password_confirmation')}}
            </div>
            @endif
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">@ripuyu-2020</p>
          </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

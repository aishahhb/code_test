<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEST</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
      <!-- ======= Main ======= -->
      <section id="hero">
        <div class="hero-container">
          <a class="navbar-brand" style="padding:10px 0 20px" href="{{ url('/') }}"><h1>Coding Test - Tyrell Systems Sdn Bhd </h1></a>
          
          @if (Route::has('login'))
              @auth
                 <h2>Hi, nice to meet you.</h2>
                 <a href="{{route('home')}}" class="btn btn-primary">Go to Test</a>
              @else
                <h2>Hi, nice to meet you. <br /> <br />Please login to check my answer.</h2>
                 <form action="{{ route('login') }}" method="POST" role="form" class="php-email-form">
                    @csrf
                    <div class="row no-gutters">
                      <div class="col-md-6 form-group pr-md-1">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="col-md-6 form-group pl-md-1">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="text-center">
                        <button type="submit">
                            {{ __('Login') }}
                        </button>
                    </div>
                  </form>
                  <div style="text-align: left; margin-top: 150px;">
                      NOTE:<br /> 
                      Username: <b>admin@admin.com</b><br />
                      Password: <b>password</b>
                  </div>
                </div>
              @endauth
          @endif
      </section><!-- /main -->
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">
        <div class="credits">aishahhashimbaki@gmail.com | +6013-3201019 </div>
        <div class="copyright">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
    </footer><!-- /footer -->

</body>
</html>

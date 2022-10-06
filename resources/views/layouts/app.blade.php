<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Main ======= -->
    <section id="hero">
        <div class="hero-container">
            <a class="navbar-brand" style="padding:10px 0 20px" href="{{ url('/') }}"><h1>Coding Test - Tyrell Systems Sdn Bhd </h1></a>
            @auth
                <div class="container">
                    <a href="{{route('home')}}" class="btn btn-success btn-flat"><i class="bx bx-user"></i> {{ Auth::user()->name }} - A) Programming Test</a>
                    <a href="{{route('question_b')}}" class="btn btn-info btn-flat"><i class="bx bx-file"></i> Question B) SQL Improvement Logic Test </a>
                    <div class="btn btn-danger btn-flat">
                        <i class="bx bx-lock"></i>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white;">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </section>
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

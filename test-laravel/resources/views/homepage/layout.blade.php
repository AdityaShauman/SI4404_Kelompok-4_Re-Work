<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('homepage-title', 'Home')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorig <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<style>
    body {
        font-family: "Inter", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>

<body>
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You\'re not admin',
                timer: 2000,
            })
        </script>
    @endif
    @include('homepage.partials.navbar')

    @yield('content')


    @include('homepage.partials.footer')
    @include('homepage.partials.script')
</body>

</html>

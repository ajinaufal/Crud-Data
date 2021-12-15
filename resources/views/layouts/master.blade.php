<!doctype html>
<html lang="en">

<head>
    <title>CRUD Laravel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    @if ($title == 'Register' || $title == 'Login')

        <body
            class="hold-transition @if ($title == 'Login')
        login-page
    @else
        register-page
    @endif ">
            @yield('body')
        </body>
        @include('layouts.script')
    @else

        <body class="hold-transition sidebar-mini">

            <!-- Main content -->
            <div class="wrapper">
                <!-- Navbar -->
                @include('layouts.navbar')
                <!-- Main Sidebar Container -->
                @include('layouts.sidebar')
                <!-- Content -->
                @yield('body')
                <footer class="main-footer">
                    @include('layouts.footer')
                </footer>
            </div>
            <!-- Script -->
            @include('layouts.script')
        </body>
    @endif
</body>

</html>

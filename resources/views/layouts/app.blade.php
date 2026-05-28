
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="/assets/style.css">

</head>

<body>

    <nav class="navbar-custom">

        <div class="container d-flex justify-content-between align-items-center">

            <h2 class="logo">
                ReservaPro
            </h2>

            <div>

                <a href="/"
                   class="nav-link-custom">

                    Início

                </a>

                <a href="/reservas"
                   class="nav-link-custom">

                    Reservas

                </a>

                <a href="/reservas/create"
                   class="nav-link-custom">

                    Nova Reserva

                </a>

            </div>

        </div>

    </nav>

    <div class="container py-5">

        @yield('content')

    </div>

</body>

</html>


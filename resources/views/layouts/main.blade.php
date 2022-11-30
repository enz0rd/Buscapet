<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">

    <!-- css bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->

    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="bg-header fixed-top">
        <header class="py-2 mb-2 navbar-header">
            <a href="/" class="text-decoration-none logo">
                <img src="/img/logo.png" alt="logo buscapet" width="120px">
            </a>

            <ul class="nav">
                <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/produtos" class="nav-link">Produtos</a></li>
                <li class="nav-item"><a href="/servicos" class="nav-link">Serviços</a></li>
                <li class="nav-item"><a href="/empresas" class="nav-link">Empresas</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">Sobre nós</a></li>
            </ul>
        </header>
    </div>
    <br><br><br>
    @yield('content')


    <footer class="bg-primary text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-9 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Sobre nós</h5>

                    <p>
                        Buscapet é uma startup que visa comparar facilmente os preços
                        de produtos para todos os pets do Brasil. Começando em Agosto
                        de 2022, Buscapet vem crescendo aos poucos.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/" class="text-white">Home</a>
                        </li>
                        <li>
                            <a href="/produtos" class="text-white">Produtos</a>
                        </li>
                        <li>
                            <a href="/servicos" class="text-white">Serviços</a>
                        </li>
                        <li>
                            <a href="/empresas" class="text-white">Empresas</a>
                        </li>
                        <li>
                            <a href="/about" class="text-white">Sobre nós</a>
                        </li>
                        <li>
                            <a href="/dashboard" class="text-white">Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="/">Buscapet</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        //Verifica se a Janela está no topo
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Onde a mágia acontece! rs
        $('.scrollToTop').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

    });
</script>


</html>

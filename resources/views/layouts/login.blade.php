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
            </ul>
        </header>
    </div>
    <br><br><br>
    @yield('content')
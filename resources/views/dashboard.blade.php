@extends('layouts.main')

@section('title', 'Buscapet - Dashboard')

@section('content')

<div class="content">
    <br><br><br>
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="Title-dashboard">Dashboard</h2>
                </div>
                <br><br>
                <div class="displaycenter">
                    <p class="text-dash">
                        Bem vindo à dashboard do site Buscapet 
                        <?php
                            session_start();
                            echo "Usuario: ". $_SESSION['usuarioNome'];    
                        ?>!
                    </p>
                    <p class="text-dash">
                        Aqui você pode adicionar produtos, categorias, empresas ou serviços.
                    </p>
                </div>

                <br><br>

                <div class="buttonsdash">
                    <a href="/servicos/add" class="buttonClass-services">Adicionar Serviço</a>
                    <a href="/produtos/add" class="buttonClass">Adicionar Produto</a>
                    <a href="/categorias/add" class="buttonClass-categories">Adicionar Categorias</a>
                    <a href="/empresas/add" class="buttonClass-company">Adicionar Empresas</a>
                </div>

                <a class="buttonClass-categories" href="/sair">Sair</a>
            </div>
        </div>
                <br><br><br>
    </div>
</div>



@endsection
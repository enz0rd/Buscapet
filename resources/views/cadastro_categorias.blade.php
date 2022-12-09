@extends('layouts.main')

@section('title', 'Buscapet - Testes')

@section('content')

<?php
if(session_status() !== PHP_SESSION_ACTIVE){
    session_cache_expire(1);
    session_cache_limiter(1);
    session_start();
}
if(!isset($_SESSION['usuarioId']) or isset($_SESSION['time']) and isset($_SESSION['time']) + 300 < time()) {
    echo "<meta http-equiv='refresh' content='0; url=/login'>";
} else {
    $_SESSION['time'] = time();
}
?>

<div class="content">
    <br><br><br>
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="Title-categories">Adicionar Categorias</h2>
                </div>
                <br><br>
                <div class="displaycenter">
                    <div class="col-md-8 col-lg-4">
                        <form class="needs-validation center" novalidate method="POST" action="../processos/cadastro_catprod.php" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="firstName" class="form-label">Categoria de Produto ou Serviço</label>
                                    <input type="text" class="form-control" id="ds_categoria" maxlength="50" placeholder="Categoria" name="ds_categoria" required>
                                    <div class="invalid-feedback">
                                        O nome da categoria deve ser preenchido!
                                    </div>
                                </div>
                                <input class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar Categoria" />
                            </div>
                        </form>
                    </div>
                    <br><br>
                    <div class="col-md-8 col-lg-4">
                        <form class="needs-validation center" novalidate method="POST" action="../processos/cadastro_catemp.php" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="firstName" class="form-label">Categoria de Empresa</label>
                                    <input type="text" class="form-control" id="ds_categoria" maxlength="50" placeholder="Categoria" name="ds_categoria" required>
                                    <div class="invalid-feedback">
                                        O nome da categoria deve ser preenchido!
                                    </div>
                                </div>
                                <input class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar Categoria" />
                            </div>
                        </form>
                    </div> 
                    <br><br>
                </div>
            </div>
        </div>
                <br><br><br>
    </div>
</div>
<script src="./validation/form-validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

@endsection
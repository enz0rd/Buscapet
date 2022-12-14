@extends('layouts.main')

@section('title', 'Buscapet - Testes')

@section('content')

<?php
if(session_status() !== PHP_SESSION_ACTIVE){
    session_cache_expire(1);
    session_cache_limiter(1);
    session_start();
}
if(!isset($_SESSION['usuarioId'])) {
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
                    <h2 class="Title-services">Adicionar Empresa</h2>
                </div>
                <br><br>
                <div class="displaycenter">
                    <div class="col-md-7 col-lg-8">
                        <form class="needs-validation" novalidate method="POST" action="../processos/cadastro_empresas.php" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="firstName" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="ds_nome" maxlength="50" placeholder="Nome da Empresa" name="nome_empresa" required>
                                    <div class="invalid-feedback">
                                        O nome deve ser preenchido!
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="username" class="form-label">Categoria</label>
                                    <div class="input-group has-validation">
                                        <select class="form-select" id="tipo" name="tipo" required>
                                        <option value="Nenhuma">Selecione uma opção</option>
                                        <?php
                                        include_once('./processos/conecta.php');
                                        $selecttype = "SELECT * FROM categorias_empresas ORDER BY ds_categoria";
                                        $result_type = mysqli_query($conexao, $selecttype);
                                        while ($tipo = mysqli_fetch_array($result_type)) {
                                        ?>
                                            <option value="<?php echo $tipo['idcategoria'] ?>"><?php echo $tipo['ds_categoria'] ?></option>
                                        <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                        Escolha uma categoria!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="contato_empresa" class="form-label">Contato</label>
                                    <input type="text" class="form-control" name="contato_empresa" id="contato_empresa" placeholder="49999999999" maxlength="11" required>
                                    <div class="invalid-feedback">
                                        Digite um número válido!
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Endereço</label>
                                    <input type="text" name="endereco_empresa" class="form-control" maxlength="100" id="address" placeholder="Avenida São Jorge, 123" required>
                                    <div class="invalid-feedback">
                                        Preencha o endereço da empresa
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Descrição</label>
                                    <input type="text" name="desc_empresa" class="form-control" id="desc" placeholder="Descrição da sua Empresa" maxlength="100" required>
                                    <div class="invalid-feedback">
                                        Preencha o endereço da empresa
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Logo</label>
                                    <input type="file" accept="image/png, image/jpeg" name="logo_empresa" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Insira uma Logo válida
                                    </div>
                                </div>

                                <input class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar Empresa" />
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
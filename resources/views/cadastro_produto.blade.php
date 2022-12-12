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
                    <h2 class="Title-products">Adicionar Produto</h2>
                </div>
                <br><br>
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-12">
                            <form class="needs-validation" novalidate method="POST" action="../processos/cadastro_produto.php" enctype="multipart/form-data">
                                <div class="row g-3">
                                <div class="col-12">
                                    <label for="firstName" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="ds_produto" maxlength="50" placeholder="Nome do produto" name="nome_produto" required>
                                    <div class="invalid-feedback">
                                    O nome deve ser preenchido!
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="username" class="form-label">Categoria</label>
                                    <div class="input-group has-validation">
                                    <select class="form-select" id="tipo" name="tipo" required>
                                        <option value="Nenhuma">Selecione uma opção</option>
                                        <?php
                                        include_once('./processos/conecta.php');
                                        $selecttype = "SELECT * FROM categorias_prodser ORDER BY ds_categoria";
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
                                <div class="col-4">
                                    <label for="username" class="form-label">Empresa</label>
                                    <div class="input-group has-validation">
                                    <select class="form-select" id="empresa" name="empresa" required>
                                        <option value="Nenhuma">Selecione uma opção</option>
                                        <?php
                                        include_once('./processos/conecta.php');
                                        $selectemp = "SELECT * FROM empresas ORDER BY ds_empresa";
                                        $result_emp = mysqli_query($conexao, $selectemp);
                                        while ($emp = mysqli_fetch_array($result_emp)) {
                                        ?>
                                        <option value="<?php echo $emp['idempresa'] ?>"><?php echo $emp['ds_empresa'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Escolha uma categoria!
                                    </div>
                                    </div>
                                </div>
        
                                <div class="col-4">
                                    <label for="valor_produto" class="form-label">Valor</label>
                                    <input type="float" class="form-control" name="valor_produto" id="valor_produto" placeholder="50.50" maxlength="11" required>
                                    <div class="invalid-feedback">
                                    Digite um valor válido
                                    </div>
                                </div>
        
                                <div class="col-12">
                                    <label for="qtd" class="form-label">Quantidade</label>
                                    <input type="number" name="qtd_produto" class="form-control" maxlength="4" id="qtd" placeholder="5" required>
                                    <div class="invalid-feedback">
                                    Preencha o campo
                                    </div>
                                </div>
        
                                <div class="col-12">
                                    <label for="qtd" class="form-label">Descrição</label>
                                    <input type="text" name="desc_produto" class="form-control" id="desc" placeholder="Descrição do seu produto" maxlength="100" required>
                                    <div class="invalid-feedback">
                                    Preencha o campo
                                    </div>
                                </div>
        
                                <div class="col-12">
                                    <label for="qtd" class="form-label">Imagem</label>
                                    <input type="file" accept="image/png, image/jpeg" name="img_produto" class="form-control" required>
                                    <div class="invalid-feedback">
                                    Insira uma imagem válida
                                    </div>
                                </div>
        
                                <input class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar Produto" />
                                    
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
                <br><br><br>
    </div>
</div>
<script src="./validation/form-validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

@endsection
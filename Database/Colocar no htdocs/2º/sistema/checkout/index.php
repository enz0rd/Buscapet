<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Checkout example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Checkout form</h2>
      <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Visualização:</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nome:</h6>
              <small class="text-muted">Teste</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Tipo:</h6>
              <small class="text-muted">Teste</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Contato</h6>
              <small class="text-muted">Teste</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Endereço</h6>
              <small class="text-muted">Teste</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Descrição:</h6>
              <small class="text-muted">Teste</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Imagem:</h6>
              <img style="border-radius: 30px; padding: 10px;" id="output" width="200" />
            </div>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Adicionar Empresa</h4>
        <form class="needs-validation" novalidate method="$_POST">
          <div class="row g-3">
            <div class="col-12">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="ds_nome" placeholder="Nome da Empresa" value="" required>
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
                      include_once('../conecta.php');
                      $selecttype = "SELECT * FROM categorias_empresas ORDER BY ds_categoria";
                      $result_type = mysqli_query($conexao, $selecttype);
                      while($tipo = mysqli_fetch_array($result_type)){
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
              <label for="email" class="form-label">Contato</label>
              <input type="text" class="form-control" id="contato_empresa" placeholder="49999999999" maxlength="11" required>
              <div class="invalid-feedback">
                Digite um número válido!
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="Avenida São Jorge, 123" required>
              <div class="invalid-feedback">
                Preencha o endereço da empresa
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Logo</label>
              <input type="file" accept="image/png, image/jpeg" name="logo" onchange="loadFile(event)" class="form-control" required>
              <div class="invalid-feedback">
                Insira uma Logo válida
              </div>
            </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar Empresa</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Buscapet</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
  <script>
      var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
      };
</script>

</html>

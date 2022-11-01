<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Enzo">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Buscapet - Produtos</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/"> -->

    

    

<link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

      .flex {
        display: flex;
        justify-content: space-between;
      }

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

      .wrap {
        flex-wrap: wrap;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Dashboard</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../../login/login.php">Sair</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="../menu.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../empresas/menu.php">
              <span data-feather="add" class="align-text-bottom"></span>
              Empresas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../serviços/menu.php">
              <span data-feather="update" class="align-text-bottom"></span>
              Serviços
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../produtos/menu.php">
              <span data-feather="delete" class="align-text-bottom"></span>
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../categorias/menu.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Categorias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../usuarios/menu.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Usuários
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Relatórios Salvos</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Mês corrente
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Última semana
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Acessos anuais
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../../assets/brand/logo.png" alt="" width="72" height="72">
        <h2>Adicionar Produto</h2>
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
                <small class="text-muted name" id="output_name">Nome do Produto</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Categoria:</h6>
                <small class="text-muted" id="output_type">Categoria do Produto</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Empresa:</h6>
                <small class="text-muted" id="output_emp">Empresa</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Valor</h6>
                <small class="text-muted" id="output_ctt">0.00</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Quantidade</h6>
                <small class="text-muted qtd" id="output_qtd">0</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Descrição:</h6>
                <small class="text-muted desc" id="output_desc">Descrição do Produto</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Imagem:</h6>
                <img style="border-radius: 30px; padding: 10px;" id="output_img" width="200" />
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Adicionar Produto</h4>
          <form class="needs-validation" novalidate method="POST" action="./src/produto.php" enctype="multipart/form-data">
            <div class="row g-3">
              <div class="col-12">
                <label for="firstName" class="form-label">Nome</label>
                <input type="text" oninput="loadname()" class="form-control" id="ds_produto" maxlength="50" placeholder="Nome do produto" name="nome_produto" required>
                <div class="invalid-feedback">
                  O nome deve ser preenchido!
                </div>
              </div>
              <div class="col-4">
                <label for="username" class="form-label">Categoria</label>
                <div class="input-group has-validation">
                  <select onchange="loadtype()" class="form-select" id="tipo" name="tipo" required>
                    <option value="Nenhuma">Selecione uma opção</option>
                    <?php
                    include_once('../../../conecta.php');
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
                  <select onchange="loademp()" class="form-select" id="empresa" name="empresa" required>
                    <option value="Nenhuma">Selecione uma opção</option>
                    <?php
                    include_once('../../../conecta.php');
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
                <input type="float" oninput="loadctt()" class="form-control" name="valor_produto" id="valor_produto" placeholder="50.50" maxlength="11" required>
                <div class="invalid-feedback">
                  Digite um valor válido
                </div>
              </div>

              <div class="col-12">
                <label for="qtd" class="form-label">Quantidade</label>
                <input type="number" oninput="loadqtd()" name="qtd_produto" class="form-control" maxlength="4" id="qtd" placeholder="5" required>
                <div class="invalid-feedback">
                  Preencha o campo
                </div>
              </div>

              <div class="col-12">
                <label for="qtd" class="form-label">Descrição</label>
                <input type="text" oninput="loaddesc()" name="desc_produto" class="form-control" id="desc" placeholder="Descrição do seu produto" maxlength="100" required>
                <div class="invalid-feedback">
                  Preencha o campo
                </div>
              </div>

              <div class="col-12">
                <label for="qtd" class="form-label">Imagem</label>
                <input type="file" accept="image/png, image/jpeg" name="img_produto" onchange="loadlogo(event)" class="form-control" required>
                <div class="invalid-feedback">
                  Insira uma imagem válida
                </div>
              </div>

              <input class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar Produto" />
          </form>
        </div>
      </div>
    </main>
  </div>


  <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>
<script>
  var loadlogo = function(event) {
    var image = document.getElementById('output_img');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadname = function(event) {
    var name = document.getElementById('ds_produto').value;
    document.getElementById('output_name').innerHTML = name;
  };
  var loadtype = function(event) {
    var type = document.getElementById('tipo').value;
    document.getElementById('output_type').innerHTML = type;
  };
  var loademp = function(event) {
    var emp = document.getElementById('empresa').value;
    document.getElementById('output_emp').innerHTML = emp;
  };
  var loadctt = function(event) {
    var ctt = document.getElementById('valor_produto').value;
    document.getElementById('output_ctt').innerHTML = ctt;
  };
  var loaddesc = function(event) {
    var desc = document.getElementById('desc').value;
    document.getElementById('output_desc').innerHTML = desc;
  };
  var loadqtd = function(event) {
    var qtd = document.getElementById('qtd').value;
    document.getElementById('output_qtd').innerHTML = qtd;
  };
</script>
    </main>
  </div>
</div>


    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

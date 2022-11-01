<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Enzo">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Buscapet - Usuários</title>

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
        overflow-wrap: normal;
        word-wrap: break-word;
      }

      .center {
        align-items: center;
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
            <a class="nav-link" href="../produtos/menu.php">
              <span data-feather="delete" class="align-text-bottom"></span>
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../categorias/menu.php">
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
        <h2>Adicionar Categoria de Empresa</h2>
      </div>

        <div class="col-md-8 col-lg-4">
          <form class="needs-validation center" novalidate method="POST" action="./src/catemp.php" enctype="multipart/form-data">
            <div class="row g-3">
              <div class="col-12">
                <label for="firstName" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="ds_categoria" maxlength="50" placeholder="Categoria" name="ds_categoria" required>
                <div class="invalid-feedback">
                  O nome da categoria deve ser preenchido!
                </div>
              </div>
                <input class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar Categoria" />
          </form>
        </div>
      </div>
    </main>
  </div>


  <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>
    </main>
  </div>
</div>


    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </div>
</div>


    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

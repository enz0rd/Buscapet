
<?php
  $ds_email = $_REQUEST["ds_email"];
  $ds_senha = $_REQUEST["ds_senha"];

  if ((strlen($ds_email)>5)&&(strlen($ds_senha)>=3))
  {
    include_once("../../conecta.php");
    $SQL = "SELECT * from usuarios where ds_email = '$ds_email';";
    $RSS = mysqli_query($conexao,$SQL) or print(mysqli_error($conexao));
    $RSX = mysqli_fetch_assoc($RSS);
    If ( $RSX["ds_email"] == $ds_email )
    {
      $SQL = "SELECT * from usuarios where ds_email = '$ds_email' and ds_senha = '$ds_senha';";
      $RSS = mysqli_query($conexao,$SQL) or print(mysqli_error($conexao));
      $RSX = mysqli_fetch_assoc($RSS); 	
      If ( $RSX["ds_senha"] == $ds_senha )
      {      
        echo "<script>alert(`Login aceito, bem vindo`)</script>";
        echo "<meta http-equiv='refresh' content='1; url=../dashboard/menu.php'>";
      }
      else
      {
        echo "<script>alert('Senha errada');</script>";
      }
    }
    else
    {
      echo "<script>alert('Usuário Inexistente.');</script>";
      $ds_email = "";
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema Teste">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Login - Administração</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/"> -->
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form action='login.php' method='post'>
        <img class="mb-4" src="../../assets/brand/logo.png" alt="logo" width="100" height="100">
        <h1 class="h3 mb-3 fw-normal">Login de Administrador</h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="ds_email" name="ds_email" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="ds_senha" name="ds_senha" placeholder="Senha">
          <label for="floatingPassword">Senha</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022 Buscapet</p>
      </form>
    </main>    
  </body>
</html>
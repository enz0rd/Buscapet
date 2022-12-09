@extends('layouts.login')

@section('title', 'Buscapet - Login')

@section('content')

<?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
?>

<section class="vh-100" style="background-color: #fff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border:5px solid var(--orange);border-radius: 1rem; box-shadow:rgba(0, 0, 0, 0.2) 5px 5px 10px;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./img/Bannerlogin.jpg"
                alt="login form" class="img-fluid" style="border-radius: 0.65rem 0 0 0.65rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="../processos/login.php">


                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login Dashboard</h5>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="email">Endereço de Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" value="Entrar" id="entrar">
                  </div>

                  <p>
                    <?php 
                    //Recuperando o valor da variável global, os erro de login.
                    if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    }?>
                </p>

                <p>
                    <?php 
                    //Recuperando o valor da variável global, deslogado com sucesso.
                    if(isset($_SESSION['logindeslogado'])){
                        echo $_SESSION['logindeslogado'];
                        unset($_SESSION['logindeslogado']);
                    }
                    ?>
                </p>

                  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2022 Copyright:
                        <a class="text-black" href="/">Buscapet</a>
                    </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
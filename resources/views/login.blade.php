@extends('layouts.login')

@section('title', 'Buscapet - Login')

@section('content')

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

                <form>


                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login Dashboard</h5>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Endereço de Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Senha</label>
                    <input type="password" id="password" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button">Entrar</button>
                  </div>
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
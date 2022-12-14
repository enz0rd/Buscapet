<?php
include_once('./processos/conecta.php');
$url = "https://buscapet.shop/" . $_SERVER['REQUEST_URI'];
$url_parts = parse_url($url);
$path = $url_parts['path'];
$service_id = basename($path);
$query = "select * from servicos, empresas where idservico = $service_id and servicos.idempresa = empresas.idempresa;";
include_once("./processos/conecta.php");
$result = mysqli_query($conexao, $query) or die('erro na query:' . $query);
$servico = $result->fetch_assoc();
?>

@extends('layouts.main')

@section('title', "Buscapet - Serviço")

@section('content')

<?php
if ($servico == null) { ?>
    <div class="container-about">
        <div class="container-xl">
            <img src="/img/undefined.png" alt="Cachorro servico inexistente" class="bannerserv">
            <h1 class="Title-services" style="text-align: center !important;">Serviço Inexistente</h1>
        </div>
    </div>
<?php } else { ?>
    <div class="content">
        <br><br><br>
        <div class="container-xl">
            <div class="row">
                <div class="col-md-4">
                    <br><br>
                    <div class="banner">
                        <img src="/img/servicos/<?php echo $servico['img_servico']; ?>" alt="banner" class="bannerserv">
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="title">
                        <h2 class="Title-services" style="margin-top: 15px !important;"><?php echo $servico['ds_servico']; ?></h2>
                    </div>
                    <br><br>
                    <div class="box">
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <div class="prices">
                            <p class="item-price"><b>R$<?php echo $servico['valor_servico']; ?></b></p>
                        </div>
                        <br><br>
                        <p class="text"><?php echo $servico['desc_servico']; ?></p>
                    </div>
                </div>

                <div class="col-md-12">
                    <br><br><br><br>
                    <center>
                        <h4 ce class="Title-dashboard">Empresa</h4>
                    </center>
                    <div id="myCarousel" class="carousel slide pointer-event" data-ride="carousel" data-interval="0">
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row">
                                    <div class="col-sm-3" style="margin: auto !important; margin-top: 15px; margin-bottom:15px;">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="/img/empresas/<?php echo $servico['ds_empresa'];
                                                                        echo "/";
                                                                        echo $servico['logoempresa'] ?>" class="img-fluid" alt="<?php echo $servico['logoempresa'] ?>">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><?php echo $servico['ds_empresa']; ?></h4>
                                                <p><?php echo $servico['endereco_empresa']; ?></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <a class="buttonClass-services" href="https://wa.me/55<?php echo $servico['contato_empresa'] ?>" target="__blank">Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-12">
                    <br><br><br><br>
                    <center>
                        <h4 ce class="thumb-content">Disponível nas seguintes empresas</h4>
                    </center>
                    <div id="myCarousel" class="carousel slide pointer-event" data-ride="carousel" data-interval="0">
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row">
                                    <div class="col-sm-3" style="margin-top: 15px; margin-bottom:15px;">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="./img/agropet.png" class="img-fluid" alt="agropet.png">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>AgroPet</h4>
                                                <p>Rua das Abobrinhas, 221</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <a class="buttonClass-services" href="http://wa.me/554995798532" target="__blank">Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3" style="margin-top: 15px; margin-bottom:15px;">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="./img/pet-love.png" class="img-fluid" alt="pet-love.png">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>PetLove</h4>
                                                <p>Rua dos Coqueiros, 5432</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <a class="buttonClass-services" href="http://wa.me/552184185698" target="__blank">Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3" style="margin-top: 15px; margin-bottom:15px;">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="./img/petecia.jpg" class="img-fluid" alt="pet&amp;cia.jpg">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Pet&amp;Cia</h4>
                                                <p>Avenida São Jorge, 234</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <a class="buttonClass-services" href="http://wa.me/554532144589" target="__blank">Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3" style="margin-top: 15px; margin-bottom:15px;">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="./img/55fe6bb9b9305_thumb900.png" class="img-fluid" alt="55fe6bb9b9305_thumb900.png">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>PetShop do Sérgio</h4>
                                                <p>Rua Abobrinhas, 432</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <a class="buttonClass-services" href="http://wa.me/554998745632" target="__blank">Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>


<?php } ?>

@endsection
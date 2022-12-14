@extends('layouts.main')

@section('title', 'Buscapet - Serviços')

@section('content')

<div class="content">
    <br><br><br>
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="Title-services">Serviços</h2>
                </div>
                <br><br>
                <div class="banner">
                    <a href="/">
                        <img src="./img/bannerhome.jpg" alt="banner" class="bannerserv">
                    </a>
                </div>
                <br>
                <div id="myCarousel" class="carousel-services slide" data-ride="carousel" data-interval="0">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                            <?php
                                    $conn = mysqli_connect("localhost", "devbuscapet", "devbuscapet", "bdbuscapet") or die ("erro na conexão");
                                    $query = "select *,ds_empresa, contato_empresa from servicos,empresas where servicos.idempresa = empresas.idempresa order by valor_servico";
                                    $result_query = mysqli_query($conn,$query) or die('erro na query:'.$query);
                                    while ($row = $result_query->fetch_assoc()) {

                                        ?>
                                        <div class="col-sm-3" style="margin-top: 15px; margin-bottom:15px;">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="img-box">
                                                    <img src="./img/servicos/<?php echo $row['img_servico'] ?>" class="img-fluid" alt="<?php echo $row['img_servico'] ?>">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4><?php echo $row['ds_servico'] ?></h4>
                                                    <p><small><?php echo $row['ds_empresa'] ?></small></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p class="item-price"><b>R$<?php echo $row['valor_servico'] ?></b></p>
                                                    <br>
                                                    <a class="buttonClass-services" href="/servicos/<?php echo $row['idservico'] ?>">Ver mais</a>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</div>

@endsection
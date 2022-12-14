@extends('layouts.main')

@section('title', 'Buscapet - Empresas')

@section('content')

<div class="content">
    <br><br><br>
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="Title-dashboard">Empresas</h2>
                </div>
                <br><br>
                <div class="banner wrapper">
                    <a href="/">
                        <img src="./img/bannerhome.jpg" alt="banner" class="bannerserv">
                    </a>
                </div>
                <br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                            <?php
                                    $conn = mysqli_connect("localhost", "devbuscapet", "devbuscapet", "bdbuscapet") or die ("erro na conexão");
                                    $query = "select * from empresas";
                                    $result_query = mysqli_query($conn,$query) or die('erro na query:'.$query);
                                    while ($row = $result_query->fetch_assoc()) {

                                        ?>
                                        <div class="col-sm-3" style="margin-top: 15px; margin-bottom:15px;">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="./img/empresas/<?php echo $row['ds_empresa']; echo "/"; echo $row['logoempresa'] ?>" class="img-fluid" alt="<?php echo $row['logoempresa'] ?>">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4><?php echo $row['ds_empresa'] ?></h4>
                                                    <p><?php echo $row['endereco_empresa'] ?></p>
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
                                                    <a class="buttonClass-services" href="http://wa.me/55<?php echo $row['contato_empresa'] ?>" target="__blank">Whatsapp</a>
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
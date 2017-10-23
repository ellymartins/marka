<?php

/* @var $this yii\web\View */

$this->title = 'marka';
?>
<style>
    .imgs{
        width: 100% !important;
        height: 100% !important;
    }
</style>
<div class="site-index">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active" >
        <img src="<?=Yii::$app->request->baseUrl?>/imgs/carousel.jpg" alt="Los Angeles" class="imgs">
      </div>

      <div class="item test">
        <img src="<?=Yii::$app->request->baseUrl?>/imgs/carousel.jpg" alt="Chicago" class="imgs">
      </div>
        </div>
    </div>

    <!--/Relacionados-->

        <!--/Orgaos da MARKA-->

    <div class="composition" style="margin-top:5rem;">
        
            <div class="row">
                    <div class="col-sm-1">
                        <div class="card">
                        <div class="card-block">
                        <img src="<?=Yii::$app->request->baseUrl?>/imgs/users.svg" alt="Los Angeles" class="imgs">
                            <p class="card-text">Assembeia Geral</p>
                        </div>
                    </div>
                </div>
        <div class="col-sm-1">
            <div class="card">
                <div class="card-block">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/direcao.svg" alt="Los Angeles" class="imgs">
                <p class="card-text">Direcao</p>
                </div>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="card">
                <div class="card-block">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/balance.svg" alt="Los Angeles" class="imgs">
                <p class="card-text">Conselho Fiscal</p>
                </div>
            </div>
        </div>  
     </div>
</div> 

    <!--/Actividades-Noticias-->
    <div class="news" style="margin-top:3rem;"><h3>Actividades Recentes</h3>
        
            <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                        <div class="card-block">
                        <img src="<?=Yii::$app->request->baseUrl?>/imgs/buildings.jpg" alt="Los Angeles" class="imgs">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-block">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/buildings.jpg" alt="Los Angeles" class="imgs">
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-block">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/buildings.jpg" alt="Los Angeles" class="imgs">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
    </div>
        
</div>


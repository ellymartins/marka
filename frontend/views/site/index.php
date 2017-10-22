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
        <img src="<?=Yii::$app->request->baseUrl?>/imgs/buildings.jpg" alt="Los Angeles" class="imgs">
      </div>

      <div class="item test">
        <img src="<?=Yii::$app->request->baseUrl?>/imgs/ear-of-the-wind-89470_960_720.jpg" alt="Chicago" style="width:100%;height:50%;">
      </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <!--/Relacionados-->
    <div class="body-content" style="margin-top:3rem;"><h3>Actividades Recentes</h3>
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
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-block">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/buildings.jpg" alt="Los Angeles" class="imgs">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
        
    </div>
</div>

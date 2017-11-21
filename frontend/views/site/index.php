

<?php

/* @var $this yii\web\View */

$this->title = 'marka';

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

?>
<style>
    .imgs{
        width: 100% !important;
        height: 100% !important;
    }
</style>


<body>


<div class="container">

    <!-- Carousel  Banner Animado-->



    <div class="carousel">

        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel" data-slide-to="1"></li>
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



    </div>


 <!-- Orgaos da MARKA -->

    <div class="composition">


        <div class="row">
            <div class="col-xs-6 col-md-3" style="width: 140px;">
            <a href="<?=Url::toRoute(['site/assembleia'])?>">
                    <img src="<?=Yii::$app->request->baseUrl?>/imgs/users.png"  alt="Assembleia Geral" class="imgs">
                </a>
                <h2 class="icon-text">ASSEMBLEIA GERAL</h2>
            </div>
        

      
            <div class="col-xs-6 col-md-3" style="width: 140px;">
            <a href="<?=Url::toRoute(['site/direccao'])?>">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/direccao.png" alt="Direccao" class="imgs">
                </a>
                <h2 class="icon-text">DIRECÇÃO</h2>
            </div>
       


        
            <div class="col-xs-6 col-md-3" style="width: 140px;">
            <a href="<?=Url::toRoute(['site/conselho'])?>">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/balance.png" alt="Conselho Fiscal" class="imgs">
                </a>
                <h2 class="icon-text">CONSELHO FISCAL</h2>
            </div>
        
        </div>
                
    </div>
</div>




 <!-- SINOPSE -->

    <div class="reservado" >

        <div class="container-fluid bg-grey">
            <div class="col-sm-2">
                <div class="logo"><img src="<?=Yii::$app->request->baseUrl?>/imgs/logo-cor.png"  class="imgs">
                </div>
    
            </div>

            <div class="col-sm-7 text-left">
                <h2 text-align="left" ><strong>SINOPSE</h2></strong></br>
                <p align="justify"><strong>MISSÃO:</strong> Our vision Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>

               </br>
                <p align="justify"><strong>VISÃO:</strong> Our vision Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>

            </br>
                <p align="justify"><strong>VALORES:</strong> Our vision Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>

            </div>

        </div>


    </div>

 <!-- Actividades- -->
 
    <div class="news" style="margin-top:10rem;" bold><h3>ACTIVIDADES RECENTES</h3>

        <div class="row">
            <div class="col-sm-1">
                <hr width=120%   style="color: rgba(102, 101, 101, 0.9);background-color: rgba(102, 101, 101, 0.9);height: 3px;margin-left: 565px;">
        
            </div>

            <div class="col-sm-1" align="center">
            <hr width=120%   style="color: rgba(102, 101, 101, 0.9);background-color: rgba(102, 101, 101, 0.9);height: 3px;margin-left: 565px;">
        
            </div>
            
        </div>


        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block">
                        <img src="<?=Yii::$app->request->baseUrl?>/imgs/assoc.jpg" alt="news1" class="imgs">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.text below as a natural lead-in to additional content.</p>
                        <a href="<?=Url::toRoute(['site/actividades'])?>" button type="button" class="btn btn-primary" >Ver mais
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/assoc2.jpg" alt="news2" class="imgs">
                <p class="card-text">With supporting text below as a natural lead-in to additional content.text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Ver mais
                <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/team1.jpg" alt="news2" class="imgs">
                <p class="card-text">With supporting text below as a natural lead-in to additional content.text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Ver mais
                <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                </div>
            </div>
        </div>

            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block">
                        <img src="<?=Yii::$app->request->baseUrl?>/imgs/assoc3.jpg" alt="news3" class="imgs">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.text below as a natural lead-in to additional content..</p>
                        <a href="#" class="btn btn-primary">Ver mais
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
 </div>    
 

 <!-- Parceiros -->
    <div class="parceiros"><h3>PARCEIROS</h3>

    

    <div class="row">
            <div class="col-sm-1">
            <hr width=120%   style="color: rgba(102, 101, 101, 0.9);background-color: rgba(102, 101, 101, 0.9);height: 3px;margin-left: 565px;">
        
            </div>

            <div class="col-sm-1" align="center">
            <hr width=120%   style="color: rgba(102, 101, 101, 0.9);background-color: rgba(102, 101, 101, 0.9);height: 3px;margin-left: 565px;">
        
            </div>
            
        </div>

        <div class="row">
     
            <div class="parceiros-box">
                <div class="icon-block">
                <a href="site/index.php"><img src="<?=Yii::$app->request->baseUrl?>/imgs/T.png"  alt="Assembleia Geral" class="imgs"></a>
                </div>  
            </div>
        
            <div class="parceiros-box">
                <div class="icon-block">
                <a href="#"><img src="<?=Yii::$app->request->baseUrl?>/imgs/ifp.png" alt="Direccao" class="imgs"></a>
                </div>  
            </div>
      
            <div class="parceiros-box">
                <div class="icon-block">
                <a href="#"><img src="<?=Yii::$app->request->baseUrl?>/imgs/governo-de-cv.png"  alt="Assembleia Geral" class="imgs"></a>
                </div>  
            </div>

            <div class="parceiros-box">
                <div class="icon-block">
                <a href="#"><img src="<?=Yii::$app->request->baseUrl?>/imgs/parc.png"  alt="Assembleia Geral" class="imgs"></a>
                </div>  
            </div>
        
            <div class="parceiros-box">
                <div class="icon-block">
                <a href="#"><img src="<?=Yii::$app->request->baseUrl?>/imgs/LOGOTIPO-NOSi-01.png" alt="Conselho Fiscal" class="imgs"></a>
                </div>  
            </div>

        </div>
    </div>
                
</div>
</body>
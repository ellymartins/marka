<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;


/* caminho - Estado */



?>

    
<div class="container">
    <div class="wrap">

               
         <ol class="breadcrumb">
         <li class="breadcrumb-item">
         <a href="index.php">HOME</a>
         </li>
         <li class="breadcrumb-item active">DIRECÇÃO</li>
         </ol>
           


            <ul class="topnav">
                <li><a  href="<?=Url::toRoute(['site/assembleia'])?>">ASSEMBLEIA GERAL</a></li>
                <li><a class="active" href="<?=Url::toRoute(['site/direccao'])?>">DIRECÇÃO</a></li>
                <li><a href="<?=Url::toRoute(['site/conselho'])?>">CONSELHO FISCAL</a></li>
            </ul>

            <div class="row">
                <div class="col-md-12">


                        <h2><strong>DEFENIR A DIRECÇÃO</strong></h2>
                        </br>
                        <p  align="justify">Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div,
                             you remove the margin. this div element has. long (for example if it has over 50 links inside of it).If you remove the margin, the sidenav will overlay. Notice that this div element has a left margin. </p>
                        <p  align="justify">Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
                        <p  align="justify">Some text..</p>
                    
                </div>


            </div>

            <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/usuario.png"  class="imgs" style="width:60%">
                 </br>
                <div class="card-body">
                   
                    <h6 class="card-subtitle mb-2 text-muted">Presidente</h6>
                    <h5 class="card-text">Mário Luís M. Moreira</h5>
                    </br>
                </div>

                <div class="card-footer">
                    <a href="#">name@example.com</a>
                </div>
        
            </div>

        </div>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?=Yii::$app->request->baseUrl?>/imgs/usuario.png"  class="imgs" style="width:60%">
                     </br>
                    <div class="card-body">
                     
                        <h6 class="card-subtitle mb-2 text-muted">Vice - Presidente </h6>
                        <h5 class="card-text">Geordano Custódio</h5>
                        </br>
                    </div>

                    <div class="card-footer">
                        <a href="#">name@example.com</a>
                    </div>
            
                </div>
    
            </div>


         <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/usuario.png"  class="imgs" style="width:60%">
                </br>

                <div class="card-body">
                   
                    <h6 class="card-subtitle mb-2 text-muted">Secretário</h6>
                    <h5 class="card-text">Hadja Mafory Monteiro</h5>
                    </br>
                </div>

                <div class="card-footer">
                    <a href="#">name@example.com</a>
                </div>
        
            </div>

        </div>   
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/usuario.png"  class="imgs" style="width:60%">
                </br>

                <div class="card-body">
                   
                    <h6 class="card-subtitle mb-2 text-muted">Secretário Adjunto</h6>
                    <h5 class="card-text">Hadja Mafory Monteiro</h5>
                    </br>
                </div>

                <div class="card-footer">
                    <a href="#">name@example.com</a>
                </div>
        
            </div>

        </div> 

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/usuario.png"  class="imgs" style="width:60%">
                </br>

                <div class="card-body">
                   
                    <h6 class="card-subtitle mb-2 text-muted">Vogal</h6>
                    <h5 class="card-text">Eunice Livramento </h5>
                    </br>
                </div>

                <div class="card-footer">
                    <a href="#">name@example.com</a>
                </div>
        
            </div>

        </div> 

           <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?=Yii::$app->request->baseUrl?>/imgs/usuario.png"  class="imgs" style="width:60%">
                </br>

                <div class="card-body">
                   
                    <h6 class="card-subtitle mb-2 text-muted">Tesoureiro</h6>
                    <h5 class="card-text">Salomão Furtado</h5>
                    </br>
                </div>

                <div class="card-footer">
                    <a href="#">name@example.com</a>
                </div>
        
            </div>
            </br> </br> </br> 
        </div> 
                    
        </div>
    </div>
</div>
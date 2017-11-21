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
            <li class="breadcrumb-item active">ACTIVIDADES RECENTES</li>
            </ol>


            </br>
            
    <!-- actividade 1 -->

      <div class="row">
          <div class="col-lg-4">
            <a href="#">
            <img src="<?=Yii::$app->request->baseUrl?>/imgs/assoc.jpg" width="90%" class="imgs">
            </a>
          </div>

        <div class="col-lg-8">
          <p><strong>Inauguracao</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Laudantium veniam exercitationem expedita laborum at voluptate.
               Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet undeLaudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
               
               <p> <strong>12 Novembro 2017</strong></p>
            
               <p><a class="btn btn-primary"  href="<?=Url::toRoute(['site/vm_1'])?>" >Ver mais
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

            

              </p>
              </br>

              <HR  style="color: rgba(102, 101, 101, 0.9);background-color: rgba(102, 101, 101, 0.9);height: 1px; margin-top:0px;" />
        </div>
    
      </div>


</br>
</br>  

         <!-- actividade 2 -->

          <div class="row">
            <div class="col-lg-4">
              <a href="#">
              <img src="<?=Yii::$app->request->baseUrl?>/imgs/assoc.jpg" width="90%" class="imgs">
              </a>
            </div>

          <div class="col-lg-8">
            <p><strong>Formacao</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate.
            Laudantium veniam exercitationem expedita laborum at voluptate.
               Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
               <p> <strong>12 Novembro 2017</strong></p>
               <p><a class="btn btn-primary" href="#">Ver mais
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
              </p>

              <HR  style="color: rgba(102, 101, 101, 0.9);background-color: rgba(102, 101, 101, 0.9);height: 1px; margin-top:20px;" />
          
          </div>
     </div>

</br>
</br>  

      <!-- actividade 3 -->

        <div class="row">
          <div class="col-lg-4">
            <a href="#">
            <img src="<?=Yii::$app->request->baseUrl?>/imgs/assoc.jpg" width="90%" class="imgs">
            </a>
          </div>

          <div class="col-lg-8">
            <p><strong>Doacao</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate.
               Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.
               Laudantium veniam exercitationem expedita laborum at voluptate.
               Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde</p>
               <p> <strong>12 Novembro 2017</strong></p>
               <p><a class="btn btn-primary" href="#">Ver mais
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
              </p>

              <HR  style="color: rgba(102, 101, 101, 0.9);background-color: rgba(102, 101, 101, 0.9);height: 1px; margin-top:20px;" />
          
          </div>
        </div>
  
</br>   
</br>       


    <!-- Pagination -->

    <div class="col-md-3 col-md-offset-3" style="margin-left:500px;">

      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="<?=Url::toRoute(['site/actividades'])?>" >1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="<?=Url::toRoute(['site/act_2'])?>"> 2</a>
         
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    </br>
</br>
  </div>




    </div>
</div>



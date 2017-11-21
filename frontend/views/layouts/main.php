<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\css;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;



AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>

<div class="container">
    
    <?php $this->beginBody()?>


   
    <?php

    NavBar::begin([
        'brandLabel' => 'MARKA',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);



 
    $menuItems = [
        ['label' => 'INICIO', 'url' => ['/site/index']],
        ['label' => 'SOBRE NOS', 'url' => ['/site/about']],
        ['label' => 'CONTACTOS', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'REGISTAR', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'ENTRAR', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }

 
 
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    
    NavBar::end();
    ?>
 
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>



 <!-- ULTIMOS  -->

    <!-- Rodape/Newsletters  -->

 

   
    <div class="rodape"><img src="<?=Yii::$app->request->baseUrl?>/imgs/rodape.png" alt="Los Angeles" class="imgs">


        <div class="col-sm-5">
        
            <div class="info">
            <h1>CONTACTOS</h1>
            <h5>Cabo Verde, Cidade da Praia-Palmarejo</h5>
            <h1><strong>Tel:</strong> 264 13 02<br>
            <strong>Mvl:</strong> (+238) 578-20-42 </h1><br>
           
            <h5>Visite-nos: </h5>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>

          </div>
        </div>


            <div class="col-sm-4 pull-right" >
            
                 <h1>ENVIAR MENSAGEM</h1>
                    <div class="formulario">
                        <form action="#" method="post">  
                            <div class=form-content>
                                        <div class=form-group> <input type=text class="form-control input-underline input-lg" placeholder=Nome> </div>
                                        <div class=form-group> <input type=email class="form-control input-underline input-lg" placeholder=Email> </div>
                                    
                        
                                        <textarea class=form-msn rows="5" cols="44" type=text class="form-control input-underline input-lg" placeholder=Mensagem></textarea></div>            
                                        <button type=submit button type="button" class="btn btn-primary" border="transparent" width="10%">Enviar</button>
                            </div>
                        </form>
              
                </div>
            </div>
    </div>


 <!-- footer -->

    <footer class="footer">   
                    <p class="pull-left">&copy; MARKA | <?= date('Y') ?></p>
                    </div>
    </div>  
    </footer>
  
   
</div>

    <?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage() ?>

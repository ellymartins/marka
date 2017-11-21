<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please choose your new password:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>


<!-- Rodape/Newsletters  -->

<div class="rodape">

    <div class="row">
        <div class="col-sm-4">
          <div class="well">
          <h1>CONTACTOS</h1>
          <p>Cabo Verde, Cidade da Praia-Palmarejo</p><br>
          <h1>Tel: 264 13 02</h1>
          <h1>Mvl:(+238) 578-20-42 </h1>

          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
        


        </div>
    </div>

        <div class="col-sm-5 pull-right" >
            <div class="well">
            <h1>ENVIAR MENSAGEM</h1>
                    <div class="formulario">
                        <form action="#" method="post">  
                            <div class=form-content>
                                        <div class=form-group> <input type=text class="form-control input-underline input-lg" placeholder=Nome> </div>
                                        <div class=form-group> <input type=email class="form-control input-underline input-lg" placeholder=Email> </div>
                                    
                        
                                        <textarea class=form-msn rows="5" cols="44" type=text class="form-control input-underline input-lg" placeholder=Mensagem></textarea></div>            
                                        <button type=submit class="btn btn-white btn-outline btn-lg btn-rounded">Enviar</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>

</div>

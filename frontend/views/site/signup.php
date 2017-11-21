<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="container">

<div class="wrap">
    <div class="site-contact">

    <ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="index.php">HOME</a>
    </li>
    <li class="breadcrumb-item active">REGISTAR</li>
    </ol>
      
            </br>
    

        


        <div class="row">
            <div class="col-md-6 offset-md-3">
            <h5>Preencha todos os campos para entrar em contacto connosco. Obrigado!</h5></br>

                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Registar', ['class' => 'btn btn-primary', 'name' => 'Registar-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    </div>

</div>
</div>

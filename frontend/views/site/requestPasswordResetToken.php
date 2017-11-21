<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="wrap">

    <ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Entrar</li>
    </ol>

    <div class="site-request-password-reset">
        <h1><?= Html::encode($this->title) ?></h1>

      

        <div class="row">
            <div class="col-md-6 offset-md-3">
            <h5>Por favor, insere seu email para enviarmos o link de recuperacao da palavra-passe</h5></br>
            
                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>
</div>

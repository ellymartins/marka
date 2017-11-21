<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* PERCURSO - CAMINHO
$this->title = 'Entrar';
$this->params['breadcrumbs'][] = $this->title;*/

?>


<div class="container">

<div class="wrap">

    <ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="index.php">HOME</a>
    </li>
    <li class="breadcrumb-item active">ENTRAR</li>
    </ol>
    


    <div class="row">
        <div class="col-md-6 offset-md-3">
        <h5>Preencha todos os campos para entrar em contacto connosco. Obrigado!</h5></br>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    Esqueceu palavra-passe <?= Html::a('Recuperar', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>


</div>  
</div>

</div>

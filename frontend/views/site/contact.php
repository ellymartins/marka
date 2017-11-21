<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>

<div id="container">
    <div class="wrap">

    <ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="index.php">HOME</a>
    </li>
    <li class="breadcrumb-item active">CONTACTOS</li>
    </ol>
    
                <div class="row">
                    <div class="row text-center slideanim" style="color: rgba(102, 101, 101, 0.9);">
                        
                        <div id="business">
                        
                            <article class="col-xs-12 col-sm-3 cont" >
                            <img src="<?=Yii::$app->request->baseUrl?>/imgs/phone.png" style="width: 25%;"> </br> </br>  
                            <strong class="ng-binding">(+238) 260 37 20</strong>
                            </br></br>  
                            <HR width=100%>
                            </article>
                            

                            <article class="col-xs-12 col-sm-3 cont" >
                            <img src="<?=Yii::$app->request->baseUrl?>/imgs/mail.png" style="width: 25%;"></br></br>    
                            <strong class="ng-binding">marka.cv@gmail.com</strong> 
                            </br></br> 
                            <HR width=100%>
                            </article>
                
                            <article class="col-xs-12 col-sm-3 cont" >
                            <img src="<?=Yii::$app->request->baseUrl?>/imgs/facebook.png" style="width: 25%;"></br> </br>   
                            <strong class="ng-binding">markafacebook.com08678</strong>
                            </br></br>
                            <HR width=100%>  
                            </article>

                            <article class="col-xs-12 col-sm-3 cont" >
                            <img src="<?=Yii::$app->request->baseUrl?>/imgs/place.png" style="width: 25%;"></br> </br>   
                            <strong class="ng-binding">Praia - Palmarejo / Avenida</strong>  
                            </br></br>
                            <HR width=100%>
                            </article>

                            
                          
                        </div>
                        
                        
                    </div>
                    
                </div> 
</br>
    
</br>

            <div class="row">
                <div class="col-sm-6 pull-right" >
                
                    <h2><strong>GEOCALIZACAO</strong></h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3855.4557550192017!2d-23.524077741458044!3d14.911680754616727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2scv!4v1510234658871"
                     width="600" height="490" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
  

                <div class="col-lg-5" >
                    <h2><strong>FORMULARIO DE CONTACTO</strong></h2>
                

                        <h5>
                        Preencha todos os campos para entrar em contacto connosco. Obrigado!
                        </h5>
                        </br>
                    
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'subject') ?>

                            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-9">{input}</div></div>',
                            ]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                            </br>
                        </br>
                        <?php ActiveForm::end(); ?>
                        
                </div>

            </div>

       
    </div>
</div>

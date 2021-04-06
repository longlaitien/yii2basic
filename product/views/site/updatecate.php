<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
       <h2>Update cate</h2>

    </div>

    <div class="body-content" style="margin-bottom: 120px;margin-left: 420px;">
        <?php $form=ActiveForm::begin() ?>
        <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
              <?=$form->field($category,'cate_id');?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
              <?=$form->field($category,'cate_name');?>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
              <div class="col-lg-3">
                <?=Html::submitButton('Update',['class'=>'btn btn-primary']);?>
              </div>
              <div class="col-lg-2">
                <button style="margin-left: 10px;" onclick="history.go(-1)" class="btn btn-primary">back</button>
              </div>
            </div>
          </div>
        </div>
        <div>
        <?php ActiveForm::end() ?>
    </div>
</div>

<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
       <h2>Create product</h2>

    </div>

    <div class="body-content" style="margin-bottom: 120px;">
        <?php $form=ActiveForm::begin() ?>
        <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
              <?=$form->field($product,'product_id');?>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
              <?= $form->field($product, 'cate_id')->dropDownList(
            ArrayHelper::map(Category::find()->asArray()->all(), 'cate_id', 'cate_name')
            )
?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
              <?=$form->field($product,'product_name');?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
              <?=$form->field($product,'product_price');?>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
              <div class="col-lg-3">
                <?=Html::submitButton('Create',['class'=>'btn btn-primary']);?>
              </div>
              <div class="col-lg-2">
                <button onclick="history.go(-1)" class="btn btn-primary">back</button>
              </div>
            </div>
          </div>
        </div>
        <div>
        <?php ActiveForm::end() ?>
    </div>
</div>

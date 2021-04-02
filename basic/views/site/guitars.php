<?php

use yiihelpersHtml;
use yiiwidgetsActiveForm;

?>
<div class="guitars">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'brand') ?>
        <?= $form->field($model, 'model') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- guitars -->
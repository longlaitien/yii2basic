<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application111';
?>

	<h2 style="margin-top: 120px; margin-left: 420px; margin-bottom: 100px;">Product: <?php echo $product->product_name; ?></h2>
<center>
<div class="col-lg-4" style="margin-left: 300px;">
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $product->product_id; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $product->cate_id; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $product->product_name; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $product->product_price; ?> <span>&#36;</span>
  </li>
</ul>
<button onclick="history.go(-1)" class="btn btn-primary">back</button>
</div>
</center>
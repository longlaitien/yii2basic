<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application111';
?>

	<h2 style="margin-top: 120px; margin-left: 420px; margin-bottom: 100px;">Category <?php echo $category->cate_name; ?></h2>
<center>
<div class="col-lg-4" style="margin-left: 300px;">
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $category->cate_id; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $category->cate_name; ?>
  </li>
</ul>
<button onclick="history.go(-1)" class="btn btn-primary">back</button>
</div>
</center>
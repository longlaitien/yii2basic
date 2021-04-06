<?php
use yii\helpers\html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

                    <div class="jumbotron">
       <h2>List product</h2>
       <span><?php if(yii::$app->session->hasFlash('message')): ?>
                     
       <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Notice!</h4>
        <p class="mb-0"><?php echo yii::$app->session->getFlash('message'); ?></p>
      </div>
                    <?php endif; ?>
                              
        </span>

    </div>

    <div class="body-content">

        <div class="row" style="margin-bottom: 10px; margin-left: 170px;">
          <span><?=Html::a('Create',['site/createproduct'],['class'=> 'btn btn-primary'])?></span>
        </div>
        <center>
        <table class="table table-hover" style="text-align: center; width: 800px; border: 1px solid #c1c1c1;">
  <thead>
    <tr>
      <th scope="col" style="text-align:  center;">Id</th>
      <th scope="col" style="text-align:  center;">Cate</th>
      <th scope="col" style="text-align:  center;">Name</th>
      <th scope="col" style="text-align:  center;">Price</th>
      <th scope="col"  style="text-align:  center;">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($product)>0): ?>
  <?php foreach($product as $pro): ?>
    <tr class="table-active">
      <td><?php echo $pro->product_id;?></td>
      <td><?php echo $pro->cate_id;?></td>
      <td><?php echo $pro->product_name;?></td>
      <td><?php echo $pro->product_price;?> <span>&#36;</span></td>
      <td>
        <span><?=html::a('View',['viewproduct','productid'=> $pro->product_id],['class'=> 'label label-primary'])?></span>
        <span><?=html::a('Update',['updateproduct','productid'=> $pro->product_id],['class'=> 'label label-info'])?></span>
        <span><?=html::a('Delete',['deleteproduct','productid'=> $pro->product_id],['class'=> 'label label-danger'])?></span>
      </td>
    </tr>
  <?php endforeach; ?>
  <?php else: ?>
    <tr>
      <td>No record</td>
    </tr>
  <?php endif; ?>

  </tbody>
</table>
</center>
    </div>
</div>

<?php 
	namespace  app\models;

	use Yii;
	use yii\base\Model;
	use yii\db\ActiveRecord;
	class Product extends ActiveRecord{
		private $product_id;
		private $cate_id;
		private $product_name;
		private $product_price;

		public function rules(){
			return [
				[['product_id', 'cate_id', 'product_name', 'product_price'],'required']
			];
		}
	}
 ?>
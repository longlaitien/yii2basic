<?php 

	namespace app\models;
	
	use Yii;
	use yii\base\Model;
	use yii\db\ActiveRecord;

	Class Category extends ActiveRecord{
		private $cate_id;
		private $cate_name;

		public function rules(){
			return [
				[['cate_id','cate_name'],'required']
			];
		}
	}

 ?>
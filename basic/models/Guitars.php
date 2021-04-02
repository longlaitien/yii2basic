<?php 
	namespace appmodels;
	use Yii;
	class Guitas extends yiidbActiveRecord{
		public static funcion tableName(){
			return 'guitars';
		}

		public function rules(){
			return [
				[['brand','model'], 'string', 'max' => 64]
			];
		}

		public function attributeLabels(){
			return [
				'id' => 'ID',
				'brand' => 'Brand',
				'model' => 'Model',
			];
		}

	}
 ?>
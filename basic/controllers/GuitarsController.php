<?php

namespace appcontrollers;

use Yii;
use yiiwebController;
use appmodelsGuitars;

class GuitarsController extends Controller
{

	public function actionGuitars()
	{
		$model = new Guitars();
	
		if ($model->load(Yii::$app->request->post())) {
			
			if ($model->validate()) {
				$model->save();		
				return;
			}
		}
		return $this->render('guitars', [
			'model' => $model,
		]);
	}
}
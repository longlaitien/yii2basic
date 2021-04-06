<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Category;
use app\models\Product;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionListcate()
    {
        $lcate= Category::find()->all();
        return $this->render('listcate',['category'=>$lcate]);
    }

    public function actionCreatecate(){
        $category= new Category();
        $formData=Yii::$app->request->post();
        if($category->load($formData)){
            if($category->save()){
                Yii::$app->getSession()->setFlash('message','InsertCateSuccess');
                return $this->redirect(['listcate']);
            }
            else{
                Yii::$app->getSession()->setFlash('message','Insert faild');
                return $this->redirect(['listcate']);
            }
        }
        return $this->render('createcate',['category'=>$category]);
    }
    public function actionViewcate($cateid){
        $category=Category::findOne($cateid);
        return $this->render('viewcate',['category'=>$category]);
    }


    public function actionUpdatecate($cateid){
        $category=Category::findOne($cateid);
        if($category->load(Yii::$app->request->post()) && $category->save()){
            Yii::$app->getSession()->setFlash('message','Update Successfully');
            $lcate= Category::find()->all();
            return $this->render('listcate',['category'=>$lcate]);
        }
        else{
            Yii::$app->getSession()->setFlash('message','Update Faild');
            return $this->render('updatecate',['category'=>$category]);
        }
    }

    public function actionDeletecate($cateid){
        $category1=Category::findOne($cateid)->delete();
        if($category1){
                Yii::$app->getSession()->setFlash('message','Delete Successfully!');
                $lcate= Category::find()->all();
                return $this->redirect(['listcate']);
        }
    }

    public function actionListproduct(){
        $products= Product::find()->all();
        return $this->render('listproduct',['product'=>$products]);
    }

    public function actionCreateproduct(){
        $product=new Product();
        $formData= Yii::$app->request->post();
        if($product->load($formData)){
            if($product->save()){
                Yii::$app->getSession()->setFlash('message', 'Create product Success');
                $this->redirect(['listproduct']);
            }
            else{
                Yii::$app->getSession()->setFlash('message','Create faild');
                $this->redirect(['listproduct']);
            }
        }
        return $this->render('createproduct',['product'=>$product]);
    }

    public function actionViewproduct($productid){
        $pro=Product::findOne($productid);
        return $this->render('viewproduct',['product'=>$pro]);
    }

    public function actionDeleteproduct($productid){
        $pro= Product::findOne($productid)->delete();
        if($pro){
            Yii::$app->getSession()->setFlash('message','Delete success');
            $this->redirect(['listproduct']);
        }
        else{
            Yii::$app->getSession()->setFlash('message','Delete faild');
            $this->redirect(['listproduct']);
        }
    }

    public function actionUpdateproduct($productid){
        $pro= Product::findOne($productid);
        if($pro->load(Yii::$app->request->post()) && $pro->save() ){
            Yii::$app->getSession()->setFlash('message','Update successfully');
            $this->redirect(['listproduct']);
        }
        else{
            Yii::$app->getSession()->setFlash('message','Update successfully');
            return $this->render('updateproduct',['product'=> $pro]);
        }

    }


    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }
public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}

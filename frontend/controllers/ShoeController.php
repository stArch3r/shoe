<?php
use frontend\models\Products;
namespace frontend\controllers;

class ShoeController extends \yii\web\Controller
{
    

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionMen()
    {
        return $this->render('men');
    
    }
    public function actionKids()
    {
        return $this->render('kids');
    }
     
    public function actionWomens()
    {
        return $this->render('womens');
    
    }
     public function actionSale()
     {
         return $this->render('sale');
     }
     public function actionCart(){
        $session = Yii::$app->session;
        $cart = array();
        $cart[] = $session['cart'];
        $check_pid_post = Yii::$app->request->post('pid');
          if(isset($check_pid_post)){
              $cart[]= $check_pid_post; //product to cart
              $session['cart'] = $cart;
          }
     
        $carts = Products::find()->where(['id'=>$session['cart']])->all();
        return $this->render('cart',['carts'=>$carts]);
    }
    
    public function actionCheckout()
    {
        return $this->render('checkout');
    }
    public function actionHome()
    {
        return $this->render('home');
    }
    

}

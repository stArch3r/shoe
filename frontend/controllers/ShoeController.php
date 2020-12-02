<?php

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
    public function actionCart()
    {
        return $this->render('cart');
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

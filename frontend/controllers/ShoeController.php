<?php

namespace frontend\controllers;

class ShoeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWomen()
    {
        return $this->render('women');
    }

     public function actionCart()
    {
        return $this->render('cart');
    }

    public function actionMen()
    {
        return $this->render('men');
    }
    public function actionCheckout()
    {
        return $this->render('checkout');
    }
    public function actionKids()
    {
        return $this->render('kids');
    }
    



    

}

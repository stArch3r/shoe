<?php


namespace frontend\controllers;
use Yii;
use frontend\models\Product;
use frontend\models\Cartitems;

class ShoeController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    
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

    public function actionMore()
    {
        return $this->render('more');
    }
     public function actionCart()
     {
         return $this->render('cart');
     }


    //  public function actionMel()
    //  {
    //      $model = new \frontend\models\Cartitems();
     
    //      if ($model->load(Yii::$app->request->post())) {
    //          if ($model->validate()) {
    //              // form inputs are valid, do something here
    //              return;
    //          }
    //      }
     
    //      return $this->render('mel', [
    //          'model' => $model,
    //      ]);
    //  }

    //  public function actionCart(){
    //     $session = Yii::$app->session;
    //     $cart = array();
    //     $cart[] = $session['cart'];
    //     $check_productId_post = Yii::$app->request->post('productId');
    //       if(isset($check_productId_post)){
    //           $cart[]= $check_pid_post; //product to cart
    //           $session['cart'] = $cart;
    //       }
     
    //     $carts = Product::find()->where(['productId'=>$session['cart']])->all();
    //     return $this->render('cart',['carts'=>$carts]);
    // }

//     public function actionDeposit()
// {
//     $model = new \frontend\models\deposit();

//     if ($model->load(Yii::$app->request->post())) {
//         if ($model->validate()) {
//             // form inputs are valid, do something here
//             return;
//         }
//     }

//     return $this->renderAjax('deposit', [
//         'model' => $model,
//     ]);
// }
    
    public function actionCheckout()
    {
        return $this->render('checkout');

    }
   



    public function actionHome()
    {
        return $this->render('home');
    }
    public function actionPopup($productId)
    {
        $model = new \frontend\models\Cartitems();

        if ($model->load(Yii::$app->request->post())) {
            
            $model->save();
        return $this->redirect(['shoe/cart']);
        }
    
        return $this->renderAjax('popup', [
            'model' => $model,
            'productId'=> $productId,
            
        ]);
       
    }
    
public function actionKen($productId)
{
    $model = new \frontend\models\Cartitems();

    if ($model->load(Yii::$app->request->post())) {
        
        $model->save();
    return $this->redirect(['shoe/cart']);
    }

    return $this->render('ken', [
        'model' => $model,
        'productId'=> $productId,
        
    ]);
}
public function actionMpesa()
{
    return $this->renderAjax('mpesa');
}
public function actionEnd()
{
    return $this->render('end');
}

}

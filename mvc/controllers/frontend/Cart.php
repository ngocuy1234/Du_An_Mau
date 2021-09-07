<?php 

class Cart extends Controller{

    function index(){
        $Cart = $_SESSION['cart'];
        // dd($Cart);

        $this->viewsCustomer('base_face' ,$data=[
            'from' => 'addCart',
            'dataCart' => $Cart,
        ]);
    }

    function deleteCart($id){
        unset($_SESSION['cart'][$id]);
        header('Location: http://localhost/MVC/Cart/');
    }

    function addCart($id){
        if(!isset($_SESSION['customer'])){
            header("Location: http://localhost/MVC/registerCustomer/");
            die();
        }

        if($_SERVER['REQUEST_METHOD'] ==  "POST"){
            extract($_POST);

            $getModel = $this->modelAdmin("modelProduct");
            $queryProduct = $getModel->getProductWhereId($id);
            $dataRowProduct  = $this->getRowInData($queryProduct);

            // dd($dataRowProduct);
            if(!isset($_SESSION['cart'])){
                $Cart = [];
                $Cart[$id] = [
                     'product_id' => $id,
                    'product_img' => $dataRowProduct[0]['product_img'],
                    'product_name' => $dataRowProduct[0]['product_name'],
                    'product_size' => $product_size,
                    'product_price' => $dataRowProduct[0]['product_price'],
                    'product_number' => $product_number,
                    'sum_money' => $dataRowProduct[0]['product_price'] * $product_number
                ];
            }else{
                $Cart= $_SESSION['cart'];
                if(array_key_exists($id , $Cart)){
                    $Cart[$id] = [
                        'product_id' => $id,
                        'product_img' => $dataRowProduct[0]['product_img'],
                        'product_name' => $dataRowProduct[0]['product_name'],
                        'product_size' => $product_size,
                        'product_price' => $dataRowProduct[0]['product_price'],
                        'product_number' => $product_number + $Cart[$id]['product_number'],
                         'sum_money' => $product_number * $dataRowProduct[0]['product_price'],
                    ];
                }else{
                    $Cart[$id] = [
                        'product_id' => $id,
                        'product_img' => $dataRowProduct[0]['product_img'],
                        'product_name' => $dataRowProduct[0]['product_name'],
                        'product_size' => $product_size,
                        'product_price' => $dataRowProduct[0]['product_price'],
                        'product_number' => $product_number,
                        'sum_money' => $dataRowProduct[0]['product_price'] * $product_number
                    ];
                }
            }
            $_SESSION['cart'] = $Cart;
            // dd($_SESSION['cart']);
            // dd($Cart);
            // session_destroy();
            header('Location: http://localhost/MVC/Cart/');
        }
       
    }
}
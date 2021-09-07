<?php

class adminProduct extends Controller{

    function index(){
        $getModel = $this->modelAdmin("modelProduct");
        $getModelCate = $this->modelAdmin("modelCateProduct");
        $getProduct = $getModel->getProduct();
        $getCategory = $getModelCate->getCate();

        $dataProduct= $this->getRowInData($getProduct);
        $dataCategory = $this->getRowInData($getCategory);

        $this->viewsAdmin("admin" , $data = [
            'from' => 'adminProduct',
            'data_category' => $dataCategory,
            'data_product' => $dataProduct,
        ]);
    }

    function addProduct(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            extract($_POST);

            if( empty($product_name) || empty($product_price) || empty($product_quantity) || empty($product_unit)){
                $_SESSION['error'] = "Bạn đang bỏ trống dữ liệu";
                header('Location: http://localhost/MVC/admin/adminProduct/');
                // die();
            }else{
                // dd($_FILES);
                if(isset($_FILES['product_img'])){
                    $file = $_FILES['product_img'];
                    $file_name = $file['name'];
                    move_uploaded_file($file['tmp_name'],'./public/assets/imgProduct/'.$file_name);
                }

                $data=[
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_quantity' => $product_quantity,
                    'product_img' => $file_name,
                    'product_unit' => $product_unit,
                    'product_size' => $product_size,
                    'cate_name' => $cate_name,
                ];

                $getModel = $this->modelAdmin("modelProduct");
                $getModel->InsertProduct($data);
                header('Location: http://localhost/MVC/admin/adminProduct/');
            }
        }
    }

    function deleteProduct($id){
        // echo $id;
        $getModel = $this->modelAdmin("modelProduct");
        $getModel->deleteProduct($id);
        header('Location: http://localhost/MVC/admin/adminProduct/');
    }
}
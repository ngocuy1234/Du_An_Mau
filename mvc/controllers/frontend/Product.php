<?php

class Product extends Controller{

    // function index(){

    //     $getModel = $this->modelAdmin("modelProduct");
    //     $queryProduct = $getModel->getProductLimit(1);
    //     $queryProductNumber =  $getModel->CountNumberItem();

    //     $dataProduct = $this->getRowInData($queryProduct);
    //     $productNumber = $this->getRowInData($queryProductNumber);

    //     if($productNumber != null && count($productNumber) > 0){
    //         $number = $productNumber[0]['number'];
    //     }

    //     $pages =  ceil($number/12);
    //     // dd($pages);
        
    //     $this->viewsCustomer("base_face" , $data = [
    //         'from' => 'product',
    //         'pages' => $pages,
    //         'dataProduct' => $dataProduct,
    //     ]);
    // }

    function pages($i){
        $index = ($i - 1) * 8;

        $getModel = $this->modelAdmin("modelProduct");
        $getCatePrModel = $this->modelAdmin("modelCateProduct");

        $queryProduct = $getModel->getProductLimit($index);
        $queryCateProduct = $getCatePrModel->getCate();
        $queryProductNumber =  $getModel->CountNumberItem();

        $dataProduct = $this->getRowInData($queryProduct);
        $productNumber = $this->getRowInData($queryProductNumber);
        $dataCateProduct = $this->getRowInData($queryCateProduct);

        if($productNumber != null && count($productNumber) > 0){
            $number = $productNumber[0]['number'];
        }

        $pages =  ceil($number/8);
        // dd($pages);
        
        $this->viewsCustomer("base_face_level2" , $data = [
            'from' => 'product',
            'pages' => $pages,
            'dataProduct' => $dataProduct,
            'dataCate' => $dataCateProduct,
        ]);
    }

    function productDetail($id){
        // echo $id;
        // die();

        $dataCustomer =   $_SESSION['customer'];
        $getModel = $this->modelAdmin("modelProduct");
        $getModelCmtt = $this->modelAdmin("modelCmtt");

        $queryProduct = $getModel-> getProductWhereId($id);
        $queryCmtt = $getModelCmtt->cmttDetail($id);

        $dataProductDetail = $this->getRowInData($queryProduct);
        $dataCmtt = $this->getRowInData($queryCmtt);
        // dd($dataProductDetail);

        $this->viewsCustomer("base_face_level2" , $data=[
            'from' => 'productDetail',
            'dataCustomer' => $dataCustomer,
            'dataProductDetail' => $dataProductDetail,
            'dataCmtt' => $dataCmtt,
        ]);
    }
    

    function productComment($id = 0){
        $dataCustomer =   $_SESSION['customer'];
        $customer_id =  $dataCustomer[0]['customer_id'];
    //  echo $cust   omer_id;
    //     die();

      $product_id = $_POST['product_id'];
      if($_SERVER['REQUEST_METHOD'] == "POST"){
          extract($_POST);

        if(!empty($content_cmtt)){
          $content_cmtt =  $_POST['content_cmtt'];
          if($id == 0){
              $parent_cmtt = 0;
          }else{
              $parent_cmtt = $id;
          }

          $data =[
              'customer_id' => $customer_id,
              'product_id' => $product_id,
              'content_cmtt' => $content_cmtt,
              'parent_id' => $parent_cmtt,
          ];

          $getModel = $this->modelAdmin("modelCmtt");
          $getModel->InsertCmtt($data);
          header("Location: http://localhost/MVC/Product/productDetail/$product_id");
      }else{
          $_SESSION['error'] = "Bình luận của bạn đang trống !!!";
          header("Location: http://localhost/MVC/Product/productDetail/$product_id");
          die();
      }
      }
    }

    function deleteComment($id , $product_id , $customer_id){
        $getModel = $this->modelAdmin("modelCmtt");
        $queryCmtt =  $getModel->getCmtt($id);

        $dataCmtt = $this->getRowInData($queryCmtt);
        // $customer_cmtt = $dataCmtt[0]['customer_id'];
    
        if($customer_id == $dataCmtt[0]['customer_id']){
            $getModel->deleteComment($id);
            header("Location: http://localhost/MVC/Product/productDetail/$product_id");
        }else{
            $_SESSION['error_two'] = "Bạn không có quyền xóa bình luận này !!!";
            header("Location: http://localhost/MVC/Product/productDetail/$product_id");
            die();
        }
    }

    function cateProduct($slug){
        $getModelCate = $this->modelAdmin("modelCateProduct");
        $getProduct = $this->modelAdmin("modelProduct");

        $queryCatePr = $getModelCate->getCateWhereSlug($slug);
        $queryPr = $getProduct->getProductWhereSlug($slug);
        $queryCate =  $getModelCate->getCate();

        $dataCateSlu = $this->getRowInData($queryCatePr);

        $cate_id = $dataCateSlu[0]['cate_id'];

        $queryPr = $getProduct->getProductWhereSlug($cate_id);
        $dataProduct = $this->getRowInData($queryPr);
        $dataCate = $this->getRowInData($queryCate);

        // dd($dataProduct);
        $this->viewsCustomer("base_face_level2" , $data =[
            'from' => 'productCate',
            'dataProduct' => $dataProduct,
            'dataCate' => $dataCate,
        ]);
    }
}
<?php

class adminCateProduct extends Controller{

    function index(){
        $getModel = $this->modelAdmin("modelCateProduct");
        $queryCatePr =  $getModel->getCate();

        $dataCateProduct = $this->getRowInData($queryCatePr);

        $this->viewsAdmin('admin' , $data=[
            'from' => 'adminCateProduct',
            'dataCate' => $dataCateProduct,
        ]) ;
    }
}
<?php

class adminCustomer extends Controller{
    
    function index(){
        $getModel =  $this->modelCustomer("modelCustomer");
        $queryCustomer = $getModel->getCustomer();

        $dataCustomer = $this->getRowInData($queryCustomer);
        // dd($dataCustomer);
        $this->viewsAdmin('admin' , $data=[
            'from' => 'adminCustomer',
            'dataCustomer' => $dataCustomer,
        ]);
    }

    function deleteCustomer($id){
        $getModel =  $this->modelCustomer("modelCustomer");
        $getModel->deleteCustomer($id);
        header('Location: http://localhost/MVC/admin/adminCustomer/');
    }
}
<?php 

class Contact extends Controller{
    
    function index(){
        // $getModel = $this->modelAdmin("pageModel");
        // $getPage = $getModel->SinhVien();

        // while($row = mysqli_fetch_array($getPage)){
        //     $data[] = $row;
        // }
        
        // $dataPage = end($data);
        // // dd($dataPage);

        $this->viewsCustomer("base_face" , $data=[
            'from' => 'contact',
        ]);
    }
}
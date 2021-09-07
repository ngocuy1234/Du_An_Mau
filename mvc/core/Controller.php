
<?php

class Controller{

    public function getRowInData($getData){
        $dataResult = [];
        while($row = mysqli_fetch_array($getData,1)){
            $dataResult[] =  $row;
        }
        return $dataResult;
    }

    public function modelCustomer($model){
        require_once "./mvc/models/customer/".$model.".php";
        return new $model;
    }
    
    public function modelAdmin($model){
        require_once "./mvc/models/admin/".$model.".php";
        return new $model;
    }

    
    // Chuyển dữ liệu đẩy đến các trang wed dành cho khách hàng
    public function viewsCustomer($views , $data = []){
        require_once "./mvc/views/viewCustomer/".$views.".php";
    }


    // Chuyển dữ liệu đẩy đến các trang wed dành cho admin
    public function viewsAdmin($views , $data = []){
        require_once "./mvc/views/viewAdmin/".$views.".php";
    }

    
}
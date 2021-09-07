<?php

class loginAdmin extends Controller{

    function index(){
        $this->viewsCustomer("base_face" , $data = [
            'from' => 'loginAdmin',
            'name_product' => 'Áo dài',
        ]);
        // var_dump($_GET['name']);
    }

    function checkStaff(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            extract($_POST);

            // dd($_POST);

            if(!empty($staff_email) || !empty($staff_password)){

                $getModel = $this->modelAdmin("modelStaff");
                $getStaff = $getModel->getStaffWhereEmail($staff_email);

                $dataStaff = $this->getRowInData($getStaff);
                // dd($dataStaff);
                if(password_verify($staff_password , $dataStaff[0]['staff_password'])){

                    $_SESSION['staff_infor'] = [
                        'staff_name' => $dataStaff[0]['staff_name'],
                        'staff_img' =>  $dataStaff[0]['staff_img'],
                        'staff_quyen' => $dataStaff[0]['staff_quyen']
                    ];

                    header('Location: http://localhost/MVC/admin/adminProduct/');
                }else{
                    $_SESSION['error'] = "Tài khoản của bạn không tồn tại !!!";
                    header('Location: http://localhost/MVC/loginAdmin/');
                    die();
                }
            }else{
                $_SESSION['error'] = "Không được bỏ trống dữ liệu !!!";
                header('Location: http://localhost/MVC/loginAdmin/');
                die();
            }
        }
    }
}
<?php

class editStaffPassword extends Controller{
    
    function index(){

        $this->viewsAdmin("admin" , $data=[
            'from' => 'editStaffPassword',
        ]);
    }

    function editPassword(){
           
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            extract($_POST);

            if(!empty($staff_email) || !empty($staff_password_old) || !empty($staff_password_new) ){

                $password_new = password_hash($staff_password_new , PASSWORD_DEFAULT);

                $getModel = $this->modelAdmin("modelStaff");
                $getStaff = $getModel->getStaffWhereEmail($staff_email);

                $dataStaff = $this->getRowInData($getStaff);
                if(password_verify($staff_password_old , $dataStaff[0]['staff_password'])){
                    $getModel->UpdatePassStaff($password_new);
                    $_SESSION['notifi'] = [
                        'message' => "Mật khẩu của bạn đẫ được cập nhật !!!",
                        'number' => 1,
                    ];
                    header('Location: http://localhost/MVC/admin/editStaffPassword/');
                    die();
                }else{
                    $_SESSION['notifi'] = [
                        'message' => "Tài khoản của bạn không tồn tại !!!",
                        'number' => 2,
                    ];
                    header('Location: http://localhost/MVC/admin/editStaffPassword/');
                    die();
                }
            }else{
                $_SESSION['notifi'] = [
                    'message' => "Không được bỏ trống dữ liệu !!!",
                    'number' => 2,
                ];
                header('Location: http://localhost/MVC/admin/editStaffPassword/');
                die();
            }
        }
    }
}
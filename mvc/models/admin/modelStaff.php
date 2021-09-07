<?php 

class modelStaff extends DB{

    public function getStaff(){
        $getStaff = "SELECT * FROM `data_staff`";
        return mysqli_query($this->con , $getStaff);
    }

    public function getStaffWhereEmail($email){
        $getStaff = "SELECT * FROM `data_staff` WHERE `staff_email` ='$email'";
        return mysqli_query($this->con , $getStaff);
    }

    public function UpdatePassStaff($password_new){
        $getStaff = "UPDATE `data_staff` SET `staff_password` = '$password_new'";
        return mysqli_query($this->con , $getStaff);
    }


    public function UpdateStaffWhereEmail($password){
        $getStaff = "UPDATE `data_staff` SET `staff_id`='[value-1]' WHERE `staff_password`";
        return mysqli_query($this->con , $getStaff);
    }

    public function InsertStaff($data){
        // dd($data);
        $staff_name = $data['staff_name'];
        $staff_img = $data['staff_img'];
        $staff_email = $data['staff_email'];
        $staff_password = $data['staff_password'];
        $staff_gender = $data['staff_gender'];
        $staff_quyen = $data['staff_quyen'];

        $queryStaff = "INSERT INTO `data_staff`(`staff_name`, `staff_img`, `staff_email`, `staff_password`, `staff_gender`, `staff_quyen`) VALUES ('$staff_name','$staff_img','$staff_email','$staff_password','$staff_gender','$staff_quyen')";
        return mysqli_query($this->con , $queryStaff);
    }

    public function deleteStaff($id){
        $deleteStaff = "DELETE FROM `data_staff` WHERE `staff_id` = '$id'";
        return mysqli_query($this->con , $deleteStaff);
    }
}
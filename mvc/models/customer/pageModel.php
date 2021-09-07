<?php

class pageModel extends DB{

    public function SinhVien(){
        $qr = "SELECT * FROM `list_page` INNER JOIN `cate_page` ON list_page.cate_id = cate_page.cate_id ";
        return mysqli_query($this->con, $qr);
    }

}
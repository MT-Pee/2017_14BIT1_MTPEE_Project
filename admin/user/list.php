<?php 
//start session....again 
session_start();

//kiem tra neu chua dang nhap thi quay ve trang dang nhap
if (!isset($_SESSION ['user'])){
    header("location:login.php");
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';


//lay danh sach thanh vien
$user_list = get_user_list();

require '../../views/admin/list.tpl.php';

?>
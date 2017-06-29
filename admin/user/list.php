<?php 
//start session....again 
session_start();

//kiem tra neu chua dang nhap thi quay ve trang dang nhap
if (!isset($_SESSION ['user'])){
    header("location:login.php");
}

require 'C:/wamp64/www/Website/configs/config.php';
require 'C:/wamp64/www/Website/libraries/connect.php';
require 'C:/wamp64/www/Website/models/user.php';


//lay danh sach thanh vien
$user_list = get_user_list();

require 'C:/wamp64/www/Website/views/admin/list.tpl.php';

?>
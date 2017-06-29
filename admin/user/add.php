<?php 

//start session 
session_start(); 

//kiem tra da dang nhap chua
if (!isset($_SESSION['user'])){
    
    header("location:login.php");
}

//require 
require 'C:/wamp64/www/Website/configs/config.php';
require 'C:/wamp64/www/Website/libraries/connect.php';
require 'C:/wamp64/www/Website/models/user.php';

if($_POST) {
$data = array ( 
'username' => $_POST['username'],
'password' => md5($_POST['password']),
'name'     => $_POST['name'],
'status'   => $_POST['status'] ?1:0,
'email'    => $_POST['email'],
'phone'    => $_POST['phone']
);
 
     
//add
if(add_user($data)){

$SESSION['success'] = true;
    
header("location:add.php");
    
}
}

require 'C:/wamp64/www/Website/views/admin/add.tpl.php';
?>
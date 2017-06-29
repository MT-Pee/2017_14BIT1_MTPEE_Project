<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';

if($_POST){
$data = array (
'name' => $_POST['name'],
'status' => isset($_POST['status']) ?1:0,
);


if(add_category($data))
{
$_SESSION['success'] = true; 
header('location:add.php');
}
}
require '../../views/admin/category/add.tpl.php';
?>
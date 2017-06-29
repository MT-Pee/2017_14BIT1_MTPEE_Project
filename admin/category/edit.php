<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';
$category_id = $_GET['id'];
if($_POST){
$data = array (
'name' => $_POST['name'],
'status' => isset($_POST['status']) ?1:0,
);


if(edit_category($data,$category_id))
{
$_SESSION['success'] = true; 
header('location:edit.php?category_id='.$category_id);
}
}
$category = get_category_by_id($category_id);

require '../../views/admin/category/edit.tpl.php';
?>
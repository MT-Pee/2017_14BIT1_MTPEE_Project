<?php 
function get_category_list()
{
require 'C:/wamp64/www/Website/libraries/connect.php';
$sql = "SELECT * FROM category ORDER BY id DESC";
return mysqli_query($conn,$sql);
}

function add_category($data)
{
require 'C:/wamp64/www/Website/libraries/connect.php';
$sql = "INSERT INTO category(name,status) VALUES ('{$data['name']}', '{$data['status']}')";
return mysqli_query($conn,$sql);
}

function get_category_by_id($category_id){
require 'C:/wamp64/www/Website/libraries/connect.php'; 
$sql = "SELECT * FROM category where id = '$category_id'";
 $query= mysqli_query($conn,$sql);
    
    return mysqli_fetch_assoc($query);
    
}


function edit_category($data,$category_id){
$sql = "UPDATE category SET name= '{$data['name']}', status = '{$data['status']}' WHERE id=$category_id";
return mysqli_query($sql);
}

?>
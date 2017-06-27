<?php 
function get_user_by_username($username){ 
require 'C:/wamp64/www/Website/libraries/connect.php';
//sql
$sql = "SELECT * FROM user WHERE username = '$username' AND status = 1";


//query

$query = mysqli_query($conn,$sql);

    return mysqli_fetch_assoc($query);
}
?> 
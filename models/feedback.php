<?php 
function get_feedback_list()
{
require '/../libraries/connect.php';
$sql = "SELECT * FROM feedback ORDER BY feedback_id DESC";
return mysqli_query($conn,$sql);
}

function delete_feedback($feedback_id)
{
require '/../libraries/connect.php';
$sql = "DELETE FROM feedback WHERE feedback_id='$feedback_id'";
$query= mysqli_query($conn,$sql);
return mysqli_fetch_assoc($query);    
}
?>
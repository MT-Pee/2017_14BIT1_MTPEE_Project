
<?php
include("../../libraries/connect.php");
$result = mysqli_query($conn, "SELECT * FROM product LIMIT $start, $limit");
while($row = mysqli_fetch_array($result)){?>
  <div class="main">
     <div class="col-md-3 shop_box"><a href="product-detail.php?id=<?php echo $row["id"]?>">
       <img src="<?php echo $row["image"]?>" class="img-responsive" alt=""/>
       <span class="sale-box">
         <span class="sale-label"><?php if($row["status"] == 1) echo "New"; else echo""?></span>
       </span>
       <div class="shop_desc">
         <h3><a href="#"><?php echo $row["name"] ?></a></h3>
         <p><?php echo $row["detail"] ?> </p>
         <span class="actual"><?php echo $row["price"]?></span><br>
         <ul class="buttons">
           <li class="shop_btn"><a href="product-detail.php?id=<?php echo $row["id"]?>">Buy Now</a></li>
           </ul>
           <div class="clear"> </div>
         </div>
     </div>
   </div>
<?php }
?>

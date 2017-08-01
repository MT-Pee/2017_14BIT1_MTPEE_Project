
<?php
include('../../admin/feedback/addfb.php')
 ?>
<?php include('header.php') ?>
     <div class="main">
      <div class="shop_top">
	     <div class="container">
         <form name="add" method="POST" action="">
            <?php if(isset($_SESSION['success'])): ?>
            <p style="color:green;">Thành viên đã được thêm mới thành công!</p>
            <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
								<div class="register-top-grid">
										<h3>Welcom To Our site</h3>
										<div>
											<span>Your Feedback<label>*</label></span>
											<input type="text" name="content" required value="" />
										</div>
								</div>

								</div>
								<div class="clear"> </div>
								<input type="submit" value="submit">
						</form>

					</div>
		   </div>
	  </div>
	<?php include('footer.php') ?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Quản trị - Thành viên - Danh sách</title>
 


</head>
  <?php require '/css/header.css'?>
    <?php require '/css/header-basic.css'?>
    <?php require '/css/form.css'?>
    <?php require '/css/footeradd.css';?>
      <header class="header-basic">
        	<div class="header-limiter">  
        <div class="logo">
          <a href="<?php echo SITE_URL . 'admin/home.php'; ?>"><h1><span class="blue-bold">MT </span>- PEE</h1></a>
        </div>
        <div class="main-nav">
          <nav>
             <?php require '/common/menu.tpl.php'; ?>
        </nav>
                </div></div>
      </header>
<body>


   
   
   
    
<div class="login">
<div class="login-triangle"></div>
  
  <h2 class="login-header">Thêm Thành Viên</h2>
<form class="login-container" name="add" method="POST" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Thành viên đã được thêm mới thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>
<p>
<input type="text" name="username" placeholder="username" required value="" />
</p>
<p>
<input type="password" name="password" placeholder="password" required value="" />
</p>
 
<p>
<input type="text" name="name" placeholder="name" required value="" />
</p>
<p>
<input type="text" name="email" placeholder="email" required value="" />
</p>

    <p> 
   
<input type="text" name="phone" placeholder="phone" required value="" />   
    </p>
    <p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" value="1" />
</p>
<p>
<input type="submit" value="Thêm mới" />
</p>
    </form></div>
 <div class="footer">&copy;2017 Group E All Right Reserved</div>
</body>
</html>
<!DOCTYPE HTML> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Thành viên - Thêm mới</title>
</head>
<body>
<?php require '/css/header.css';?>
      <header>
        <div class="logo">
           <a href="<?php echo SITE_URL . 'admin/home.php'; ?>"><h1><span class="blue-bold">MT </span>- PEE</h1></a>
        </div>
        <div class="main-nav">
          <nav>
             <?php require '/common/menu.tpl.php'; ?>
        </nav>
        </div>
      </header>
<body>


   
   
   
    

<form name="add" method="POST" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Thành viên đã được thêm mới thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Tài khoản:</label>
<input type="text" name="username" required value="" />
</p>
<p>
<label>Mật khẩu:</label>
<input type="password" name="password" required value="" />
</p>
<p>
<label>Họ tên:</label>
<input type="text" name="name" required value="" />
</p>
<p>
<label>Email:</label>
<input type="text" name="email" required value="" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" required value="1" />
</p>
    <p> 
    <label>Phone:</label>
<input type="text" name="phone" required value="" />   
    </p>
<p>
<input type="submit" value="Thêm mới" />
</p>

</form>
 <div id="footer">&copy;2017 Group E All Right</div>
</body>
</html>
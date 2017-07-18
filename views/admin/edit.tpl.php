
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Thành viên - Chỉnh sửa</title>
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


   
   
   
    

<form name="edit" method="POST" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Thành viên đã được chỉnh sửa thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Tài khoản:</label>
<input type="text" name="username" value="<?php echo $user['username']; ?>" />
</p>
    <p>
<label>Tên:</label>
<input type="text" name="name" value="<?php echo $user['name']; ?>" />
</p>
    <p>
<label>SĐT:</label>
<input type="text" name="phone" value="<?php echo $user['phone']; ?>" />
</p>
<p>
<label>Mật khẩu:</label>
<input type="password" name="password" value="" />
</p>

<p>
<label>Email:</label>
<input type="text" name="email" value="<?php echo $user['email']; ?>" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" value="1" <?php echo ($user['status'] == 1) ? 'checked="checked"' : ''; ?> />
</p>
<p>
<input type="submit" value="Chỉnh sửa" />
</p>
</form>
 <div id="footer">&copy;2017 Group E All Right</div>
</body>
</html>
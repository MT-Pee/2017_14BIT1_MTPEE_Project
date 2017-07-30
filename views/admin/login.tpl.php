<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Đăng nhập</title>

</head>
<body>
<?php require '/css/header.css';?>
<?php require '/css/footer.css';?>
    <?php require '/css/form.css';?>
      <header>
       <div class="logo">
           <h1><span class="blue-bold">MT </span>- PEE</h1>
        </div>
   
      </header>

<div class="login">
    <div class="login-triangle"></div>
    <h2 class="login-header">Log in</h2>

    <form class="login-container" name="login" method="POST" action="">
<?php if(isset($error) && $error == true): ?>
<p style="color:red;">Sai Tài khoản hoặc Mật khẩu!</p>
<?php endif; ?>
<p>
<input type="text" name="username" placeholder="Name" value="" required/>
</p>
<p>
<input type="password" name="password" placeholder="Pasword" value="" required />
</p>
<p>
<input type="submit" value="Login" />
</p>
    </form></div>
    <div class="footer">&copy;2017 Group E All Right Reserved</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Đăng nhập</title>

</head>
<body>
<?php require '/css/header.css';?>
      <header>
        <div class="logo">
          <h1><span class="blue-bold">MT </span>- PEE</h1>
        </div>
   
      </header>
<body>

    <div id="content">
    <form name="login" method="POST" action="">
<?php if(isset($error) && $error == true): ?>
<p style="color:red;">Sai Tài khoản hoặc Mật khẩu!</p>
<?php endif; ?>

<p>
<label>Tài khoản:</label>
<input type="text" name="username" value="" required/>
</p>
<p>
<label>Mật khẩu:</label>
<input type="password" name="password" value="" required />
</p>
<p>
<input type="submit" value="Đăng nhập" />
</p>
</form>

    </div>
   
    <div id="footer">&copy;2017 Group E All Right</div>

</body>
</html>
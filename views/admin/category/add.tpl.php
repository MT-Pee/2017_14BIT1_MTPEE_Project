<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Danh mục sản phẩm - Thêm mới</title>
</head>
<body>
<?php require '/../css/header.css';?>
      <header>
        <div class="logo">
         <a href="<?php echo SITE_URL . 'admin/home.php'; ?>"><h1><span class="blue-bold">MT </span>- PEE</h1></a>
        </div>
        <div class="main-nav">
          <nav>
             <?php require '/../common/menu.tpl.php'; ?>
        </nav>
        </div>
      </header>
<form name="add" method="POST" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Danh mục sản phẩm đã được thêm mới thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Tên danh mục:</label>
<input type="text" name="name" value="" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" value="1" />
</p>
<p>
<input type="submit" value="Thêm mới" />
</p>
</form>
 <div id="footer">&copy;2017 Group E All Right</div>
</body>
</html>
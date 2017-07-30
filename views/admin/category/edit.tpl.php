
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Danh mục sản phẩm - Chỉnh sửa</title>
</head>
<body>
<?php require '/../css/header.css';?>
<?php require '/../css/footer.css';?>
<?php require '/../css/form.css';?>
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
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Edit</h2>

  <form class="login-container">    
<form name="edit" method="POST" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Danh mục sản phẩm đã được chỉnh sửa thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Tên danh mục:</label>
<input type="text" name="name" value="<?php echo $category['name']; ?>" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" value="1" <?php echo ($category['status'] == 1) ? 'checked="checked"' : ''; ?> />
</p>
<p>
<input type="submit" value="Chỉnh sửa" />
</p>
      </form></div>
 <div class="footer">&copy;2017 Group E All Right Reserved</div>
</body>
</html>
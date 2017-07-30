
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Sản phẩm - Chỉnh sửa</title>
</head>
<body>
<?php require '/../css/header.css';?>
<?php require '/../css/footeradd.css';?>
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

<form class="login-container" name="edit" method="POST" enctype="multipart/form-data" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Sản phẩm đã được chỉnh sửa thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Danh mục:</label>
<select name="category_id">
<?php while($category_active = mysqli_fetch_assoc($category_active_list)): ?>
<option value="<?php echo $category_active['id']; ?>" <?php echo ($product['category_id'] == $category_active['id']) ? 'selected="selected"' : ''; ?>><?php echo $category_active['name']; ?></option>
<?php endwhile; ?>
</select>
</p>
<p>
<label>Tên sản phẩm:</label>
<input type="text" name="name" value="<?php echo $product['name']; ?>" />
</p>
<p>
<label>Chi tiết:</label>
<textarea name="detail"><?php echo $product['detail']; ?></textarea>
</p>
<p>
<label>Hình ảnh:</label>
<input type="file" name="image" />
</p>
<p>
<label>Giá bán:</label>
<input type="text" name="price" value="<?php echo $product['price']; ?>" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" value="1" <?php echo ($product['status'] == 1) ? 'checked="checked"' : ''; ?> />
</p>
<p>
<input type="submit" value="Chỉnh sửa" />
</p>
    </form></div>
</body>
<div class="footer">&copy;2017 Group E All Right Reserved</div>

</html>
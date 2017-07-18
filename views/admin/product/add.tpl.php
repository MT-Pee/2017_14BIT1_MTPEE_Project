
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Sản phẩm - Thêm mới</title>
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
<body>


   
   
   
    

<form name="add" method="POST" enctype="multipart/form-data" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Sản phẩm đã được thêm mới thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Danh mục:</label>
<select name="category_id">
<?php while($category_active = mysqli_fetch_assoc($category_active_list)): ?>
<option value="<?php echo $category_active['id']; ?>"><?php echo $category_active['name']; ?></option>
<?php endwhile; ?>
</select>
</p>
<p>
<label>Tên sản phẩm:</label>
<input type="text" name="name" required value="" />
</p>
<p>
<label>Chi tiết:</label>
<textarea name="detail"></textarea>
</p>
<p>
<label>Hình ảnh:</label>
<input type="file" required name="image" />
</p>
<p>
<label>Giá bán:</label>
<input type="text" name="price" required value="" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" required value="1" />
</p>
<p>
<input type="submit" value="Thêm mới" />
</p>
</form>
 <div id="footer">&copy;2017 Group E All Right</div>
</body>
</html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Danh mục sản phẩm - Danh sách</title>
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
<table width="100%" cellpadding="20">
<tr>
<th>ID</th>
<th>Tên danh mục</th>
<th>Trạng thái</th>

<th>Tác vụ</th>
</tr>
<?php while($category = mysqli_fetch_assoc($category_list)): ?>
<tr>
<th><?php echo $category['id']; ?></th>
<th><a href="<?php echo SITE_URL . 'admin/category/edit.php?id=' . $category['id']; ?>"><?php echo $category['name']; ?></a></th>
<th><?php echo ($category['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></th>
<th><a href="<?php echo SITE_URL . 'admin/category/delete.php?id=' . $category['id']; ?>">Xóa</a></th>
</tr>
<?php endwhile; ?>
</table>
 <div id="footer">&copy;2017 Group E All Right</div>
</body>
</html>
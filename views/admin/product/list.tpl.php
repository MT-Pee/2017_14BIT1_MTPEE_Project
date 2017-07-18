
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Sản phẩm - Danh sách</title>
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
<table width="100%" cellpadding="10">
<tr>
<th>ID</th>
<th>Hình ảnh</th>
<th>Tên sản phẩm</th>
<th>Giá bán</th>
<th>Trạng thái</th>
<th>Tác vụ</th>
</tr>
<?php while($product = mysqli_fetch_assoc($product_list)): ?>

<th><?php echo $product['id']; ?></th>
<th><img src="<?php echo SITE_URL . 'admin/product/userfiles/' . $product['image']; ?>" width="20" height="20" /></th>
<th><a href="<?php echo SITE_URL . 'admin/product/edit.php?id=' . $product['id']; ?>"><?php echo $product['name']; ?></a></th>
<th><?php echo number_format($product['price'], 0, '', '.'); ?> VNĐ</td>
<th><?php echo ($product['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></th>
<th><a href="<?php echo SITE_URL . 'admin/product/delete.php?id=' . $product['id']; ?>">Xóa</a></th>
</tr>
<?php endwhile; ?>
</table>
 <div id="footer">&copy;2017 Group E All Right</div>
</body>
</html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Sản phẩm - Danh sách</title>
</head>
<body>

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
<tr>
<td><?php echo $product['id']; ?></td>
<td><img src="<?php echo SITE_URL . 'admin/product/userfiles/' . $product['image']; ?>" width="20" height="20" /></td>
<td><a href="<?php echo SITE_URL . 'admin/product/edit.php?id=' . $product['id']; ?>"><?php echo $product['name']; ?></a></td>
<td><?php echo number_format($product['price'], 0, '', '.'); ?> VNĐ</td>
<td><?php echo ($product['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/product/delete.php?id=' . $product['id']; ?>">Xóa</a></td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>
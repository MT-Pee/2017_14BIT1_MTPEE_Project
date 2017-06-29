<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Danh mục sản phẩm - Danh sách</title>
</head>
<body>

<table width="100%" cellpadding="20">
<tr>
<th>ID</th>
<th>Tên danh mục</th>
<th>Trạng thái</th>

<th>Tác vụ</th>
</tr>
<?php while($category = mysqli_fetch_assoc($category_list)): ?>
<tr>
<td><?php echo $category['id']; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/category/edit.php?id=' . $category['id']; ?>"><?php echo $category['name']; ?></a></td>
<td><?php echo ($category['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/category/delete.php?id=' . $category['id']; ?>">Xóa</a></td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>
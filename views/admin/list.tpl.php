<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Thành viên - Danh sách</title>
</head>
<body>

<table width="100%" cellpadding="10">
<tr>
<th>ID</th>
<th>Tài khoản</th>
<th>Họ tên</th>
<th>Trạng thái</th>
<th>Tác vụ</th>
</tr>
<?php while($user = mysqli_fetch_assoc($user_list)): ?>
<tr>
<td><?php echo $user['id']; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/user/edit.php?id=' . $user['id']; ?>"><?php echo $user['username']; ?></a></td>
<td><?php echo $user['name']; ?></td>
<td><?php echo ($user['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/user/delete.php?id=' . $user['id']; ?>">Xóa</a></td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>
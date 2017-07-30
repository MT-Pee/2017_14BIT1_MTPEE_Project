<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Danh mục sản phẩm - Danh sách</title>
</head>
<body>
<?php require '/../css/header.css';?>
<?php require '/../css/footer.css';?>
<?php require '/../css/table.css';?>
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
<table>
<thead>
<tr>
<th>ID</th>
<th>Tên danh mục</th>
<th>Trạng thái</th>
<th>Tác vụ</th>
</tr>
</thead>
<tbody>
<?php while($category = mysqli_fetch_assoc($category_list)): ?>

<tr>
<td><?php echo $category['id']; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/category/edit.php?id=' . $category['id']; ?>"><?php echo $category['name']; ?></a></td>
<td><?php echo ($category['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/category/delete.php?id=' . $category['id']; ?>">Xóa</a></td>
</tr>
<?php endwhile; ?>
    </tbody>
    </table>
<div class="footer">&copy;2017 Group E All Right Reserved</div>
</body>
</html>
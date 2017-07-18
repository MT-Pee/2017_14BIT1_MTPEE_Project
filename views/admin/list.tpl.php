<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Thành viên - Danh sách</title>
</head>
<body>

<?php require '/css/header.css';?>
      <header>
        <div class="logo">
           <a href="<?php echo SITE_URL . 'admin/home.php'; ?>"><h1><span class="blue-bold">MT </span>- PEE</h1></a>
        </div>
        <div class="main-nav">
          <nav>
             <?php require '/common/menu.tpl.php'; ?>
        </nav>
        </div>
      </header>
<body>


   
   
   
    
    <div id="content">
<table width="100%" cellpadding="5">
<tr>
<th>ID</th>
<th>Tài khoản</th>
<th>Họ tên</th>
<th>Trạng thái</th>
<th>Tác vụ</th>
</tr>
<?php while($user = mysqli_fetch_assoc($user_list)): ?>
<tr>
<th><?php echo $user['id']; ?></th>
<th><a href="<?php echo SITE_URL . 'admin/user/edit.php?id=' . $user['id']; ?>"><?php echo $user['username']; ?></a></th>
<th><?php echo $user['name']; ?></th>
<th><?php echo ($user['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></th>
<th><a href="<?php echo SITE_URL . 'admin/user/delete.php?id=' . $user['id']; ?>">Xóa</a></th>
</tr>
<?php endwhile; ?>
</table>
 </div>
 <div id="footer">&copy;2017 Group E All Right</div>
</body>
</html>
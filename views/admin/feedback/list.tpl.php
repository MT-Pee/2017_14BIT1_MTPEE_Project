<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Thành viên - Danh sách</title>
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
<body>


   
   
   
<table>
<thead>
<tr>
<th>ID</th>
<th>Nội dung</th>
<th>Tác vụ</th>
</tr>
</thead>
<tbody>
<?php while($feedback = mysqli_fetch_assoc($feedback_list)): ?>
<tr>
<td><?php echo $feedback['feedback_id']; ?></td>
<td><?php echo $feedback['content']; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/feedback/delete.php?feedback_id=' . $feedback['feedback_id']; ?>">Xóa</a></td>
</tr>
<?php endwhile; ?>
    </tbody>
    </table>

 <div class="footer">&copy;2017 Group E All Right Reserved</div>
</body>
</html>
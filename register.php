<?php 
  include 'include/header.php';
?>

<div class = "box">
  <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'include/database.php';

    if($username == NULL || $password == NULL){
      echo '<center><h1>กรุณากรอกชื่อผู้ใช้หรือรหัสผ่าน</center></h1>';
      echo '<center><a class="btn btn-primary mt-2" href="sign.php">ลองใหม่</a></center>';
    }

    else{
      $query = "INSERT INTO login (id, username, password, status, level) VALUES (NULL, '$username', '$password', '1', '1')";
      $stmt = $dbcon->prepare($query);
      if ($stmt->execute()) {
        echo '<center><h1>เพิ่มข้อมูลสำเร็จ</h1></center>';
        echo '<center><a class="btn btn-primary mt-2" href="index.php">Login</a></center>';

      } else {
        echo "เพิ่มข้อมูลไม่สำเร็จ";
        echo '<center><a class="btn btn-primary mt-2" href="sign.php">ลองใหม่</a></center>';
      }
    }
  ?>
</div>

<?php 
  include 'include/footer.php';
?>
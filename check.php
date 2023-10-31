<?php 
  include 'include/header.php';
?>


<div class = "box">
  <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'include/database.php';

    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $query = $dbcon->prepare($sql);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_OBJ);
    if ($query->rowCount() == 1) { 
      echo '<center><h1>เข้าสู่ระบบสำเร็จ</h1></center>';
      echo '<center><h2>ยินดีต้อนรับ '.$row->username.'</h2></center>';
      echo '<header class="top-header">
        <a class="home-item home" href="home.php">Home</a>
        <a class="menu-item" href="input.php">Order</a>
      </header>';

      if($row->status!=0){
        echo '<center><h3 class="text-success">เปิดใช้งานได้</h3></center>';
      }
      else{
        echo '<center><h3 class="text-danger">ไม่อนุญาตให้ใช้งาน</h3></center>';
      } 
      if($row->level==1){
        echo '<center><h3>สถานะ : ผู้ดูแลระบบ</h3></center>';
      }
      else{
        echo '<center><h3>สถานะ : ผู้ใช้งานทั่วไป</h3></center>';
      }
    }

    if ($query->rowCount() == 0) { 
      echo '<center><h1>เข้าสู่ระบบไม่สำเร็จ<br>ชื่อผู้ใช้/รหัสผ่าน ไม่ถูกต้อง</h></center>';
      echo '<center><a class="btn btn-primary mt-2" href="index.php">ลองใหม่</a></center>';
    }
  ?>
</div>

<footer class="bottom-footer">
  <p style="padding-top:15px">About this website</p>
  <p>Copyright</p>
</footer>

<?php 
  include 'include/footer.php';
?>
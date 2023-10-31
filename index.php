<?php 
  include 'include/header.php';
?>

<header class="top-header">
  <a class="menu-item home" href="sign.php">Sign Up</a>
</header>
<form action="check.php" method="POST">
  <div class="container mt-5 text-center" style="border-radius: 20px;background: rgb(182, 185, 191, 0.9)">
    <div class = "box">
      <input type="text" name="username" class="form-control mt-2" placeholder="ชื่อผู้ใช้">
      <input type="text" name="password" class="form-control mt-2" placeholder="รหัสผ่าน">
      <button type="submit" class="btn btn-primary mt-2">เข้าสู่ระบบ</button>
    </div>
  </div>
</form>

<?php
  include 'include/footer.php';
?>


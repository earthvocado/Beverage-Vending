<?php 
  include 'include/header.php';
?>

<header class="top-header">
  <a class="home-item" href="home.php">Home</a>
  <a class="menu-item main" href="input.php">Order</a>
</header>

<div class = "container text-center">
  <div class = "box">
    <form action = "confirm.php" method = 'post'>
      <select name="id" class="form-control m-3">
        <option>-เลือกเครื่องดื่มของคุณ-</option>      
        <option value="1">น้ำดื่ม</option>
        <option value="2">บีทาเก้น</option>
        <option value="3">อิชิตัน</option>
        <option value="4">โค้ก</option>
        <option value="5">เป็บซี่</option>
        <option value="6">ยูนิฟ</option>
        <option value="7">ดอยคำ</option>
        <option value="8">โออิชิ</option>
        <option value="9">โอวัลติน</option>
        <option value="10">ไวตามิลค์</option>
        <option value="11">น้ำแร่</option>
      <input type="number" name="amount" class="form-control m-3" placeholder = "-กรุณากรอกจำนวน-">
      <input type="radio" name="order" value="1">Import
      <input type="radio" name="order" value="2">Buy<br>
      <button a class="btn btn-primary mt-2">Confirm</button>
    </form>
  </div>
</div>
  
<?php 
  include 'include/footer.php';
?>
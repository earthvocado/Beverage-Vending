<?php
  include 'include/header.php';
?>

<header class="top-header">
  <a class="menu-item" href="home.php">Home</a>
  <a class="menu-item" href="input.php">Order</a>
</header>

<div class = "container text-center">
  <div class = "box">
    <?php
    $id = $_POST['id'];
    $amount = $_POST['amount'];
    $order = $_POST['order'];

    include 'include/database.php';

    $sql = "SELECT * FROM beverage_vending_system WHERE id='$id';"; //SQL ที่จะรัน
    $query = $dbcon->prepare($sql); //ใส่เตรียมพร้อมไว้ในค่าตัวแปร query
    $query->execute();
    $row = $query->fetch(PDO::FETCH_OBJ);
    // echo $row->stock;

    if($order == '1'){
      $stock=$row->stock+$amount;
      $sql = "UPDATE beverage_vending_system SET stock = '$stock' WHERE id ='$id'";
      $stmt = $dbcon->prepare($sql);
      if ($stmt->execute()) {
        echo "<script>";
        echo "Swal.fire({
          icon: 'success',
          title: 'Successed',
          text: 'Your work has been saved',
        });";
        echo "</script>"; 
      } 
      else {
        echo "<script>";
        echo "Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!',
        })>";
        echo "</script>";
      }
    }

    if($order == '2'){
      $stock=$row->stock-$amount;
      $sql = "UPDATE beverage_vending_system SET stock = '$stock' WHERE id ='$id'";
      $stmt = $dbcon->prepare($sql);
      if ($stmt->execute()) {
        echo "<script>";
          echo "Swal.fire({
            icon: 'success',
            title: 'Successed',
            text: 'Your work has been saved',
          });";
        echo "</script>"; 
        
      } 
      else {
          echo "<script>";
          echo "Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
          })>";
          echo "</script>";
      }
    }
    ?>
  </div>
</div>

<?php 
  include 'include/footer.php';
?>
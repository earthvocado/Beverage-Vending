<?php 
  include 'include/header.php';
?>

<header class="top-header">
  <a class="menu-item main" href="home.php">Home</a>
  <a class="menu-item" href="input.php">Order</a>
</header><br><br><br>
<?php
  include 'include/database.php';
  $sql = "SELECT * FROM beverage_vending_system";
  $query = $dbcon->prepare($sql);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
// date_default_timezone_set('Asia/Bangkok'); // กำหนด Timezone ให้เป็นเวลาไทย
?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">รหัสสินค้า</th>
                <th scope="col">ยี่ห้อ</th>
                <th scope="col">สต๊อกสินค้า</th>
                <th scope="col">เวลาดำเนินการ</th>
                <th scope="col">เวลาที่แก้ไข</th>
            </tr>
        </thead>
        <body>
            <?php
            foreach ($results as $row){
              // if($row->time_up >= date('Y-m-d',strtotime('-1 week'))){//เพิ่มเงื่อนไข  (day >= today-1week)
                echo "<tr>";
                echo "<td>".$row->id."</td>";
                echo "<td>".$row->brand."</td>";
                echo "<td>".$row->stock."</td>";
                echo "<td>".$row->time."</td>";
                echo "<td>".$row->time_up."</td>";
                echo "</tr>";
                }
            ?>
        </body>
    </table>
  <footer class="bottom-footer">
    <p>About this website</p>
    <p>Copyright</p>
  </footer>

<?php 
  include 'include/footer.php';
?>

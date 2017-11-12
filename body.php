<?php include "connect.php"; ?>
<div class="body">
<div class="container">
  <h2 class="mau-chu">Sản phẩm mới <small>Hàng mới về</small></h2>
  <div class="row">
    <?php
mysqli_query($conn,"SET NAMES 'utf8'");
$sql= mysqli_query($conn,"SELECT * FROM san_pham_moi");
$sql_old= mysqli_query($conn,"SELECT * FROM san_pham_cu");
while ($row= mysqli_fetch_array($sql)) {
?>
 <div class="ok col-lg-3">
   <div class="khung">
   <img class="img-thumbnail" src="<?php echo $row['anh_sp'] ?>" alt="Generic placeholder image" width="140" height="140">
   <h2><?php echo $row['ten_sp'] ?> <span class="label label-warning">Mới</span> </h2>
   <p><?php echo $row['gioi_thieu_sp'] ?></p
    <a href="#">Giá sản phẩm <span class="badge"><?php echo $row['gia_sp'] ?>đ</span></a>
    <form method="post">
     <p><button class="btn btn-success btn-secondary" type="submit" name="dat_mua"> Đặt mua &raquo;</button></p>
      </form>
                </div>
 </div><!-- /.col-lg-4 -->
 <?php
  }
  ?>
</div><!-- /.row -->
</div>
<!-- START THE FEATURETTES -->
<div class="container">

 <h1 class="mau-chu">Các sản phẩm shop Ngọc Hiền</h1>
 <?php
   mysqli_query($conn,"SET NAMES 'utf8'");
   while ($row= mysqli_fetch_array($sql_old)) {
  ?>
 <div class="ok col-lg-3">
   <div class="khung">
   <img class="img-thumbnail" src="<?php echo $row['anh_sp'] ?>" alt="Generic placeholder image" width="140" height="140">
   <h2><?php echo $row['ten_sp'] ?><span class="label label-warning">Hot</span></h2>
   <p><?php echo $row['gioi_thieu_sp'] ?></p>
   Giá sản phẩm<span class="badge"><?php echo $row['gia_sp']?>đ</span>
   <form method="post">
    <p><button class="btn btn-primary btn-secondary" type="submit" name="dat_mua"> Đặt mua &raquo;</button></p>
     </form>
 </div><!-- /.col-lg-4 -->
        </div>
 <?php
  }
  ?>


</div>
<?php if(isset($_POST['dat_mua'])){
  echo '<script>var a= prompt("Bạn muốn mua bao nhiêu sản phẩm?");</script>';
  echo '<script>alert("Thêm vào giỏ hàng thành công!")</script>';
  ?>
  <form method="post">
  <input type="hidden" name="bienphp" id="bienphp" value="" />
  <script>document.getElementById('bienphp').value= a </script>
</form>
  <?php
    echo $_POST['bienphp'];
  $sql= "INSER INTO gio_hang(ten_sp,so_luong)";
} ?>

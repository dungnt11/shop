<div class="body">
 <div class="container">
   <h2 class="mau-chu">Sản phẩm mới <small>Hàng mới về</small></h2>
   <div class="row">
     <?php
     include "connect.php";
     mysqli_query($conn,"SET NAMES 'utf8'");
     $search_name = $_GET['search_name'];
     $search = preg_match('/^[0-9a-zA-Z]+$/',$search_name);
     $search_sp_cu= "SELECT * FROM san_pham_cu WHERE ten_sp LIKE '%$search_name%' ";
     $sql= mysqli_query($conn,$search_sp_cu);
     $row= mysqli_num_rows($sql);
     if($row <= 0) {
       echo '<script>alert("Không tìm thấy sản phẩm"); window.history.back();</script>';
     }
      else{
     while ($row= mysqli_fetch_array($sql)) {
       ?>
  <div class="ok col-lg-3">
    <div class="khung">
    <img class="img-thumbnail" src="<?php echo $row['anh_sp'] ?>" alt="Generic placeholder image" width="140" height="140">
    <h2><?php echo $row['ten_sp'] ?> <span class="label label-warning">Mới</span> </h2>
    <p><?php echo $row['gioi_thieu_sp'] ?></p
     <a href="#">Giá sản phẩm <span class="badge"><?php echo $row['gia_sp'] ?>đ</span></a>
     <form method="post">
    <p><button type="button" name="dat_mua" class="btn btn-success btn-secondary"  role="button">Đặt mua &raquo;</button></p>
    </form>
    <?php if(isset($_POST['dat_mua'])){
      $_SESSION['ten'] =  $row['ten_sp'];
      $_SESSION['gia_sp'] = $row['gia_sp'];
      echo '<script>alert("Thêm thành công vào giỏ hàng, mở giỏ hàng để kiểm tra!!");</script>';
    } ?>
                 </div>
  </div><!-- /.col-lg-4 -->
  <?php
    }
   }
   ?>
 </div><!-- /.row -->
 </div>
 </div>

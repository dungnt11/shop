<?php
  include_once "connect.php";
  $id= $_GET['id'];
  if($_GET['id']){
    $sql= mysqli_query($conn,"DELETE FROM san_pham_cu where san_pham_cu.id = $id");
    if($sql == TRUE){
      echo '<script>alert("Xóa thành công!Trở lại trang quản lí để chỉnh tiếp");</script>';
      header('location: admin.php');
    }
  }
 ?>

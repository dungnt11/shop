<?php
  include_once "connect.php";
  $id= $_GET['id_delete'];
  if($_GET['id_delete']){
    $sql= mysqli_query($conn,"DELETE FROM san_pham_moi where san_pham_moi.id = $id");
    if($sql == TRUE){
      echo '<script>alert("Xóa thành công!Trở lại trang quản lí để chỉnh tiếp");</script>';
      header('location: admin.php');
    }
  }
 ?>

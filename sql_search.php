<?php mysqli_query($conn,"SET NAMES 'utf8'");
if(isset($_GET['submit_search'])){
  $search_name = $_GET['search_name'];
  $search = preg_match('/^[0-9a-zA-Z]+$/',$search_name);
  $search_sp_cu= "SELECT * FROM san_pham_cu WHERE ten_sp LIKE '%$search_name%' ";
  $search_sp_moi= "SELECT * FROM san_pham_moi WHERE ten_sp LIKE '%$search_name%' ";
  $sql= mysqli_query($conn,$search_sp_cu);
  $sql1= mysqli_query($conn,$search_sp_moi);
  $row= mysqli_num_rows($sql);
  $row1= mysqli_num_rows($sql1);
  if(($row <= 0)||($row1 <=0)) echo '<script>alert("Không tìm thấy sản phẩm")</script>'; else
  header('location: index.php');
}
?>

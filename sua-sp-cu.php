<?php include_once "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <table class="table">
        <form method="POST" enctype="multipart/form-data">
          <h1 class="text-center">Sửa sản phẩm</h1>
          <tr>
            <td>Tên sản phẩm:</td>
            <td><input type="text" name="ten_sp" class="form-control"</td>
          </tr>

          <tr>
            <td>Giới thiệu sản phẩm:</td>
            <td><input type="text" name="gioi_thieu_sp" class="form-control"</td>
          </tr>

          <tr>
            <td>Ảnh sản phẩm:</td>
            <td><input type="file" name="anh_sp" ></td>
          </tr>

          <tr>
            <td>Giá sản phẩm:</td>
            <td><input type="text" name="gia_sp" class="form-control"</td>
          </tr>

          <tr>
            <td><button class="btn btn-info" name="submit">Hoàn tất</button></td>
          </tr>

          </form>
      </table>
    </div>
    <?php if(isset($_POST['submit'])){
      $ten_sp= $_POST['ten_sp'];
      $gioi_thieu_sp = $_POST['gioi_thieu_sp'];
      $gia_sp= $_POST['gia_sp'];
      ////upload file ////
      $file= "uploads/";
      $ten_file= $file.basename($_FILES['anh_sp']['name']);
      move_uploaded_file($_FILES['anh_sp']['tmp_name'],$ten_file);
      ////upload file ////
      $id = $_GET['id'];
      $sql= "UPDATE san_pham_cu SET ten_sp = '$ten_sp', gioi_thieu_sp = '$gioi_thieu_sp', anh_sp = '$ten_file', gia_sp = '$gia_sp' WHERE san_pham_cu.id = $id";
      mysqli_query($conn,"SET NAMES 'utf8'");
      $ok= mysqli_query($conn,$sql);
      if(isset($ok)) echo '<script>alert("Sủa thành công");</script>'; else echo '<script>alert("Thất bại, vui lòng thử lại!");</script>';
    }
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>

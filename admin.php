<?php
session_start();
include_once "connect.php";
mysqli_query($conn,"SET NAMES 'utf8'");
$sql= mysqli_query($conn,"SELECT * FROM san_pham_moi");
$sql_old= mysqli_query($conn,"SELECT * FROM san_pham_cu");
  if(isset($_SESSION['username']))
  {
    echo '<script>alert("Chào bạn ADMIN!!");
   </script>';
 }
   else{
     header('location: index.php');
   }
   if(isset($_POST['log_out'])){
     echo '<script>alert("Bạn đã đăng xuất");
    </script>';
     session_destroy();
      header('location: index.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

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
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Trang quản lí</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
          </ul>

          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Đổi mật khẩu</a></li>
          </ul>
          <form method="post">
          <ul class="nav navbar-right">
            <li class="active">
              <button class="btn btn-success" name="log_out">Đăng Xuất</button>
            </li>
          </ul>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
    <div class="col-md-12">
      <div class="text-center">
        <h1>Sản phẩm mới <small>Phần đầu website</small></h1>
        <a target="_blank" href="them_sp_moi.php"><span class="glyphicon glyphicon-plus"></span>Thêm</a>
      </div>
      <table class="table">
      <thead>
        <th>
          ID sản phẩm
        </th>
        <th>
          Tên sản phẩm
        </th>
        <th>
          Giới thiệu sản phẩm
        </th>
        <th>
          Ảnh sản phẩm
        </th>
        <th>
          Giá sản phẩm
        </th>
        <th>
          Chỉnh sửa sản phẩm
        </th>
      </thead>
      <tbody>
        <!-- Xử lí mysql -->
        <?php
    		while ( $data = mysqli_fetch_array($sql) ) {
    			$i = 1;
    			$id = $data['id'];
    	?>
    		<tr>
    			<td><?php echo $data['id']; ?></td>
    			<td><?php echo $data['ten_sp']; ?></td>
    			<td><?php echo $data['gioi_thieu_sp']; ?></td>
    			<td><?php echo $data['anh_sp']?></td>
    			<td><?php echo $data['gia_sp'] ?></td>
    			<td>
            <form method="GET">
            <a href="sua-sp-moi.php?id_sp=<?php echo $id;?>" target="_blank"><span class="glyphicon glyphicon-edit"></span>Sửa</a>
            <a href="xoa_sp_moi.php?id_delete=<?php echo $id;?>"><span class="glyphicon glyphicon-remove"></span>Xóa</a>
          </form>
    			</td>
    		</tr>
    	<?php
    			$i++;
    		}
    	?>
        <!-- Xử lí mysql -->
      </tbody>
      </table>
    </div>
    <p class="text-center">
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    </p>
    <div class="col-md-12">
      <div class="text-center">
        <h1>Sản phẩm đang có <small>Phần thân website</small></h1>
          <a target="_blank" href="them_sp_cu.php"><span class="glyphicon glyphicon-plus"></span>Thêm</a>
      </div>
      <table class="table">
      <thead>
        <th>
          ID sản phẩm
        </th>
        <th>
          Tên sản phẩm
        </th>
        <th>
          Giới thiệu sản phẩm
        </th>
        <th>
          Ảnh sản phẩm
        </th>
        <th>
          Giá sản phẩm
        </th>
        <th>
          Chỉnh sửa sản phẩm
        </th>
      </thead>
      <!-- Xử lí mysql -->
        <?php
        while ( $data = mysqli_fetch_array($sql_old) ) {
          $i = 1;
          $id = $data['id'];
      ?>
        <tr>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['ten_sp']; ?></td>
          <td><?php echo $data['gioi_thieu_sp']; ?></td>
          <td><?php echo $data['anh_sp']?></td>
          <td><?php echo $data['gia_sp'] ?></td>
          <td>
            <form method="GET">
            <a href="sua-sp-cu.php?id=<?php echo $id;?>" target="_blank"><span class="glyphicon glyphicon-edit"></span>Sửa</a>
            <a href="xoa.php?id=<?php echo $id;?>" target="_blank"><span class="glyphicon glyphicon-remove"></span>Xóa</a>
          </form>
          </td>
        </tr>
      <?php
          $i++;
        }
      ?>
    <!-- Xử lí mysql -->
      </table>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>

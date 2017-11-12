<?php
  session_start();
  include "connect.php";
  if(isset($_POST['submit'])){
    $user= strip_tags($_POST['ten']);
    $mk = strip_tags($_POST['mk']);
    $sql= "select * from dang_nhap where '$user' = tai_khoan && '$mk' = mat_khau";
    $cz= mysqli_query($conn,$sql);
    $num= mysqli_num_rows($cz);
    if($num == 0) {echo '<script>alert("Tên đăng nhập hoặc mật khẩu không chính xác");
    </script>';
    exit();}
    else  {
      header('location: admin.php');
      $_SESSION['username'] = $user;
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Ngọc Hiền</title>
		<style>
		.first-slide{
			text-align: center;
		}
		#tag{
			margin-top: 70px;
		}
		.row2{
			margin-top: 10px;
		}
    .body{
      background-image: url('uploads/bg2.jpg');
    }
    .ok{
      background-color: #7A3F45;
      height: 500px;
    }
    .khung{
      text-align: center;
      color: #F9B294;
      height: 450px;
      background-color: #6D5C7E;
      border-top: 4px solid #1FAD24;
      padding-top: 10px;
    }
    .mau-chu{
      color: #F9B294;
    }
		</style>
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
		<?php include_once "nav.php" ?>  <!--navigater-->
    <?php include "banner.php" ?>  <!--banner-->
    <?php
    if(isset($_GET['search_name'])) include "search.php"; else
    include "body.php" ?>  <!--BODY-->
	      <!-- /END THE FEATURETTES -->
        <?php include "footer.php" ?>  <!--navigater-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</div>
</html>

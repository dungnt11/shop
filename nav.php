 <style>
 .searchform {
 	float: left;
 	margin-top: 20px;
 	border:#00afdd 2px solid;
 	height:27px;
 	width:350px;
 	}
 	.searchform input[type=text]
 	{
 	width:270px;
 	height:21px;
 	border:0px;
 	background:#ffffff;
 	float:left;
 	margin:0px;padding:3px;
 	}
 </style>
<!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Shop Ngọc Hiền</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav nav-pills">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Trang chủ</a></li>
        <li class="active"><a href="lien-he.php"><span class="glyphicon glyphicon-phone"></span>Liên hệ</a></li>
        <li class="active"><a href="huong-dan.php"><span class="glyphicon glyphicon-heart"></span>Hướng dẫn mua hàng</a></li>
        <li>
          <a href="gio-hang.php"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ hàng của bạn</a>
        </li>
      </ul>
      <form method="GET" class="navbar-form navbar-left searchform" role="search">
        <div class="form-group">
          <input name="search_name" type="text" class="form-control" placeholder="Nhập tên sản phẩm cần tìm">
        </div>
        <button type="submit" class="btn btn-danger">Tìm</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <form method="POST">
      <div class="btn btn-group">
      <div class="dropdown">
        <button class="btn dropdown-toggle btn btn-warning" type="button" id="" data-toggle="dropdown">
          Đăng nhập
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="">
          <form method="POST" class="form-inline">
                   <div class="form-group">
                           <input type="text" name="ten" class="form-control" placeholder="Tên đăng nhập">
                   </div>
                   <div class="form-group">
                           <input type="password" name="mk" class="form-control" placeholder="Mật khẩu">
                   </div>
                   <div class="form-group">
                           <button type="submit" name="submit" class="btn btn-primary">Đăng Nhập</button>
                   </div>
               </form>
        </ul>
      </div>
        </div>
      </ul>
      </form>

    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- navbar end -->

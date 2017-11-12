<?php session_start() ?>
<?php include "nav.php"; ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Hướng dẫn mua hàng</title>

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
     <div class="jumbotron container">
       <h2 class="text-center">Giỏ hàng của bạn</h2>
       <p class="text-center">
         <table class="table">
           <thead>
             <th>Sản phẩm </th>
             <th>Số lượng </th>
             <th>Giá </th>
             <th>Thành tiền </th>
             <th>Xóa </th>
           </thead>
           <tbody><tr>
             <td><?php  ?></td>
             <td>1</td>
             <td>500 000</td>
             <td>500 000</td>
             <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></td>
              </tr>
           </tbody>
         </table>
             </p>
       <button type="button" class="btn btn-warning"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Ấn vào đây để về trang chủ </a></button>
       <p></p>
     </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </body>
 </html>
<?php       include "footer.php"; ?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>BLOCKS - Bootstrap Dashboard Theme</title>
  <base href="<?php echo base_url() . 'assets/admin_new/'; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

  <!-- DATA TABLE CSS -->
  <link href="css/table.css" rel="stylesheet">

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/admin.js"></script>

  <style type="text/css">
    body {
      padding-top: 60px;
    }
  </style>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  <!-- Google Fonts call. Font Used Open Sans -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  <!-- DataTables Initialization -->
  <script type="text/javascript" src="js/datatables/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
      $('#dt1').dataTable();
    });
  </script>


</head>

<body>

<?php include "nav_admin_view.php"; ?>

  <div class="container">

    <!-- CONTENT -->
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <h4><strong>Quản lý tài khoản</strong></h4>
        <table class="display">
          <thead>
            <tr>
              <th>Sửa</th>
              <th>Xóa</th>
              <th>ID</th>
              <th>Tên đăng nhập</th>
              <th>Mật khẩu</th>
              <th>Cấp độ</th>
              <th>Họ tên</th>
              <th>Email</th>
              <th>Ngày sinh</th>
              <th>Giới tính</th>
              <th>Địa chỉ</th>
              <th>SĐT</th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd">
              <td><span class="li_settings fs1"></span></td>
              <td>Brian May</td>
              <td>Guitar</td>              
              <td>Queen</td>
              <td>Brian May</td>
              <td>Guitar</td>
              <td>Queen</td>
              <td>Brian May</td>
              <td>Guitar</td>
              <td>Queen</td>
              <td class="center"> 7</td>
              <td class="center">9</td>
            </tr>
            <tr class="even">
              <td>Queen</td>
              <td>Brian May</td>
              <td>Guitar</td>              
              <td>Queen</td>
              <td>Brian May</td>
              <td>Guitar</td>
              <td>Queen</td>
              <td>Brian May</td>
              <td>Guitar</td>
              <td>Queen</td>
              <td class="center"> 7</td>
              <td class="center">9</td>
            </tr>
          </tbody>
        </table>
        <!--/END First Table -->

      </div>
      <!--/span12 -->
    </div><!-- /row -->
  </div> <!-- /container -->
  <!-- FOOTER -->
  <div id="footerwrap">
    <footer class="clearfix"></footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <p><img src="images/logo.png" alt=""></p>
            <p>Cổng tuyển sinh Đại Học Thủy Lợi - Copyright 2020</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->

</body></html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CupsCMS</title>
    <!-- Bootstrap core CSS -->
    <link href="theme/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="theme/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <style type="text/css">
    body {
      padding-top: 70px;
    }
    </style>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="theme/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background: #292929; margin-top:100px;">



<div class="container">
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <form id="form1" name="form1" method="post" action="inc/fungsi_login.php">
          <center><img src="images/logo.png" width="200" /></center>
          <br />
          <div class="form-group">
            <input name="username" type="text" class="form-control" id="username" placeholder="Masukan Username" required>
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" id="Password" placeholder="Masukan Password" required>
          </div>
          <button type="submit" class="btn btn-info">Masuk</button>

              <?php  $alert = @$_REQUEST['alert']; if(isset($alert)){ ?>

              <br /><br />
              <div class="alert alert-warning alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button> 
                <strong>Oops!</strong> Username atau password tidak sesuai, silahkan ulangi 
              </div>

              <?php } ?>

              <a href="index.php"> &nbsp; <strong>&laquo;</strong> Kembali ke halaman beranda</a>
        </form>
      </div>
      <div class="col-lg-4"></div>
    </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="theme/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="theme/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
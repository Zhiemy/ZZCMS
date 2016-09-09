
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>AWKWA CMS</title>

    <!-- Bootstrap core CSS -->
    <link href="../theme/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../theme/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <style type="text/css">
    body {
      padding-top: 70px;
    }
    </style>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../theme/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ 
   
      mode : "specific_textareas",
      editor_selector : "mceEditor" 
    });</script>
    
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="../images/logo.png" width="100" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php $node = isset($_REQUEST['node']) ? $_REQUEST['node'] : ''; ?>
          <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="index.php?node=modul/posts/data"><span class="glyphicon glyphicon-book"></span> Posts</a></li>
            <li><a href="index.php?node=modul/pages/data"><span class="glyphicon glyphicon-file"></span> Pages</a></li>
            <li><a href="index.php?node=modul/gallery/data"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>
            <li><a href="index.php?node=modul/message/data"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
            <li><a href="index.php?node=modul/user/data"><span class="glyphicon glyphicon-user"></span> User</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

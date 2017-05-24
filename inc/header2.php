</head>
<body>
    <div class="header">
        <div class="container">
            
            <div class="welcome radius3 pull-right text-right">
                <div class="dropdown">
                <span class="wc-prase">WelCome</span>

                <a class="dropdown-toggle btn btn-default btn-xs" style="float: none;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo 'Alam'; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="change-password.php"><i class="fa fa-lock"></i> Change Password</a></li>
                    <li><a href="payments.php"><i class="fa fa-gear"></i> Settings</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>                                                    
                </ul>
                </div>
            </div><!--.welcome-->
            
            <a href="index.php" class="logo">
                <img alt="logo" src="img/logo.png" />
            </a>
        </div>
    </div><!--.header-->
    
    <nav class="navbar navbar-inverse no-radius no-margin-bottom">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo _project; ?></a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">            
            <ul class="nav navbar-nav">
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a target="_blank" href="http://fontawesome.io/icons/">Fonts</a></li>
              <li><a target="_blank" href="http://getbootstrap.com/components/">Components</a></li>              
              <li><a href="#">Contact us</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--.navbar-collapse -->
        </div><!--.container-fluid -->
      </nav>
    
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 c-sm-4 col-md-3 side-bar">
                    <h3>Quick Menu</h3>
                    <ul class="list-group">
                        <li  class="list-group-item"><a href="#">Link 1</a></li>
                        <li  class="list-group-item"><a href="#">Link 2</a></li>
                        <li  class="list-group-item"><a href="#">Link 3</a></li>
                        <li  class="list-group-item"><a href="#">Link 4</a></li>
                        <li  class="list-group-item"><a href="#">Link 5</a></li>
                        <li  class="list-group-item"><a href="#">Link 6</a></li>
                        <li  class="list-group-item"><a href="#">Link 7</a></li>
                        <li  class="list-group-item"><a href="#">Link 8</a></li>            
                    </ul>
                </div><!--.col.side-bar-->

                <div class="col-xs-12 c-sm-8 col-md-9 page-content">
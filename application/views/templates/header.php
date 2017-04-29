<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Call CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/t_home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"> -->

    <!-- End Call CSS -->

    <!-- Call JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/JS/jquery-3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/JS/jquery-3.2.1/jquery.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/JS/login_ind.js" ></script>
    <!-- End Call JS -->
</head>
<body>

<nav class="navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Logo</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Messages</a></li>
      </ul>

      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li> <a id="caret-rotate" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <span class="caret rotate"></span></a>

          <ul class="dropdown-menu">
            <li><a href="#"> Profil </a></li>
            <li><a href="#"> Log Out </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>

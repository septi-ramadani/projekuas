<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ramaponsel</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.svg" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-default navbar-custom">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Ramaponsel</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="<?= $current_page == 'index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>
          <li class="<?= $current_page == 'shop.php' ? 'active' : '' ?>"><a href="shop.php">Shop</a></li>
          <li class="<?= $current_page == 'contact.php' ? 'active' : '' ?>"><a href="contact.php">contact</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" />
          </div>
          <button type="submit" class="btn btn-default">Cari</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <!-- <li>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
          </li> -->
          <li>
          <li class="<?= $current_page == 'login.php' ? 'active' : '' ?>"><a href="login.php">Login</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
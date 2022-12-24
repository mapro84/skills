<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css/main.css" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" src="public/js/javascript-utils.js"></script>
<script type="text/javascript" src="public/js/main.js"></script>
<title>Tips&Notes</title>
</head>

<body>
<header class="navbar navbar-static-top bs-docs-nav" id="top">
<div class="container">
<div class="navbar-header">
<a href="index.php?page=home" class="navbar-brand"><img height="50px" src="public/img/tips-logo4.png" title="Home page - my notes"></a>
</div>
<ul class="nav navbar-nav">
<li>
<a href="index.php?page=skills"><img src="public/img/skills.png" title="Skills"></a>
</li>
<li>
<a href="index.php?page=skill_name&name=PHP"><img src="public/img/php.png" title="PHP"></a>
</li>
<li>
<a href="index.php?page=skill_name&name=Python"><img src="public/img/python.png" title="Python"></a>
</li>
<li>
<a href="index.php?page=skill_name&name=Linux"><img src="public/img/linux.png" title="Linux"></a>
</li>
<li>
<a href="index.php?page=skill_name&name=MySQL"><img src="public/img/mysql.png" title="Mysql"></a>
</li>
<li>
<a href="index.php?page=skill_name&name=HTML"><img src="public/img/html-logo.svg" title="Html"></a>
</li>
<li class="back-office-logo">
<a href="index.php?page=bo&action=add"><img src="public/img/back-office.png" title="Back-office"></a>
</li>
</ul>
<button class="btn float-right" onclick="disconnect()"><i class="fa fa logout icon"></i>Logout</button>
</div>
</header>

<div class="container">
  <div class="row align-items-start">
  LEFT
    <div class="col">
      One of three columns LEFT
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row align-items-center">
  CENTER
<div class="col">
      One of three columns CENTER
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row align-items-end">
  RIGHT
    <div class="col">
      One of three columns RIGHT gauche
    </div>
    <div class="col">
      One of three columns centre
    </div>
    <div class="col">
      One of three columns droite
    </div>
  </div>
  
    <div class="row">
  RIGHT
    <div class="col">
      One of three columns RIGHT gauche
    </div>
    <div class="col">
      One of three columns centre
    </div>
    <div class="col">
      One of three columns droite
    </div>
  </div>
  
</div>



<div class="tipscontent container">
<?php
echo $content;
?>
</div>

</body>
</html>
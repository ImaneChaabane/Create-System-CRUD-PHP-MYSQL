<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include('function/boostrap.php') ?>
   <link rel="stylesheet" href="style/style.css">

    <title>Library</title>
    <style>
      .BGimage{
        background-image: url('img/bg.jpg');
        width:100%;
        height: calc(100% - 88px);
        background-size: cover;
      }
      .BGcolor{
        background: #0000007d;
        width:100%;
        height: calc(100% - 88px);
        position: absolute;
      }
    </style>
</head>
<body>
<?php include('function/db.php') ?>
<?php include('header.php') ?>
<?php include('function/function.php') ?>
<div class="BGcolor" ></div>

<div class="BGimage">

<section id="funnnels">
  <div class="container">
    <div class="row padd">
      <div class="col-sm-15 text-center">
          <div class="wrap">
            <h3>READ<br> MORE<br> BOOKS</h3><br>
            <form action="onepage.php" method="POST">
            <input type="text" name="book" placeholder="Find Your Book Here"> 
            <div><input type="submit" class="btnStyle" name="shearch" value="Search" /></div>
            </form>
          </div>
          
        <div class="clearfix"></div>
    
      </div>
      

    </div>
  </div>
</section>
</div>
    
     
</body>
</html>
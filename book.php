
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include('function/boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Library</title>
</head>
<body>
      
        <?php
     include('function/db.php');
      include('header.php') ;
      require('function/function.php');
     ?>
        <!--start of form to add books-->
       <div class=" main-container"> 
      <div class="container">
           <form class="form-inline mb-3">
                    <div class="ilinetext">
                    <h5 class="title">NEW BOOK :</h5>
                    </div>
                    </form>
          
        <div class="card-deck">

<?php 
    $requete= "SELECT * FROM books ";
    $requete_run=mysqli_query($connection, $requete);
    if (mysqli_num_rows($requete_run)>0){
        while ($row= mysqli_fetch_assoc($requete_run)){
            ?>
            <div class="col-sm-4">
            <form method="post" action="">
            <div class="card">

        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
         <?php echo '<img class="card-img-top" src="upload/'.$row['image'].'" alt="Card image cap">'?>
        <div class="card-body">
        <h5 class="card-title title"><?php echo $row['title']?></h5>
    </div>
    </div>

    </form>
</div>
            <?php 
        }
    }else {
        echo "rien";
    }
    ?>
  
 
  </div>
</div>
 </div>
        <?php include('footer.php') ?>
        </div>
</body>
</html>
<?php
include('db.php');


if(isset($_POST['Update']))
{
    
$id = $_POST['edit_id'];
$title = $_POST['title'];
$auteur = $_POST['auteur'];
$prix = $_POST['Prix'];
$Qstock = $_POST['QStock'];
$image = addslashes($_FILES["upd_img"]['name']);
$publishedat = $_POST['publishedat'];

if($title=="" || $auteur=="" || $publishedat=="" || $prix=="" || $Qstock=="" ){
$_SESSION['status'] = "Pardon!! Veuillez remplire tous les champs!";
header ('location: ../books.php');
return;
}

 if(empty($image)){
    $query_image= "SELECT image FROM books WHERE ID = '$id'";
    $result=mysqli_query($connection, $query_image);
    $resultCheck = mysqli_num_rows($result);
	while($row = $result->fetch_assoc()) {
		$image = $row['image'];
		
	}
}

    $query = " UPDATE books SET title = '$title' , auteur ='$auteur', Prix = '$prix',QStock='$Qstock', 
    image = '$image',publishedat='$publishedat' WHERE ID = '$id'";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES["upd_img"]["tmp_name"], "../upload/".$_FILES["upd_img"]["name"]);

        $_SESSION['success'] = "Votre modification a été bien effectuée";
        header('Location: ../books.php');
    }else
    {
        $_SESSION['status']= "Votre modification n'as pas été effectuée";
        header('Location: ../books.php');
    }
}
?>
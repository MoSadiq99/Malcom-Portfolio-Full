<?php include('../includes/dbConn.php');?>

<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "DELETE FROM gallery WHERE idGallery = '$id'";

$result = mysqli_query($conn, $query);

if (!$result){
    die("Query failed".mysqli_error($conn));
}
else{
    header("Location:adminPanel.php?delete_msg= You have successfully deleted the Image.");
}

?>


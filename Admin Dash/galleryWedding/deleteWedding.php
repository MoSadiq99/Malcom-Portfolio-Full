<?php include('../includes/dbConn.php');?>

<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "DELETE FROM weddinggallery WHERE id = '$id'";

$result = mysqli_query($conn, $query);

if (!$result){
    die("Query failed".mysqli_error($conn));
}
else{
    header("Location:adminWedding.php?delete_msg= You have successfully deleted the Image.");
}

?>


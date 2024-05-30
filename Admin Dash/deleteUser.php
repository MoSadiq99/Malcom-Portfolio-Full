<?php include('includes/dbConn.php');?>

<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "DELETE FROM users WHERE id = '$id'";

$result = mysqli_query($conn, $query);

if (!$result){
    die("Query failed".mysqli_error($conn));
}
else{
    header("Location:register.php?delete_msg= You have successfully deleted the User.");
}

?>
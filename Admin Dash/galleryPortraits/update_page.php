<?php include('../includes/dbConn.php'); ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM gallery WHERE idGallery = '$id'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Couldn't get gallery" . mysqli_error($conn));
    } else {

        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php

if (isset($_POST['update'])) {

    if(isset($_GET['id_new'])){
        $id_new = $_GET['id_new'];
    }

    $imgTitle = $_POST['fileTitle'];
    $imgDesc = $_POST['fileDesc'];

    $query = "UPDATE gallery SET titleGallery = '$imgTitle', descGallery = '$imgDesc' WHERE idGallery = '$id_new'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Couldn't get gallery" . mysqli_error($conn));
    } else {
        header("Location:adminPanel.php?update_msg= You have successfully updated your gallery");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="adminPanel.css">
</head>

<body>

    <form action="update_page.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <input type="text" name="fileName" placeholder="File name.." class="form-control" value="">
        </div>
        <div class="form-group">
            <input type="text" name="fileTitle" placeholder="Image title.." class="form-control" value="<?php echo $row['titleGallery']; ?>">
        </div>
        <div class="form-group">
            <input type="text" name="fileDesc" placeholder="Image Description.." class="form-control" value="<?php echo $row['descGallery']; ?>">
        </div>
        <div class="form-group">
            <input type="file" name="file" class="form-control" value="">
        </div>
        <input type="submit" class="btn btn-primary" name="update" value="Update" />
    </form>

</body>

</html>
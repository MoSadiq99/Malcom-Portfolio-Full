<?php include('../includes/dbConn.php'); ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM naturegallery WHERE idImg = '$id'";

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

    if (isset($_GET['id_new'])) {
        $id_new = $_GET['id_new'];
    }

    $imgTitle = $_POST['fileTitle'];
    $imgDesc = $_POST['fileDesc'];
    $imgFile = $_POST['file'];

    $query = "UPDATE naturegallery SET titleImg	 = '$imgTitle', descImg = '$imgDesc' WHERE idImg = '$id_new'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Couldn't get gallery" . mysqli_error($conn));
    } else {
        header("Location:adminNature.php?update_msg= You have successfully updated your image details");
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

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adminPanel.css">

</head>

<body>

    <!-- <form action="update_page.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <input type="text" name="fileName" placeholder="File name.." class="form-control" value="">
        </div>
        <div class="form-group">
            <input type="text" name="fileTitle" placeholder="Image title.." class="form-control" value="<?php echo $row['titleImg']; ?>">
        </div>
        <div class="form-group">
            <input type="text" name="fileDesc" placeholder="Image Description.." class="form-control" value="<?php echo $row['descImg']; ?>">
        </div>
        <div class="form-group">
            <input type="file" name="file" class="form-control" value="">
        </div>
        <input type="submit" class="btn btn-primary" name="update" value="Update" />
    </form> -->

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <?php
                    $htmlContent = '
                    <div class="col-lg-6 card shadow-sm">
                        <img src="../img/natureUpload/' . $row["fullNameImg"] . '" alt="">
                        
                        <div class="card-body">
                                <h5>' . $row["titleImg"] . '</h5>
                                <hr class="hr">
                                <p class="card-text">
                                ' . $row["descImg"] . '
                                </p>
                        </div>
                    </div>
                ';
                echo $htmlContent
                ?>
                
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Update Image Details</h1>
                        </div>
                        <form action="updateNature.php?id_new=<?php echo $id; ?>" method="post">
                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="fileName" placeholder="File name.." class="form-control" value="<?php echo $row['fullNameImg']; ?>">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="title">Image Title:</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="fileTitle" placeholder="Image title.." class="form-control" value="<?php echo $row['titleImg']; ?>">
                            </div>
                            <div class="form-group mt-5">
                                <label for="title">Image Description:</label>
                            </div>
                            <div class="form-group mb-5">
                                <input type="text" name="fileDesc" placeholder="Image Description.." class="form-control" value="<?php echo $row['descImg']; ?>">
                            </div>
                            <!-- <div class="form-group">
                                <input type="file" name="file" class="form-control" value="">
                            </div> -->
                            <div class="modal-footer mt-5">
                                <button type="button" class="btn btn-danger  mt-3" data-bs-dismiss="modal" onclick="window.location.href='adminNature.php';">Go Back</button>
                                <input type="submit" class="btn btn-primary mt-3" name="update" value="Update" />
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
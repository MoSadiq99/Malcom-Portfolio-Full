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

    $newFileName = $_POST['fileName'];

    if (empty($newFileName)) {
        $newFileName = "gallery";
    } else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }

    $imgTitle = $_POST["fileTitle"];
    $imgDesc = $_POST["fileDesc"];
    $file = $_FILES['file'];
    $fileName  = $file["name"];
    $fileType  = $file["type"];
    $fileTempName  = $file["tmp_name"];
    $fileError  = $file["error"];
    $fileSize  = $file["size"];
    var_dump($fileName);
    $fileExtension = explode(".", $fileName);
    $fileActualExtension = strtolower(end($fileExtension));
    var_dump($fileActualExtension);
    $allowed = array("jpg", "jpeg", "png", "gif");
    $fileMaxFileSize = 10000;

    if (in_array($fileActualExtension, $allowed)) {

        if ($fileError === 0) {

            if ($fileSize < $fileMaxFileSize) {

                $imageFullName = $newFileName . "." . uniqid("", false) . "." . $fileActualExtension;
                $fileDestination = "../img/natureUpload/" . $imageFullName; // or ../images/gallery -  if this file in a folder

                include_once "../includes/dbConn.php";

                if (empty($imageTitle) || empty($imageDesc)) {
                    exit();
                    
                } else {

                    if (isset($_GET['id_new'])) {
                        $id_new = $_GET['id_new'];
                    }
                
                    $query = "UPDATE naturegallery SET titleImg	 = '$imgTitle', descImg = '$imgDesc', fullNameImg = '$imageFullName' WHERE idImg = '$id_new'";
                
                    $result = mysqli_query($conn, $query);
                
                    if (!$result) {
                        die("Couldn't get gallery" . mysqli_error($conn));
                    } else {
                        move_uploaded_file($fileTempName, $fileDestination);
                        header("Location:adminPanel.php?update_msg= You have successfully updated your gallery");
                    }

                }
            } else {
                echo "Your file is too large";
                exit();
            }
        } else {
            echo "You need to upload a proper file type!";
            exit();
        }
    } else {
        echo "type error!";
        exit();
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

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Update User Profile!</h1>
                        </div>
                        <form action="update_page.php?id_new=<?php echo $id; ?>" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="fileName" placeholder="File name.." class="form-control" value="">
                                </div>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="update" value="Update" />
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
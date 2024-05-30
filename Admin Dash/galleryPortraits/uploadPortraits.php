<?php

if (isset($_POST['submit'])) {
    $newFileName = $_POST['fileName'];

    if (empty($newFileName)) {
        $newFileName = "gallery";
    } else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }

    $imageTitle = $_POST["fileTitle"];
    $imageDesc = $_POST["fileDesc"];
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
    $fileMaxFileSize = 999999999000;

    if (in_array($fileActualExtension, $allowed)) {

        if ($fileError === 0) {

            if ($fileSize < $fileMaxFileSize) {

                $imageFullName = $newFileName . "." . uniqid("", false) . "." . $fileActualExtension;
                $fileDestination = "../img/portraitsUpload/" . $imageFullName; // or ../images/gallery -  if this file in a folder

                include_once "../includes/dbConn.php";

                if (empty($imageTitle) || empty($imageDesc)) {
                    exit();
                    
                } else {

                    $selectSql = "SELECT * FROM gallery;";
                    $stmt = mysqli_stmt_init($conn);
                    $result = $conn->query($selectSql);
   
                    $rowCount = $result->num_rows;
                    $setImageOrder = $rowCount + 1;

                    $sql = "INSERT INTO gallery (titleGallery,	descGallery, imgFullNameGallery, orderGallery) VALUES (?, ?, ?, ?);";

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed";
                    } else {

                        mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                        mysqli_stmt_execute($stmt);

                        move_uploaded_file($fileTempName, $fileDestination);
                        header("location: adminPortraits.php?insert_msg=Your data has been inserted successfully");
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

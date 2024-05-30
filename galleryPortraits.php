<?php
session_start();
// var_dump($_SESSION['username']);
//$_SESSION["username"] = "Admin";
include("dbUpload.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <?php include("header.html"); ?>
    <div class="container">
        <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3"> -->
            <?php
            include_once 'dbUpload.php';

            $sql = "SELECT * FROM gallery ORDER BY idGallery DESC";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statement failed";
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $colIndex=1;    
                while ($row = mysqli_fetch_assoc($result)) {
                    $htmlContent='  
                    <div class="col-lg-4">
                        <div class="card shadow-sm mb-3 mt-3">
                            <img src="./Admin Dash/img/portraitsUpload/'.$row["imgFullNameGallery"].'" class="bd-placeholder-img card-img-top" width="100%" height="350" alt=""/>
                            <div class="card-body">
                                <h3>'.$row["titleGallery"].'</h3>
                                <p class="card-text">
                                '.$row["descGallery"].'
                                </p>
                            </div>
                        </div>
                    </div>';
                    if($colIndex==1){
                        $htmlContent='<div class="row">'.$htmlContent;
                    }else if($colIndex>3){
                        $htmlContent=$htmlContent.'</div>';
                        $colIndex=0;
                    }
                    $colIndex++;
                    echo $htmlContent;
                }
            }
            
            ?>
        <!-- </div> -->
    </div>
    <!-- <div>
        <?php
        if (isset($_SESSION['username']) && $_SESSION['username']=='admin') {
            echo '<div>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="fileName" placeholder="File name..">
            <input type="text" name="fileTitle" placeholder="Image title..">
            <input type="text" name="fileDesc" placeholder="Image Description..">
            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>
        </form>
    </div>';
        }
        ?>
    </div> -->
</body>
</html>
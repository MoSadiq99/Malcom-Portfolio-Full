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

            $sql = "SELECT * FROM weddinggallery ORDER BY orderImg DESC";
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
                        <div class="card shadow-sm mb-5">
                            <img src="./Admin Dash/img/weddingUpload/'.$row["fullNameImg"].'" class="bd-placeholder-img card-img-top" width="100%" height="400px" alt=""/>
                            <div class="card-body">
                                <h3>'.$row["titleImg"].'</h3>
                                <p class="card-text">
                                '.$row["descImg"].'
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
</body>
</html>
<?php
include("dbUpload.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        form {
            width: 500px;
            margin: 0 auto;
        }

        label,
        input,
        textarea,
        select {

            display: block;
            margin-bottom: 10px;
            /* border-radius: 7px; */
            padding-left: 30px;
        }

        input,
        textarea,
        select {
            background: #ffffe6;
            border: none;
            outline: none;
            padding: 50px;
        }

        label {
            font-weight: 500;
            color: black;
            /* text-shadow: 1px 1px #003366; */
        }

        input,
        textarea {

            width: 100%;
            padding: 20px;
            padding-left: 50px;
            /* border-radius: 5px; */
        }

        input[type="submit"] {
            background-color: #ffd633;
            color: black;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 7px;

        }

        input[type="text"],
        textarea {
            background-color: #ffffe6 !important;
        }

        select,
        textarea {
            background-color: #ffffe6 !important;
        }


        input[type="submit"]:hover {
            background-color: #e6b800;
        }
    </style>
</head>

<body>
    <?php 
        include("header.html");
    
    ?>

    <div class="container-fluid bg-img">
        <div class="row justify-content-center text-center">
            <div class="col-md-6 col-lg-6 pt-5">
                <h5 style="
            color: black;
            text-shadow: 1px 1px #ffff80;
            line-height: 1.5em;">"Do not hire a man <br> who does your work for money, <br> but him who does it for
                    love of it"</h5><br>
                <p style="color: black; margin-bottom: 50px; margin-top: -20px;">-Henry David Thoreau-</p>
            </div>
        </div>
       
       <?php
        if (isset($_GET['submit_msg'])) {

            ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Hey!</strong>  <?php echo "<h6>" . $_GET['submit_msg'] . "</h6>"; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php
           
        }
        ?>

        <form action="contact.php" class="bg-secondary bg-gradient p-2 text-dark bg-opacity-50 rounded-3 text-white" method="post">

            <label for="name">Name</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Contact Details</label>
            <input class="form-control" type="text" id="details" name="contact_details" placeholder="Your Contact Details" required>

            <label for="select">Hire me for</label>

            <select name="job" id="" class="form-select" onchange='checkvalue(this.value)'>
                <option value="none">Select Your Preference</option>
                <option value="portrait">Portrait Photography</option>
                <option value="wedding">Wedding Photography</option>
                <option value="commercial">Commercial Photography</option>
                <option value="other">Other</option>

            </select>
            <input type="text" name="dropdown" id="dropdown" placeholder="Type Here Your Preference" style='display:none' />

            <!-- <input type="text" name="subject" placeholder="subject"> -->

            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" required></textarea>

            <input type="submit" name="submit">
        </form>
    </div>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>

<?php


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $contactDetails = $_POST['contact_details'];
    $job = $_POST['job'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($contactDetails)) {

        if ($conn->connect_error){
            die("Connection error: " . $conn->connect_error);
        }else{
            $stmt = $conn->prepare("INSERT INTO contactdetails (name, contactDetails, job, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $contactDetails, $job, $message);
            $stmt->execute();

            header("location: contact.php?submit_msg=Your info has been submitted successfully");

        }
    }

}

?>

<?php 
include("footer.html");
?>
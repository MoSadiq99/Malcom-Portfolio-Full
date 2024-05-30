<?php
session_start();
$_SESSION['username'] = null;
if (isset($_POST['submit'])) {

    if ($_POST['username'] != null) {

        $_SESSION['username'] = $_POST['username'];
        header("Location: admin dash/register.php");
    }
}


?>
<link rel="stylesheet" href="styles.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="./Images/Pics/man-with-camera.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="login.php" method="POST">

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0">Malcom's Website</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3 " style="letter-spacing: 1px;">Sign into your account
                                    </h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" placeholder="username..">
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" placeholder="password">
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
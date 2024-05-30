<?php

include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- <link rel="stylesheet" href="assets\CSS\aboutMe.css"> -->
    <link rel="stylesheet" href="assets/CSS/aboutMe.css">
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    
    <div class="container py-5 d-none d-lg-block">
        <!-- main banner -->
        <section style="background-image: url('Images/Pics/male-hand-holding-professional-camera-street.jpg');" class="bgImage img-responsive" id="home">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 hero-text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 hero-text">
                        <h5 class="hero_title">Hi, it's me Malcolm</h5>
                        <p class="hero_desc">I'm a freelance photographer in Edinburgh, Scotland</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    
    <!-- about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center" style="font-family: Garamond;">About Me</h1>
            <div class="row ">

                <div class="col-lg-1 mt-5"></div>

                <div class="col-lg-4 mt-5">
                    <img src="./Images/Pics/man-with-camera.jpg" class="imageAboutPage img-fluid" alt="" style="height: 600px;">
                </div>

                <div class="col-lg-1 mt-5"></div>

                <div class="col-lg-5 mt-5 mb-5">
                    <p class="lead fs-6 about-hero mt-3"> Hi, I'm Malcolm Lismore, a freelance photographer based in Scotland. I'm passionate about
                        capturing the natural world, but I also love taking photos of people and special events.

                        I'm excited to have this website as a way to showcase my photography and allow potential clients
                        to learn more about my services. I'm committed to providing my clients with high-quality images
                        and memories that will last a lifetime.
                    </p>
                    
                    <div class="row mt-5 ms-3">

                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="fs-6"><strong>Name:</strong> Malcolm Lismore</li>
                                <li class="fs-6"><strong>Age:</strong> 28</li>
                                <li class="fs-6"><strong>Occupation:</strong> Freelance Photographer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p class="fs-6 lead about-hero"> Whether you're looking for a photographer to capture your wedding day, your family's
                            portraits, or the beauty of the Scottish landscape, I'm here to help. I'm also available for
                            commercial and editorial photography projects.
                            Please don't hesitate to contact me if you have any questions or would like to book a
                            consultation.
                        </p>
                    </div>
                </div>

                <div class="col-lg-1 mt-5"></div>

            </div>
    </section>

    <div class="container">
            <div class="row mb-4">
                <div class="col-lg-7 text-center mx-auto">
                    <h2 class="mt-5 mb-4" style="font-family: Garamond;">My Skill Set</h2>
                    <p>"Light plays on a surface, a fleeting glance across a face, a child's laughter echoing in the wind – these are the sparks that ignite my creative fire. I'm not just a photographer, I'm a visual storyteller, a painter with light. My portfolio is a collection of moments I've frozen in time, each one a glimpse into the world I see and the emotions it inspires."</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <div class="progress mt-5">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="number mt-3">95%</div>
                        <p class="caption" style="font-family: Candara;">Wedding</p>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="progress mt-5">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 98%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="number mt-3">98%</div>
                        <p class="caption" style="font-family: Candara;">Nature</p>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="progress mt-5">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="number mt-3">95%</div>
                        <p class="caption" style="font-family: Candara;">Portraits</p>
                    </div>
                </div>
            </div>
    </div>

    <!-- services section-->
    <!-- <section id="services">
        <div class="container mt-5">
            <h1 class="text-center">Photography Services</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-camera-retro"></i>
                            <h4 class="card-title mt-3">Portrait Photography</h4>
                            <p class="card-text mt-3"> Portrait photography is a type of photography that’s commonly thought of as a studio setting with a formal pose. This type of photography is used to capture beautiful images of people and is often used for family portraits. 
                            </p>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-camera-retro'></i>
                            <h4 class="card-title mt-3">Event Photography</h4>
                            <p class="card-text mt-3">Event photography is a popular type of photography that captures special events such as weddings, parties, and other celebrations. Event photographers strive to create images that tell a story and provide a visual record of the event or celebration.
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-camera-retro'></i>
                            <h4 class="card-title mt-3">Product Photography</h4>
                            <p class="card-text mt-3">Product photography is a type of photography that captures products for commercial use. This type of photography is used to showcase products and allow customers to see what a product looks like before they purchase it. 
                            </p>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-camera-retro'></i>
                            <h4 class="card-title mt-3">Studio Photography</h4>
                            <p class="card-text mt-3">Studio photography is a type of photography that’s typically done in a photo studio. This type of photography can be done with a single person or with a group of people. 
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-camera-retro'></i>
                            <h4 class="card-title mt-3">Creative Photography</h4>
                            <p class="card-text mt-3">Creative photography is a type of photography that’s more experimental and expressive. This type of photography can be done in a studio or on location and often uses props that help tell a story. 
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-camera-retro'></i>
                            <h4 class="card-title mt-3">Lifestyle Photography</h4>
                            <p class="card-text mt-3">Lifestyle photography is a type of photography that focuses on creating real and authentic images. While lifestyle photography can be done anywhere, it’s often done in a home setting to help create a realistic and authentic image.
                            </p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section> -->
</body>

</html>

<?php 
include("footer.html");
?>
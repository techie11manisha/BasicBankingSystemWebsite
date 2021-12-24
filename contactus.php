<?php
if (array_key_exists('fname', $_POST) AND array_key_exists('email', $_POST) AND array_key_exists('message', $_POST))
{
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $formcontent = "From $name \n Message: $message";
    $mailTo = "mamtakumari17713@gmail.com";
    $subject = "Contact Form Submission";
    $mailheader = "From: $email \r\n";
    mail($mailTo, $subject, $formcontent, $mailheader) or die("Error");
    echo '<script type="text/javascript">';
    echo ' alert("Thank You....")';  
    echo '</script>';
} 
?>

<!doctype html>
<html lang="en">
    <head>
        <title>TSF Bank</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="banking.js"></script>
        <style type="text/css">
            .bank-name
            {
                position: relative;
                animation: mymove 5s infinite;
            }
            @keyframes mymove 
            {
                0%{color: black;}
                33%{color: red;}
                66%{color: yellow;}
                100%{color: white;}
                from {left: 0vw;}
                to {left: 30vw;}
            }
            #about-us
            {
                color: white;
                border: none;
                background: none;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }
            #about-us:hover
            {
                background-color: #0cbaba;
                background-image: linear-gradient(315deg, #0cbaba 0%, #380036 74%);
            }
            #about-us:active 
            {
                background-color: #3e8e41;
                box-shadow: 0 1.2vw #666;
                transform: translateY(1vw);
            } 
            #home
            {
                color: white;
                border: none;
                background: none;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }
            #home:hover
            {
                background-color: #0cbaba;
                background-image: linear-gradient(315deg, #0cbaba 0%, #380036 74%);
            }
            #home:active 
            {
                background-color: #3e8e41;
                box-shadow: 0 1.2vw #666;
                transform: translateY(1vw);
            } 
            #phone
            {
                height: 40px;
                border: none;
                background: none;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
            }
            #phone:hover
            {
                border-bottom: 4px solid white;
            }
            #phone:active 
            {
                background-color: #3e8e41;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
            #email
            {
                color: black; 
                font-size: 18px;
                height: 40px;
                border: none;
                background: none;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
            }
            #email:hover
            {
                border-bottom: 4px solid white;
            }
            #email:active 
            {
                background-color: #3e8e41;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
            #contact
            {
                float: left; 
                width: 50vw;
                margin-top: 5vw; 
                margin-left: 25vw; 
                margin-bottom: 5vw; 
                border: 0.2vw solid white;
                border-radius: 2vw;  
                padding: 2vw;; 
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .form-button
            {
                border: 1px solid black;
                background-color: #2FC3AB;
                cursor: pointer;
                color: black; 
                font-size: 2vw; 
                font-weight: bold;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                padding:0.5vw; 
                border-radius: 1.5vw;
                border: none;
            }
            .form-button:hover
            {
                background-color: #f7b42c;
                background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);
            }
            .form-button:active 
            {
                background-color: #3e8e41;
                box-shadow: 0 1.2vw #666;
                transform: translateY(1vw);
            }

        </style>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);">
            <div class="container-fluid">
              <a class="navbar-brand bank-name" href="#" style="font-weight: bold; font-size: 3vw; margin-right: 50vw;">
                <span class="fa-stack fa-lg" style="font-size: 2vw;" class="bank-name">
                  <i class="fa fa-square-o fa-stack-2x"></i>
                  <i class="fa fa-bank fa-stack-1x"></i>
                </span>TSF Bank</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <button id="home" onclick="Home()">
                      <a class="nav-link active" aria-current="page" href="#" style="font-size: 2vw; font-weight: bold; color:white;">
                        <span class="fa-stack fa-lg" style="color: white; font-size: 1.5vw;">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-home fa-stack-1x"></i>
                        </span>
                        Home
                      </a>
                    </button>
                  </li>
                  <li>
                      <div style="width: 0.1vw; height: 95%; background-color: black;"></div>
                  </li>
                  <li class="nav-item">
                    <button id = "about-us" onclick="AboutUsPage()">
                      <a class="nav-link" href="#" style="font-size: 2vw; font-weight: bold; color: white;">
                        <span class="fa-stack fa-lg" style="color: white; font-size: 1.5vw;">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-info fa-stack-1x"></i>
                        </span>
                        About Us
                      </a>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="container-fluid" style="overflow: hidden; padding: 1vw; background-color: #d4418e; background-image: linear-gradient(315deg, #d4418e 0%, #0652c5 74%);">
            <!-- Content here -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" style="height: 30vw;">
                <div class="carousel-item active">
                  <img src="images/contact1.jpg" class="d-block w-100" alt="..." style="height: 30vw">
                </div>
                <div class="carousel-item">
                  <img src="images/contact2.jpg" class="d-block w-100" alt="..." style="height: 30vw;"> 
                </div>
                <div class="carousel-item">
                  <img src="images/contact3.jpg" class="d-block w-100" alt="..." style=" height: 30vw;">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div id="contact">
                <form method = "POST">
                    <center><h3 style="color: white;">Contact Us</h3>
                    <label style="color: black; font-size:2vw; font-weight:bold;">Name</label> 
                    <input type = "text" name = "fname" style="color: white; width: 30vw;" required ><br>
                    <label style="color: black; font-size:2vw; font-weight:bold;">Email</label> 
                    <input type = "text" name = "email" style="color: white; width: 30vw;" required><br>
                    <label style="color: black; font-size:2vw; font-weight:bold; margin-right: 27vw;">Message</label><br>
                    <textarea name = "message" rows = "6" cols = "30" style="color: black; width: 35vw;" required></textarea><br><br>
                    <input type = "submit" value = "Send" class="form-button">&nbsp;&nbsp;<input type = "reset" value = "Clear" class="form-button"></center>
                </form>
            </div>
        </div>
            
        <!-- Footer -->
        <footer class="bg-dark text-center text-white">
          <!-- Grid container -->
          <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button">
                <i class="fa fa-facebook"></i>
              </a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/" role="button">
                <i class="fa fa-twitter"></i>
              </a>

              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/" role="button">
                <i class="fa fa-google"></i>
              </a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button">
                <i class="fa fa-instagram"></i>
              </a>

              <!-- Linkedin -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/" role="button">
                <i class="fa fa-linkedin"></i>
              </a>

              <!-- Github -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/" role="button">
                <i class="fa fa-github"></i>
              </a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links -->
            <section class="">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col">
                  <h5 class="text-uppercase">TSF Bank</h5>

                  <ul class="list-unstyled mb-0">
                    <li><a href="aboutus.html" style="color: white; font-size: 1.5vw; text-decoration: none;">About Us</a></li>
                          <li><a href="contactus.php" style="color: white;; font-size: 1.5vw; text-decoration: none;">Contact Us</a></li>  
                          <li><a href="privacy.html" style="color: white;; font-size: 1.5vw; text-decoration: none;">Privacy Policy</a></li>      
                          <li><a href="disclaimer.html" style="color: white;; font-size: 1.5vw; text-decoration: none;">Disclaimer</a></li>   
                  </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col">
                  
                    <span class="fa-stack fa-lg" style="color: white;">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <i class="fa fa-phone fa-stack-1x"></i>
                    </span>
                    <span style="color: white; font-size: 1.7vw; font-weight: bold;">Give us a ring</span><br>
                    <button id="phone"><a href="tel:1234567890" style="color: white; font-size: 1.5vw; text-decoration: none;">+911234567890</a></button><br><br>
                    <span class="fa-stack fa-lg" style="color: white;">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <i class="fa fa-envelope fa-stack-1x"></i>
                    </span>
                    <span style="color: white; font-size: 1.7vw; font-weight: bold;">Mail us</span><br>
                    <button id = "email"><a href="mailto:tsf@bank.com" style="color: white; font-size: 1.5vw; text-decoration: none;">tsf@bank.com</a></button>
                
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="https://tsf@bank.com/">tsf@bank.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>
</html>
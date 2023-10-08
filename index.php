<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;

    $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: mihirpatelunjha31@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="ap.js"></script> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Go Trip</title>

   
</head>

<body>

    <body>

        <!--===========Nav Bar=================-->
        <section class="nav-bar" id="ban">
            <div class="logo">Go Trip</div>
            <ul class="menu">
                <li><a href="#">home</a></li>

                <li><a href="#ser">package</a></li>
                <li><a href="#about">about us</a></li>
                <li><a href="#con">contact us</a></li>
            </ul>
            </div>

        </section>
        <!--===============Banner================-->
        <section class="banner">
            <div class="banner-text-item">
                <div class="banner-heading">
                    <h1>Find your Next tour!</h1>
                </div>
                <a href="bus.html" target="_blank" class="book">Book A Bus Ticket</a>
                <a href="train.html" target="_blank" class="book">Book A Train Ticket</a>
                <a href="flight.html" target="_blank" class="book">Book A Plane Ticket</a>
                <a href="hotel.html" target="_blank" class="book">Book A Hotel Ticket</a>
            </div>
        </section>

        <!--=========Services===============-->
        <section class="services">
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/tour-guide_onzla9.png">
                <h2>8000+ Our Local Guides</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293738/reliability_jbpn4g.png">
                <h2>100% Trusted Tour Agency</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293635/experience_a3fduk.png">
                <h2>28+ Years of Travel Experience</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/feedback_s8z7d9.png">
                <h2>98% Our Travelers are Happy</h2>
            </div>
        </section>
        <!--==============Places===================-->
        <section class="places" id="ser">
            <div class="places-text">
                <small>FEATURED TOURS PACKAGES</small>
                <h2>Favourite Places</h2>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img
                                src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293736/james-wheeler_xqmq2y.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Dark Forest Adventure</h2>
                        <p class="cost">$1870 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Vancouver, Canada</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293755/paris_uj8wum.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Dark Forest Adventure</h2>
                        <p class="cost">$1900 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Paris, France</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293955/monaco_usu7xb.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Dark Forest Adventure</h2>
                        <p class="cost">$1130 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Monaco, Monaco</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img
                                src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293874/switzerland_tubxcm.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Dark Forest Adventure</h2>
                        <p class="cost">$2000 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Bern, Switzerland</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293673/korea_bxrcj5.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Dark Forest Adventure</h2>
                        <p class="cost">$170 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Seoul, South Korea</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img
                                src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293673/night-4336403_1920_demehp.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Dark Forest Adventure</h2>
                        <p class="cost">$187 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Tokyo, japan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===========About Us===============-->
        <section class="about">
            <div class="about-img">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293719/outdoor_tjjhxk.jpg">
            </div>
            <div class="about-text" id="about">
                <small>ABOUT OUR COMPANY</small>
                <h2>We are Go Trip Ravels Support Company</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud</p>

                <label><input type="checkbox" checked>Lorem ipsum dolor sit amet</label>
                <label><input type="checkbox" checked>consectetur adipisicing elit</label>
                <label><input type="checkbox" checked>Architecto atque consequuntur</label>
                <label><input type="checkbox" checked>cupiditate doloremque ducimus</label>
                <a href="#">ABOUT US</a>
            </div>
        </section>
        <section class="contact" id="con">

            <div class="contact-text">
                <!-- <h2>Contact <span>Me</span></h2> -->
            </div>
            <div class="m">
                <div class="list">
                    <h4>MEET US !</h4>
                    <div>
                    <i class="fa fa-phone" style="font-size:28px;color:black"> <spna></spna><a href="#">6356157432</a></i>
                    <br>
                    <br>
                    <br>
                    <i class="fa fa-envelope" style="font-size:28px;color:rgb(19, 19, 19)"><spna>      </spna><a href="#">mihirpatelunjha31@gmail.com</a></i>
                    <br>
                    <br>
                    <br>
                    <i style='font-size:24px' class='fas'>&#xf276;<span>  </span></i>
                    <i class='fas fa-map-marker-alt' style='font-size:28px;color:rgb(17, 16, 16)'><spna>      </spna><a href="#">Ahemedabad ,gujarat</a></i>

                </div>
                </div>
                <div class="contact-form"  >
                    <form  action=""   method="post" autocomplete="off" id="myForm">
                      <input type="text" name="name" class="input"  placeholder="Your Name" required>
                      <input type="email" name="email" class="input" placeholder="Your Email" required>
                      <input  type="tel" name="phone" class="input"   placeholder="Your Mobile Number" required>
                      <textarea name="message" cols="35" rows="10"  class="input" placeholder="How Can I Help You" required></textarea>
                      <input type="submit" value="Send" name="submit" class="submit" required>
                    </form>
            </div>
        </section>

        <!--===========Footer=================-->
        <div class="footer" id="ft">
            <div class="links">
                <h3>Quick Links</h3>
                <ul>
                    <li>Offers & Discounts</li>
                    <li>Get Coupon</li>
                    <li>Contact Us</li>
                    <li>About</li>
                </ul>
            </div>
            <div class="links">
                <h3>New Products</h3>
                <ul>
                    <li>Woman Cloth</li>
                    <li>Fashion Accessories</li>
                    <li>Man Accessories</li>
                    <li>Rubber made Toys</li>
                </ul>
            </div>
            <div class="links">
                <h3>Support</h3>
                <ul>
                    <li>Frequently Asked Questions</li>
                    <li>Report a Payment Issue</li>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>
    </body>

    <script src="app.js"></script>
  

</html>
</body>

</html>
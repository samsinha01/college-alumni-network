<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GERRSC:Alumni Network</title>

        <!----------bootstrap-link-------------------->
        <link rel="stylesheet" href="css/bootstrap5.css">
        <link rel="stylesheet" href="js/bootstrap5.js">

        <!-- Font-Awesome-link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!----------------------Client-Carousel-File------------------->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

        <!------------------custom-css-file---------------->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/cus-bootstrap.css">
        <link rel="stylesheet" href="css/contact.css">
    </head>

    <body>
        <?php
			include("header.php");
		?>

        <?php
			include("nav.php");
		?>

        <div class="aboutation dis-flex item-center">
            <div class="container inner-aboutation">
			    <strong class="mt-3 d-block">Member</strong>
			</div><!---end-container-->
        </div>

        <main>
            <article class="container pb-3">
                <section class="sec-1">
                    <div class="container">
                        <div class="inner-sec-1">
                            <div class="innerwrap">
			
                                <section class="section1 clearfix">
                                    <div class="textcenter">
                                        <h1 class="mt-3">Drop Us a Mail</h1>
                                    </div>
                                </section><!---end-section-1-->
                            
                                <section class="section2 clearfix">
                                    <div class="col2 column1 first">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13559.75335753586!2d82.15801610911495!3d22.097213793062515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a280b00947f6725%3A0xb3baedd98fda9a31!2sGovt.%20E.%20Raghvendra%20Rao%20P.G.%20Science%20College!5e0!3m2!1sen!2sin!4v1708775610951!5m2!1sen!2sin"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div><!---end-sec-2-aside-->
                                    
                                    
                                    <div class="col2 column2 last">
                                        <div class="sec2innercont">
                                            <div class="sec2addr">
                                                <p>Govt. E. Raghvendra Rao P.G. Science College Sipat Road, Sarkanda, Bilaspur Chhattisgarh 495006</p>
                                                <p><span class="collig">Phone :</span> +91 787958xxxx</p>
                                                <p><span class="collig">Email :</span> sameersinha016@gmail.com</p>
                                            </div>
                                        </div><!---end-self-details-->
                                        
                                        <div class="sec2contactform">
                                            <h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
                                            <form action="">
                                                <div class="clearfix">
                                                    <input class="col2 first" type="text" placeholder="FirstName" id="fname">
                                                    <input class="col2 last" type="text" placeholder="LastName" id="lname">
                                                </div>
                                                <div class="clearfix">
                                                    <input  class="col2 first" type="Email" placeholder="Email" id="email">
                                                    <input class="col2 last" type="text" placeholder="Contact Number" id="phone">
                                                </div>
                                                <div class="clearfix">
                                                    <textarea name="textarea" id="message" cols="30" rows="7">Your message here...</textarea>
                                                </div>
                                                <div class="clearfix"><input type="submit" value="Send" onclick="gotowhatsapp()"></div>
                                            </form>
                                        </div><!---end-info-query-form-->
                                    </div><!---end-sec-2-bside-->
                                </section><!---end-section-2-->
                            </div><!---end-inner-wrap-->
                        </div>
                    </div>
                </section>
            </article>
        </main>


        <?php
			include("footer.php");
		?>


        <script src="js\nav-js.js"></script>
        <script>
                function gotowhatsapp() {
                    var fName = document.getElementById("fname").value;
                    var lName = document.getElementById("lname").value;
                    var name = fName+" "+lName;

                    var phone = document.getElementById("phone").value;
                    var email = document.getElementById("email").value;
                    var message = document.getElementById("message").value;
                    var url = "https://wa.me/919770661844?text="
                    + "Name: " + name + "%0a"
                    + "Phone: " + phone + "%0a"
                    + "Email: " + email + "%0a"
                    + "Message: " + message;
                    window.open(url, '_blank').focus();
                }
        </script>
    </body>
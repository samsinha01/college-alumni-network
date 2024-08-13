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
        <link rel="stylesheet" href="css/index-art.css">
    </head>

    <body>
        <?php
			include("header.php");
		?>

        <?php
			include("nav.php");
		?>

        <main>
            <article>
                <section class="sec-1 pt-5 pb-5">
                    <div class="container">
                        <div class="inner-sec-1">
                            <div>
                                <img src="img/home/scl.jpg">
                            </div>

                            <div class="sec-1-content p-3">
                                <h2>Welcome to<br>The Alumni Portal</h2>
                                
                                <div class="sec-1-content-quote pl-5">
                                    <p>Connect with your</p>
                                    <p>Classmates,Share Memories,</p>
                                    <p>Mentor Students and Seek Help</p>
                                    <p>from your own & Powerful</p>
                                    <p>Alumni Network</p>
                                </div>
                                
                                <p class="mt-3"><a href="registration.php">Register Now</a></p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="sec-2 pt-5 pb-5">
                    <div class="container">
                        <h2  class="drop-shadow">Our  Partners</h2>
                        <section class="customer-logos slider" id="ind_sec2"></section>
                    </div>
                </section>

                <section class="sec-3 pt-5 pb-5">
                    <div class="container">
                        <h2 class="clouser-heading">Memories</h2>
                        <section class="customer-logos slider" id="ind_sec3"></section>
                    </div>
                </section>
            </article>
        </main>

        <?php
			include("footer.php");
		?>
        <script src="js/index-art.js"></script>
        <script src="js\nav-js.js"></script>
    </body>
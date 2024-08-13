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
        <link rel="stylesheet" href="css/member.css">
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
            <article class="pt-5 pb-5 container">
                <section class="sec-1">
                    <div class="container">
                        <div class="inner-sec-1 card-parent" id="card_parent">
                            
                        </div>
                    </div>
                </section>
            </article>
        </main>


        <?php
			include("footer.php");
		?>


        <script src="js\nav-js.js"></script>
        <script src="js\member.js"></script>
    </body>
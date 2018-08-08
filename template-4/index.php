<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            Template 4
        </title>
        <link rel="stylesheet" href="files/css/bootstrap.css">
        <link rel="stylesheet" href="files/css/animate.min.css">
        <link rel="stylesheet" href="files/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Poppins:400,500,600,700|PT+Serif|Alegreya:700|Material+Icons" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <script src="files/js/main.js"></script>
    </head>
<body>
    <!-- START OF MAIN CONTAINER FLUID -->
    <div class="container-fluid">
        <!-- START OF MAIN ROW -->
        <div class="row">
            <!-- Header -->
            <?php include('header/header.php'); ?>
            <!-- Header -->

            <!-- Carousel -->
            <?php include('carousel/carousel.php'); ?>
            <!-- Carousel -->

            <!-- Get Quote -->
            <?php include('get_quote/get_quote.php'); ?>
            <!-- Get Quote --> 

            <!-- Index Welcome -->
            <?php include('index_welcome/index_welcome.php'); ?>
            <!-- Index Welcome --> 

            <!-- What we offer slider -->
            <?php include('what_we_offer_slider/what_we_offer_slider.php'); ?>
            <!-- What we offer slider --> 

            <!-- Our Projects -->
                <?php include('our_projects/our_projects.php'); ?>
            <!-- Our Projects -->
            <!-- Contact Us Band -->
            <?php 
                include('our_projects/contact_us_band/contact_us_band.php'); 
                echo "<style>#contact_us_band.our_projects_contact_us_band {background: url('our_projects/files/images/stop_sol_bg.jpg');} #contact_us_band.our_projects_contact_us_band .contact_us_band_rhs a{background: #131313; color: #fff;}</style>";
            ?>
            <!-- Contact Us Band -->
        
            <!-- Our core values & About us -->
            <?php include('values_and_about/values_and_about.php'); ?>
            <!-- Our core values & About us --> 
            
            <!-- Our Team -->
            <?php include('our_team/our_team.php'); ?>
            <!-- Our Team -->      
            
            <!-- Latest News -->
            <?php include('latest_news/latest_news.php'); ?>
            <!-- Latest News -->     

            <!-- Clients slider -->
            <?php include('about/clients.php'); ?>
            <!-- Clients slider -->    
            
            <!-- Contact Us Band -->
            <?php include('contact_us_band/contact_us_band.php'); ?>
            <!-- Contact Us Band -->
            
            <!-- Footer -->
            <?php include('footer/footer.php'); ?>
            <!-- Footer --> 
        </div>
        <!-- END OF MAIN ROW -->
    </div>
    <!-- END OF MAIN CONTAINER FLUID -->
</body>

</html>
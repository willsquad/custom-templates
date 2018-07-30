<style>
    <?php include('files/css/navigation_with_submenu.css'); ?>
</style>

<div class="navigation col-12 d-flex align-items-center">
    <div class="navigation__content max_width d-flex justify-content-between align-items-center">
        <div class="navigation__content__lhs d-flex align-items-center">
            <div class="logo">
                <a href="index.php">Logo</a>
            </div>
        </div>
        <div class="navigation__content__rhs d-flex align-items-center">
            
            <!-- <div class="navigation__content__rhs__menu"> -->
                <!-- <a href="index.php">Home</a>
                <a href="solutions.php">Solutions</a>
                <a href="about-us.php">About Us</a>
                <a href="projects.php">Projects</a>
                <a href="news.php">News</a>
                <a href="contact-us.php">Contact Us</a> -->

                <ul class="navigation__content__rhs__menu">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a href="solutions.php">Solutions</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="solutions-subsection.php">Subsection</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about-us.php">About Us</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="about-us.php">Introduction</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="our-team.php">Our Team</a></li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                        </ul>
                    </li>
                    <li><a href="projects.php">Projects</a></li>
                    <li>
                        <a href="news.php">News</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="news.php">News</a></li>
                            <li><a href="news-details.php">News Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            <!-- </div> -->

            <div class="navigation__content__rhs__search d-flex">
                <i class="material-icons">search</i>
            </div>
            
        </div>
        
        <div class="nav_menu hidden-md-up d-flex">
            <i class="material-icons">menu</i>
        </div>

    </div>
</div>

<script>
    <?php include('files/js/navigation.js'); ?>
</script>
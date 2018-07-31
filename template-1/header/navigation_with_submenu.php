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

                <!-- Mobile Nav -->
                <ul class="navigation__content__rhs__menu mobile_nav hidden-md-up">
                    <li class="menu_element_li">
                        <div class="menu_expand_icon">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                        <a href="index.php">Home</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="index.php">Home 1</a></li>
                            <li><a href="index.php">Home 2</a></li>
                            <li><a href="index.php">Home 3</a></li>
                            <li><a href="index.php">Home 4</a></li>
                            <li><a href="index.php">Home 5</a></li>
                        </ul>
                    </li>
                    <li class="menu_element_li">
                        <div class="menu_expand_icon">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                        <a href="solutions.php">Solutions</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="solutions-subsection.php">Subsection</a></li>
                            <li><a href="solutions-subsection.php">Subsection</a></li>
                            <li><a href="solutions-subsection.php">Subsection</a></li>
                            <li><a href="solutions-subsection.php">Subsection</a></li>
                        </ul>
                    </li>
                    <li class="menu_element_li">
                        <div class="menu_expand_icon">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                        <a href="about-us.php">About Us</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="about-us.php">Introduction</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="our-team.php">Our Team</a></li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                        </ul>
                    </li>
                    <li class="menu_element_li"><a href="projects.php">Projects</a></li>
                    <li class="menu_element_li">
                        <div class="menu_expand_icon">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                        <a href="news.php">News</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="news.php">News</a></li>
                            <li><a href="news-details.php">News Details</a></li>
                        </ul>
                    </li>
                    <li class="menu_element_li"><a href="contact-us.php">Contact Us</a></li>
                </ul>
                <!-- Mobile Nav -->

                <!-- Desktop Nav -->
                <ul class="navigation__content__rhs__menu hidden-sm-down">
                    <li>
                        <a href="index.php">Home</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="index.php">Home 1</a></li>
                            <li><a href="index.php">Home 2</a></li>
                            <li><a href="index.php">Home 3</a></li>
                            <li><a href="index.php">Home 4</a></li>
                            <li><a href="index.php">Home 5</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="solutions.php">Solutions</a>
                        <ul class="navigation__content__rhs__menu__submenu">
                            <li><a href="solutions-subsection.php">Subsection</a></li>
                            <li><a href="solutions-subsection.php">Subsection</a></li>
                            <li><a href="solutions-subsection.php">Subsection</a></li>
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
                <!-- Desktop Nav -->

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
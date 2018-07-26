<style>
    <?php include('files/css/about.css'); ?>
</style>

<!-- Subsection content -->
<div id="about_page_container">

    <!-- About page intro -->
    <?php include('about/about_intro.php'); ?>
    <!-- About page intro -->

    <!-- Awards Section -->
    <?php include('about/awards.php'); ?>
    <!-- Awards section -->

    <!-- Our Team -->
    <?php 
        include('our_team/our_team.php'); 
        echo '<style>#our_team { background: #fff;}</style>';
    ?>
    <!-- Our Team -->       

</div>
<!-- Subsection content -->
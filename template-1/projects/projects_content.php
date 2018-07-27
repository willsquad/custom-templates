<style>
    <?php include('files/css/projects.css'); ?>
</style>

<div id="projects" class="col-12">
    <div class="row max_width">
       
    <div class="button-group filters-button-group col-12">
        <button class="button is-checked" data-filter="*">All Projects</button>
        <button class="button" data-filter=".automotive">Automotive</button>
        <button class="button" data-filter=".chemical">Chemical</button>
        <button class="button" data-filter=".construction">Construction</button>
        <button class="button" data-filter=".energy">Energy</button>
        <button class="button" data-filter=".exploration">Exploration</button>
    </div>

    
    <div class="projects_grid grid row">
            <div class="element-item automotive col-12 col-lg-4" data-category="automotive">
                <img src="projects/files/images/project_img1.jpg" alt="">
            </div>
            <div class="element-item chemical col-12 col-lg-4" data-category="chemical">
                <img src="projects/files/images/project_img2.jpg" alt="">
            </div>
            <div class="element-item construction col-12 col-lg-4" data-category="construction">
                <img src="projects/files/images/project_img3.jpg" alt="">
            </div>
            <div class="element-item energy col-12 col-lg-4" data-category="energy">
                <img src="projects/files/images/project_img4.jpg" alt="">
            </div>
            <div class="element-item exploration col-12 col-lg-4" data-category="exploration">
                <img src="projects/files/images/project_img5.jpg" alt="">
            </div>
            <div class="element-item automotive col-12 col-lg-4" data-category="automotive">
                <img src="projects/files/images/project_img6.jpg" alt="">
            </div>
            <div class="element-item chemical col-12 col-lg-4" data-category="chemical">
                <img src="projects/files/images/project_img7.jpg" alt="">
            </div>
            <div class="element-item construction col-12 col-lg-4" data-category="construction">
                <img src="projects/files/images/project_img8.jpg" alt="">
            </div>
            <div class="element-item energy col-12 col-lg-4" data-category="energy">
                <img src="projects/files/images/project_img9.jpg" alt="">
            </div>
    </div>


    </div>
</div>

<script>
    <?php include('files/js/projects.js'); ?>
</script>
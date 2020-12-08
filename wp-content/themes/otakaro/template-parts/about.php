<div class="aboutus">
    <div class="about-us-con">
        <div class="about-sec-1">
            <?php the_post_thumbnail([250, 250], array("class" => "about-sec-1-img")); ?>

        </div>
        <div class="about-us-h1">
            <h3 class="about-us-h3"><?php the_title() ?></h3>
        </div>
        <div class="body-about-us">
            <p class="body-about"><?php the_content() ?></p>

        </div>

    </div>
</div>
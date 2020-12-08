<?php
get_header();

?>
<section>
    <div class="landing-img-about-us">
        <div class="img-about-us">
            <div class="h1-about-us">
                <h1 class="about-us-h1-landing">About Ōtākaro Orchard </h1>
            </div>

        </div>
    </div>
</section>
<?php
$args = array(
    'post_type' => 'about',
    'posts_per_page' => 10
);

$query = new WP_Query($args); ?>
<div class="about-us-sec">
    <div class="aboutus-sec">
        <div class="aboutussec">
            <?php
            if (have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('template-parts/about');

                endwhile;

            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif; ?>
        </div>
    </div>
</div>



<?php get_footer();

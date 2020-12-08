<?php
get_header(); ?>
<div class="container-landing-page">

    <div class="video-container">

        <div class="video-text">
            <h1 class="video-text-h1"> Nau Mai ki Ōtākaro Orchard</h1>
            <h4 class="video-text-h3">Ōtākaro Orchard is a Community garden and an Environmental and Educational Hub</h4>

        </div>

        <video height="645" autoplay muted src="http://otakaro-orchard.local/wp-content/uploads/2020/12/otakaro-vide.mp4" type="video/mp4" allow="autoplay; fullscreen">
        </video>

    </div>
</div>

<?php
$args = array(
    'post_type' => 'projects',
    'posts_per_page' => 10
);

$query = new WP_Query($args); ?>
<div class="project-list">
    <div class="project-listing-title-container">
        <div class="project-listing-title-container">

        </div>
    </div>
</div>
<div class="container-project">
    <div class="container-project-item">
        <div class="conatiner-projectss">
            <?php
            if (have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('template-parts/project-list');

                endwhile;

            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif; ?>
        </div>
    </div>
</div>
<div class="conatiner-gallery">
    <div class="gallery-images">
        <h2 class="past-projects-h1">Past Projects</h2>
        <?php
        $gallery_shortcode = '[gallery size="full" link="none" ids="126,125,101,96,97,136"]';
        print apply_filters('the_content', $gallery_shortcode);
        ?>

    </div>
</div>


<?php get_footer();

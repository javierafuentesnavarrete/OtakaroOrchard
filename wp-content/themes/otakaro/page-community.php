<?php
get_header();

?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<div class="support-us">
    <div class="support-us-container">
        <div class="support-img">
            <div class="h1-support">
                <h1 class="h1-support-h1"> Support Ōtākaro Orchard </h1>
            </div>
        </div>
    </div>
</div>
<section class="how-to-donate-section">
    <div class="container-message">
        <div class="msg">
            <div class="msg-h3">
                <h3 class="msg-h3">
                    We need you support to complete the Ōtākaro Orchard Hub this year!
                </h3>
            </div>
            <div class="p-donate">
                <p class="p-donate-text">We need to raise $997,000 to complete the full Ōtākaro Orchard project in February 2020</p>
            </div>
            <div class="h6-donate">
                <h6>Here's how you can help</h6>
            </div>
        </div>

    </div>
</section>

<?php
$args = array(
    'post_type' => 'donate',
    'posts_per_page' => 10
);

$query = new WP_Query($args); ?>
<div class="donate-sections">
    <div class="donate-projects">
        <div class="donate-projects-1">
            <?php
            if (have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('template-parts/donate');

                endwhile;

            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif; ?>

        </div>
    </div>
</div>
</div>
</section>
<section class="grow-container-section">
    <div class="grow-container">
        <div class="grow">
            <h3 class="help-us-grow">Help us Grow Good</h3>

            <div class="ul-community">
                <ul class="ul-comunnity-page">
                    <li class="li-community">Give a significant gift</li>
                    <li class="li-community">Give a little</li>
                    <li class="li-community">Spread the world</li>
                </ul>
                <div class="button-donate">
                    <a class="btn-donate" target="blank" href="https://givealittle.co.nz/cause/takaro-orchard-a-hub-for-local-food">Become a Supporter Today</a>
                </div>
            </div>

        </div>
        <div class="sponsorship">
            <h3 class="spon-level">Sponsorship Levels</h3>
            <div class="ul-two">
                <ul class="ul-comunnity-page-2">


                    <li class="li-community-2">Project Partner - constributions over $150,000</li>
                    <li class="li-community-2">Platinum - constributions $80,000-149,000 </li>
                    <li class="li-community-2">Gold - constributions $50,000-79,000</li>
                    <li class="li-community-2">Silver - constributions $25,000-49,000 </li>
                    <li class="li-community-2">Bronze - constributions $5000-24,000</li>
                    <li class="li-community-2">Supporter - constributions up to $4999</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="gallery-sponsors">
    <div class="gallery-spon">
        <h2 class="gallery-spon-h2">Current Project Supporters</h2>
        <div class="gallery-show">
            <?php
            $gallery_shortcode = '[gallery columns="4"  link="none" ids="147,148,149,150,151,152,153,154,155,156,157,158,159,162,163,166"]';
            print apply_filters('the_content', $gallery_shortcode);
            ?>
        </div>
    </div>
</section>
<?php get_footer();

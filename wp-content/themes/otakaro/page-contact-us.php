<?php
get_header();
?>
<section>
    <div class="img-landing-contact-us">
        <div class="h1-landing-contactus">
            <h1 class="h1-landing-cus">
                Contact Us
            </h1>
        </div>
    </div>
</section>
<section class="section-contact-us">
    <div class="contact-us-container">
        <div class="contact-us">
            <div class="contact-us-1-1">
                <div class="contact-us-contact">
                    <h3>Media Contact</h3>
                    <h5><?php echo get_theme_mod('contact2_media_object_header') ?></h5>
                    <p><?php echo wpautop(get_theme_mod('contact2_media_object_paragraph')) ?> </p>
                    <p><?php echo wpautop(get_theme_mod('contact2_media_object_number')) ?></p>
                </div>

                <div class="contact-us-contact1">
                    <h3>Media Contact</h3>
                    <h5><?php echo get_theme_mod('contact_media_object_header') ?></h5>
                    <p><?php echo wpautop(get_theme_mod('contact_media_object_paragraph')) ?></p>
                    <p><?php echo wpautop(get_theme_mod('contact_media_object_number')) ?></p>
                </div>
            </div>
        </div>
    </div>

</section>



<?php get_footer();

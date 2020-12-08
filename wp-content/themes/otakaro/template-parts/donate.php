<div class="donate-sec">
    <div class="donate-sec-wrap">
        <div class="icon-donate">
            <?php the_post_thumbnail([100, 100], array("class" => "icon-donate-icon")); ?>
        </div>
        <div class="donate-cause">
            <h3 class="donate-h3-section"><?php the_title() ?></h3>
        </div>
        <div class="p-donate-section">
            <p class="donate-p"><?php the_content() ?></p>
        </div>
    </div>
</div>
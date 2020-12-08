<div class="projects-container">
    <div class="project-list-item">
        <div>
            <?php the_post_thumbnail([250, 250], array("class" => "project-list-item__thumb")); ?>

        </div>
        <div class="h2-container">
            <h2 class="project-list-item__header"><?php the_title() ?></a></h2>
        </div>

        <div class="p-container">
            <p class="project-list-item__excerpt"><?php the_content(); ?></p>
        </div>

    </div>
</div>
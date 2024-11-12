<?php get_header() ?>

<div class="singlePost">
    <div class="container">
        <div class="wrapper  w-[800px] mx-auto">
            <p class="text-[45px] text-primary font-bold"><?php the_title() ?></p>
            <div>
                <?php the_content()?>
            </div>
    </div>
</div>
</div>


<?php get_footer() ?>
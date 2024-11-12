
<?php get_header(); ?>

    <section class="post">
      <div class="container">
<?php 
$args= array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'offset' => 1,
);
$newQuery = new WP_Query($args);
?>


<?php
if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
?>

        <div
          class="wrapper  w-[800px] mx-auto grid grid-cols-[_1fr_3fr] gap-2"
        >

          <div class="py-5">
            <div class="postInfo text-end cursor-pointer">
              <p
                class="text-[25px] font-semibold font-secondary hover:text-primary"
              >
                <?php the_date() ?>
              </p>
              <p class="text-[22px] text-primary font-secondary font-semibold">
                LEAVE A COMMENT
              </p>
              <p class="font-secondary font-semibold text-secondary">
                Category
              </p>
            </div>
          </div>
          <div class="border-l border-secondary px-3 py-5  ">
            <p
              class="postTitle uppercase text-secondary font-secondary text-[25px] font-semibold mb-6"
            >
            <a href="<?php echo get_the_permalink(); ?>">
                <?php the_title() ?>
            </a>
              
            </p>
            <div class="border-b border-secondary border-dotted pb-5">
<?php the_excerpt() ?>
</div>
          </div>
        </div>
<?php
endwhile;

else :
    echo "no available content yet";
endif;
wp_reset_postdata();
?>


      </div>
    </section>

<?php get_footer(); ?>
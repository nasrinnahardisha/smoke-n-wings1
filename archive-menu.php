<?php get_header(); ?>
<section class="all-menu py-[60px]">
  <div class="max-w-[1244px] mx-auto px-[15px]">
    <h2 class="text-center font-bebas-neue text-[44px] mb-[40px]">All Menus</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-[34px]">
      <?php
      if (have_posts()):
        while (have_posts()): the_post();
          $judging_time = get_post_meta(get_the_ID(), '_judging_time', true);
      ?>
          <!-- same card markup -->
      <?php
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>

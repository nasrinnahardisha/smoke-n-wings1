 <section id="courses" class="xl:py-20 lg:py-16 md:py-12 sm:py-10 py-4">
   <div class="container relative z-1">
     <div class="hero-inner hidden xl:block ml-[310px] mt-[-6px]  absolute -top-[50px] left-1/2 -translate-x-1/2">
       <div class="brand-title-2 BARBEQUE2 !text-[156px] !h-[160px]">BARBEQUE</div>
     </div>


     <!-- Title + Arrows -->
     <div class="flex items-center justify-between">
       <h2 class="cta-title max-w-[626px] pb-[33px]">
      <?php echo wp_kses_post(get_theme_mod('course_title')); ?>
       </h2>

       <!-- Arrow container -->
       <div class="slider-arrows flex items-center gap-3"></div>
     </div>

     <!-- Slider -->
  <div class="courses-wrapper slick-items">
<?php
$bbq_gallery = new WP_Query(array(
  'post_type' => 'bbqsite',
  'posts_per_page' => 1, // sob post
  'post_status'  =>'publish',
  'orderby' => 'date',
  'order' => 'DESC'
));

if ($bbq_gallery->have_posts()) :
  while ($bbq_gallery->have_posts()) : $bbq_gallery->the_post();

    // Gallery fetch
    $galleries = get_post_galleries(get_the_ID(), false);

    if(!empty($galleries)){
      foreach($galleries as $gallery){
        if(isset($gallery['src']) && is_array($gallery['src'])){
          foreach($gallery['src'] as $img_url){ ?>
            <div class="course img">
              <img src="<?php echo esc_url($img_url); ?>" class="w-full h-full object-cover" alt="<?php the_title(); ?>">
            </div>
          <?php }
        }
      }
    }

  endwhile;
  wp_reset_postdata();
else :
  echo '<p>No BBQ images found.</p>';
endif;
?>
</div>

   </div>
 </section>
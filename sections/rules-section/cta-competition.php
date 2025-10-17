<?php
  $image = get_theme_mod('competition_cta_image');
  $title = get_theme_mod('competition_cta_title');
  $desc  = get_theme_mod('competition_cta_desc');
  $desc2  = get_theme_mod('competition_cta_desc2');
?>  
  
  
  <section class="cta-sec competition">
    <div class="container">
      <div class="cta  xl:!gap-[44px]  xl:pt-[91px] md:pt-[25px] pt-0">
        <div class="cta-text pt-[20px] xl:!pt-[33px]">
          <div class="competition-title mb-[10px] md:mb-[20px] lg:mb-[33px]">  <?php echo wp_kses_post($title); ?></div>
          <div class="competition-desc">     <?php echo (esc_html($desc)); ?><br> <br class="md:block hidden">
                 <?php echo (esc_html($desc2)); ?></div>
        </div>
        <div class="cta-image-left-overlay mt-0  xl:mt-[16px]">
              <img src="<?php echo esc_url($image); ?>" alt="competition image">
        </div>
      </div>
    </div>
  </section>
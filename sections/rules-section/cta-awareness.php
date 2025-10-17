<?php
$image = get_theme_mod('awareness_cta_image');
$title = get_theme_mod('awareness_cta_title');
$desc1 = get_theme_mod('awareness_cta_desc1');
$desc2 = get_theme_mod('awareness_cta_desc2');
?>  
  
  
  <section class="cta-sec awareness">
    <div class="max-w-[1232px] mx-auto px-[15px]">
      <div class="cta xl:!gap-[66px]  xl:pt-[91px] md:pt-[25px] pt-0">
        <div
          class="w-full md:w-1/2 max-w-full  xl:max-w-[584px] pt-[20px] xl:!pt-[42px] md:!pt-[48px] order-1 md:order-2 ">
          <div class="competition-title xl:!text-[59px] mb-[10px] md:mb-[20px] xl:mb-[37px]"> <?php echo wp_kses_post($title); ?>
          </div>
          <div class="competition-desc">       <?php echo esc_html($desc1); ?>
          <br><br class="md:block hidden">
          <?php echo esc_html($desc2); ?>
          </div>
        </div>
        <div class="cta-image-right-overlay-aware w-full md:w-1/2  order-2 md:order-1 mt-0  xl:mt-[8px]">
        <img src="<?php echo esc_url($image); ?>" alt="awareness image">
        </div>
      </div>
    </div>
  </section>
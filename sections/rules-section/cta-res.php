 <?php
  $image = get_theme_mod('responsibility_cta_image');
  $title = get_theme_mod('responsibility_cta_title');
  $desc  = get_theme_mod('responsibility_cta_desc');
  ?>



 <section class="cta-sec responsibility pb-[30px] md:pb-[50px] xl:pb-[107px]">
   <div class="max-w-[1259px] px-[15px]  mx-auto">
     <div class="cta pt-5  xl:!gap-[22px] md:pt-[30px] w-full  lg:pt-[70px] xl:pt-[91px]">
       <div class="cta-text w-full md:!w-1/2 mr-[16px] !pt-0 xl:!pt-[31px] order-2">
         <div class="competition-title  mb-[10px] md:mb-[10px] lg:mp-[30px] xl:mb-[37px]"> <?php echo wp_kses_post($title); ?>
         </div>
         <div class="competition-desc"> <?php echo wpautop(esc_html($desc)); ?>
         </div>
       </div>
       <div class="cta-image-right-overlay-res w-full md:!w-1/2 order-1">
         <img src="<?php echo esc_url($image); ?>" alt="contestant image">
       </div>
     </div>
   </div>
 </section>
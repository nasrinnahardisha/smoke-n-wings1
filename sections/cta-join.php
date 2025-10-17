    <?php 
        $cta_title =get_theme_mod('cta_title');
        $cta_title_span =get_theme_mod('cta_title_span');
        $cta_description =get_theme_mod('cta_description');
        $image = get_theme_mod("cta_image");
  ?>
  
  <section class="cta-sec join">
    <div class="container relative z-1">
      <div
        class="hero-inner xl:block hidden BARBEQUE ml-[-256px] mt-[40px]  absolute -top-[50px] left-1/2 -translate-x-1/2">
        <div class="brand-title join-smoke !text-start">SMOKE-N-WINGS</div>
      </div>
      <div class="cta pt-[10px] md:pt-[40px] lg:pt-[87px]">
        <div class="cta-text">
          <div class="cta-title">  <?php echo esc_html($cta_title ); ?><span> <?php echo esc_html($cta_title ); ?></span> BBQ Competition!</div>
          <div class="cta-desc">  <?php echo esc_html($cta_description); ?></div>
        </div>
        <div class="cta-image-left-overlay mt-0 xl:mt-[12px]">

          <?php if ($image) : ?>
          <img src="<?php echo esc_url($image); ?>" class="w-full h-auto block" alt="Join Us Image">
        <?php endif; ?> 

          <!-- 
          <a href="enter-competition.html"
            class="bottom-overlay w-full 
            text-center absolute  bottom-0  text-white text-[18px] sm:text-[32px] md:text-[40px] xl:text-[47px] font-bebas-pro font-bold bg-[#16396F]  py-2 uppercase tracking-[0.96px] z-20">
            Enter the competition
          </a> -->

        </div>
      </div>
    </div>
  </section>
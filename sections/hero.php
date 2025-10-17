  <?php 
        $image = get_theme_mod("hero_image");
        $btn1 =get_theme_mod('hero_button_text1');
        $btn2 =get_theme_mod('hero_button_text2');
  
  
  ?>
  <section class="hero overflow-hidden bg-[#F8B895]  flex  relative z-10 mt-0 xl:mt-[-5px]">
    <div class="max-w-[1230px] mx-auto  w-full relative">
      <div class="hero-inner absolute mt-[-120px] md:mt-[-250px] lg:mt-[-275px] xl:mt-[-280px] 2xl:mt-[-306px]">
        <h1 class="brand-title w-full text-center block !xl:text-[239px]">Smoke-N-Wings</h1>
        <h1 class="brand-title w-full text-center block !xl:text-[239px] xl:mt-[-44px]">Idaho State bbq</h1>
        <h1 class="brand-title w-full text-center block !xl:text-[239px] xl:mt-[-33px]">Competition</h1>
      </div>

      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <img src="<?php echo esc_url($image); ?>" alt="logo"
          class="h-[520px] md:h-[720px] lg:h-[777px] xl:h-[870px] mt-[120px] md:mt-[150px] lg-[170px] xl:mt-[196px] pl-[2px] object-cover">
      </div>
      <a href="<?php echo esc_url(get_theme_mod('hero_button_link1')); ?>" class="enter-left font-bebas-pro bg-[#f65600]">
       <?php echo esc_html( $btn1); ?>
      </a>

      <a href="<?php echo esc_url(get_theme_mod('hero_button_link2')); ?>" class="enter-right font-bebas-pro bg-[#591419]">
        <?php echo esc_html(  $btn2); ?>
      </a>
    </div>
  </section>

  <section class="banner  mt-0  xl:mt-[9px] relative">
    <div class="relative z-10"  style="background-color: <?php echo get_theme_mod('rules_banner_bg', '#591419'); ?>;">
      <div class="flex justify-center items-center pt-[40px] xl:pt-[60px] pb-[40px] xl:pb-[45px]">
        <div class="absolute bg-clip top-0 right-0 h-full w-[230px] xl:w-[552px] bg-[#F65600] z-20">
        </div>
        <div class="flex relative z-30 flex-col items-center gap-[18px] ">
          <div class="sub-title">
            <div class="txt"><?php echo get_theme_mod('rules_breadcrumb_left'); ?></div>
            <div class="divider" aria-hidden="true"></div>
            <div class="txt"><?php echo get_theme_mod('rules_breadcrumb_right'); ?></div>
          </div>
          <div class="banner-title text-center">
            <h2><?php echo get_theme_mod('rules_banner_title'); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
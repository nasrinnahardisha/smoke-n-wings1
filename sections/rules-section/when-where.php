<?php
$when_title = get_theme_mod('when_title');
$when_date = get_theme_mod('when_date');
$where_title = get_theme_mod('where_title');
$where_location = get_theme_mod('where_location');
$where_sublocation = get_theme_mod('where_sublocation');
$when_where_description = get_theme_mod('when_where_description');
?>

<section class="when-where pt-[15px] md:pt-[40px] lg:pt-[70px] xl:pt-[111px] pb-0 xl:pb-[16px]  relative">
    <div class="container">
      <div
        class="flex flex-col lg:flex-row justify-between gap-[15px] md:gap-[30px] lg:gap-[44px] xl:gap-[85px] relative xl:pt-[20px] pt-0">

        <!-- Left Box -->
        <div
          class="ml-0 xl:ml-[-125px] py-3  w-full lg:w-[697px] h-auto sm:h-[140px] lg:h-[161px] bg-[#591419] flex xl:gap-[61px] gap-[10px] sm:gap-[60px] md:gap-[70px] flex-col sm:flex-row items-center justify-center mx-auto lg:mx-0  xl:mt-[-30px] mt-0 when-clip-path">

          <!-- WHEN -->
          <div class="flex flex-col text-center">
            <h4
              class="text-[#FFE4D5] font-bebas-pro text-[28px] md:text-[40px] lg:text-[48px]   font-bold leading-normal lg:tracking-[0.96px] tracking-[0.86px] uppercase">
                      <?php echo esc_html($when_title); ?>
            </h4>
            <h5
              class="text-[#FFE4D5] font-bebas-pro lg:text-[26px]  md:text-[20px] text-[18px] font-bold leading-normal tracking-[0.38px] uppercase">
          <?php echo esc_html($when_date); ?>
            </h5>
          </div>

          <!-- WHERE -->
          <div class="flex flex-col text-center">
            <h4
              class="text-[#FFE4D5] font-bebas-pro text-[28px] md:text-[40px] lg:text-[48px] font-bold leading-normal tracking-[0.96px] uppercase">
         <?php echo esc_html($where_title); ?>:
            </h4>
            <h5
              class="text-[#FFE4D5] font-bebas-pro lg:text-[26px]  md:text-[20px] text-[18px] font-bold leading-normal tracking-[0.38px] uppercase">
                <?php echo esc_html($where_location); ?><br>
              <span
                class="text-[#FFE4D5]  mx-auto text-center font-bebas-pro text-[19px] font-medium leading-normal tracking-[0.38px] uppercase">
               <?php echo esc_html($where_sublocation); ?></span>
            </h5>
          </div>
        </div>

        <!-- Right Text -->
        <div
          class="lg:ml-auto mx-auto text-center text-black lg:text-right font-jost text-[18px] lg:text-[19px] font-normal leading-normal tracking-[0.38px] max-w-full lg:max-w-[450px] xl:max-w-[500px]">
          <p>
             <?php echo esc_html($when_where_description); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
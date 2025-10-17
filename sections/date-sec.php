<?php
$kidsq_text = get_theme_mod('kidsq_text');
$kidsq_link = get_theme_mod('kidsq_link');
$saturday_text = get_theme_mod('saturday_text');
$friday_heading = get_theme_mod('friday_heading');
$event_title = get_theme_mod('event_title');
$event_description = get_theme_mod('event_description');
?>


<section class="date-sec my-1 h-auto md:h-[329px] xl:h-[349px]  relative z-10">
  <div class="container">
    <div
      class="flex justify-between h-full  md:flex-row flex-col gap-[70px] sm:gap-[125px] md:gap-[60px] lg:gap-[90px] xl:gap-[75px] 2xl:gap-[30px]">

      <!-- Left Colored Bars -->
      <div class="h-[70px] md:h-[329px] xl:h-[349px] gap-[10px] flex">
        <!-- First Box -->
        <a href="<?php echo esc_url($kidsq_link); ?>"
          class="relative w-full md:w-[120px] xl:w-[157px] h-[50px] sm:h-[70px] md:h-[329px] xl:h-[349px] bg-[#16396F] mx-auto md:mx-0 text-white font-bebas-pro font-bold text-[20px] sm:text-[36px] md:text-[42px] xl:text-[48px] uppercase tracking-[0.96px] flex items-center justify-center clip-kidsq overflow-hidden">

          <span
            class="absolute mt-0 md:mt-[230px] xl:mt-[250px] mx-auto  md:ml-[97px] xl:ml-[114px] xl:rotate-[282deg] md:rotate-[279deg]  whitespace-nowrap origin-bottom-left">
            <?php echo esc_html($kidsq_text); ?>
          </span>
        </a>


        <!-- Second Box -->
        <div
          class="w-[92%] sm:w-[94%] right-auto sm:right-[15px] md:right-auto md:w-[120px] xl:w-[150px] mt-[70px] sm:mt-[100px] md:mt-0 bg-[#F65600] text-white font-bebas-pro font-bold text-[20px] sm:text-[36px] md:text-[42px] xl:text-[48px] uppercase tracking-[0.96px] flex absolute  md:ml-[80px] lg:ml-[106px]  h-[50px] sm:h-[70px] md:h-[329px] xl:h-[349px] clip-kidsq  mx-auto ">

          <span
            class="xl:mt-[255px] lg:mt-[251px] md:mr-[7px] xl:mr-0 md:mt-[246px] mx-auto my-auto md:my-0  md:ml-[86px]  xl:ml-[99px] xl:rotate-[281deg] md:rotate-[279deg] whitespace-nowrap origin-bottom-left">
            <?php echo esc_html($saturday_text); ?>
          </span>
        </div>

      </div>


      <!-- Main Content -->
      <div
        class="date  text-center md:text-start w-full  2xl:w-[984px] md:h-[329px] h-auto xl:h-[349px] bg-[#FFE4D5] pl-4 sm:pl-14 py-8 sm:py-10 md:py-10 xl:py-19 md:pl-[70px] lg:pl-[80px] xl:pl-[136px]  relative  pr-4  xl:pr-[136px]">
        <div class="hero-inner  hidden xl:block gap-[10px] absolute -top-[50px] left-1/2 -translate-x-1/2">
          <div class="brand-title-2">Smoke-N-Wings</div>
          <div class="brand-title-2">Smoke-N-Wings</div>
          <div class="brand-title-2">Smoke-N-Wings</div>
        </div>

        <h3
          class="text-[#591419] font-bebas-pro text-[30px] md:text-[38px] lg:text-[42px] xl:text-[48px] font-bold leading-none tracking-[0.96px] uppercase mb-2">
          <?php echo esc_html($friday_heading); ?>
        </h3>

        <div class="w-[155px] h-[5px] mx-auto md:mx-0 md:h-[7px] lg:h-[9px] bg-[#3B0E0E]"></div>

        <h4
          class="text-[#000000] mt-[18px] xl:mt-[26px] font-bebas-pro text-[17px] lg:text-[18px] xl:text-[22px] font-bold leading-none tracking-[0.52px] uppercase mb-1">
          <?php echo esc_html($event_title); ?>
        </h4>

        <div
          class="text-[#000000] max-w-full xl:max-w-[761px] mt-[14px] xl:mt-[17px] font-jost text-[16px] md:text-[18px] xl:text-[19px] font-normal leading-normal tracking-[0.38px]">
          <p>
            <?php echo esc_html($event_description); ?>
          </p>
        </div>
      </div>

    </div>

  </div>


</section>
    <?php
    $cta_ask_title = get_theme_mod('cta_ask_title');
    $cta_ask_title_span = get_theme_mod('cta_span_title_span');
    $image = get_theme_mod("cta_ask_image");
    ?>

    <section
      class="cta-sec-2 xl:pt-[71px] lg:pt-[60px] md:pt-[50px] pt-[20px] xl:pb-[90px] lg:pb-[70px] md:pb-[60px] pb-[20px]">
      <div class="container">
        <div
          class="flex flex-col lg:flex-row items-center justify-center xl:gap-[60px] lg:gap-[50px] md:gap-[40px] gap-[15px] lg:justify-between">
          <div class="cta-text w-full lg:!w-1/2 pt-0 xl:!pt-[34px] order-2  rounded-[20px] flex flex-col">
            <h2 class="cta-title text-center xl:text-right max-w-full xl:max-w-[626px] pb-[20px] xl:pb-[40px]">
              <?php echo esc_html($cta_ask_title); ?><br class="hidden md:block">
              <span class="text-[#F65600]"><?php echo esc_html($cta_ask_title_span); ?></span> Questions
            </h2>


            <div class="flex flex-col items-center gap-[15px] xl:gap-0">
              <?php for ($i = 1; $i <= 4; $i++):
                $question = get_theme_mod("faq_question_$i");
                $answer = get_theme_mod("faq_answer_$i");
                if ($question && $answer):
                  $is_open = ($i === 2); //ডিফল্টভাবে খোলা থাকবে
              ?>

                  <div class="flex flex-col items-start  lg:text-start  text-center  w-full max-w-full xl:max-w-[630px]">
                    <hr class="w-full xl:w-[582px] border-t   border-[#F8B895] " />
                    <div class="flex w-full  justify-center lg:justify-between items-center px-[15px] xl:pl-8">
                      <div class="flex items-center gap-[19px]">

                        <span
                          class="flex-1 text-black font-jost text-[19px] font-normal leading-normal tracking-[0.38px]"> <?php echo esc_html($question); ?></span>
                      </div>
                      <button id="toggleBtn<?php echo $i; ?>"
                        class="flex w-[40px] h-[40px] text-[#591419] justify-center items-center flex-shrink-0 rounded-full bg-white select-none">
                        <i class=" text-xl leading-none <?php echo $is_open ? 'ri-subtract-fill' : 'ri-add-line'; ?>"></i>
                      </button>

                    </div>
                    <div id="extraText<?php echo $i; ?>"
                      class="<?php echo $is_open ? '' : 'hidden'; ?> transition-all duration-300 ease-in-out text-[#591419] font-bold font-jost text-[16px] tracking-[0.32px] leading-normal max-w-full xl:mt-[15px] mt-0 mb-[15px] xl:mb-0 px-[10px] xl:px-8">
                      <?php echo esc_html($answer); ?>
                    </div>
                    <hr class="w-full xl:w-[582px]  border-b  border-[#F8B895]" />

                  </div>

                  <!-- <div class="flex flex-col items-start lg:text-start  text-center w-full  max-w-full xl:max-w-[630px]">
                    <div class="flex w-full justify-center lg:justify-between items-center px-[10px] xl:pl-8">
                      <div class="flex items-center gap-[19px]">

                        <span
                          class="flex-1 text-black font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">Question
                          one Goes here?</span>
                      </div>
                      <button id="toggleBtn2"
                        class="flex w-[40px] h-[40px] text-[#591419]  justify-center items-center  flex-shrink-0 rounded-full text-2xl select-none bg-white ">
                        <i class="ri-add-line"></i>
                      </button>
                    </div>
                    <div id="extraText2"
                      class="hidden transition-all duration-300 ease-in-out text-[#591419] font-bold font-jost text-[16px] tracking-[0.32px] leading-normal max-w-full xl:mt-[15px] mt-0 mb-[15px] px-[10px] xl:pl-8">
                      Lorem ipsum dolor sit amet consectetur. Facilisi gravida ultricies nec integer amet quis neque aliquet.
                      Nec eget consectetur gravida amet donec suspendisse non.
                    </div>
                    <hr class="w-full xl:w-[582px]   border-b border-[#F8B895] " />

                  </div>

                  <div class="flex flex-col items-start lg:text-start  text-center w-full  max-w-full xl:max-w-[630px]">
                    <div class="flex w-full justify-center lg:justify-between items-center px-[10px] xl:pl-8">
                      <div class="flex items-center gap-[19px]">

                        <span
                          class="flex-1 text-black font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">Question
                          one Goes here?</span>
                      </div>
                      <button id="toggleBtn3"
                        class="flex w-[40px] h-[40px]  justify-center items-center gap-[10px] text-[#591419]  rounded-full  text-2xl select-none bg-white ">
                        <i class="ri-add-line"></i>
                      </button>
                    </div>
                    <div id="extraText3"
                      class="hidden transition-all duration-300 ease-in-out text-[#591419] font-bold font-jost text-[16px] tracking-[0.32px] leading-normal max-w-full xl:mt-[15px] mt-0 mb-[15px]  px-[10px] xl:pl-8">
                      Lorem ipsum dolor sit amet consectetur. Facilisi gravida ultricies nec integer amet quis neque aliquet.
                      Nec eget consectetur gravida amet donec suspendisse non.
                    </div>
                    <hr class="w-full xl:w-[582px]  border-b border-[#F8B895] " />

                  </div>
                  <div class="flex flex-col items-start lg:text-start  text-center w-full  max-w-full xl:max-w-[630px]">
                    <div class="flex w-full justify-center lg:justify-between items-center px-[10px] xl:pl-8">
                      <div class="flex items-center gap-[19px]">

                        <span
                          class="flex-1 text-black font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">Question
                          one Goes here?</span>
                      </div>
                      <button id="toggleBtn4"
                        class="flex w-[40px] h-[40px]  justify-center items-center  text-[#591419]  rounded-full  text-2xl select-none bg-white ">
                        <i class="ri-add-line"></i>
                      </button>
                    </div>
                    <div id="extraText4"
                      class="hidden transition-all duration-300 ease-in-out text-[#591419] font-bold font-jost text-[16px] tracking-[0.32px] leading-normal max-w-full xl:mt-[15px] mt-0 mb-[15px] px-[10px] xl:pl-8">
                      Lorem ipsum dolor sit amet consectetur. Facilisi gravida ultricies nec integer amet quis neque aliquet.
                      Nec eget consectetur gravida amet donec suspendisse non.
                    </div>
                    <hr class="w-full xl:w-[582px]   border-b border-[#F8B895] " />

                  </div> -->

              <?php endif;
              endfor; ?>
            </div>





          </div>
          <div class="cta-image-right-overlay mt-0 xl:mt-[14px] w-full lg:!w-1/2  order-1">
            <?php if ($image) : ?>
              <img src="<?php echo esc_url($image); ?>" alt="Image">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
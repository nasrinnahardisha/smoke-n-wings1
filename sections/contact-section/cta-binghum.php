    <section
        class="cta-sec bigham xl:pt-[44px] lg:pt-[38px] pt-[10px] xl:pb-[135px] lg:pb-[70px] md:pb-[60px] pb-[20px]">
        <div class="container relative z-1">
            <div
                class="hero-inner hidden xl:block ml-[328px] mt-[-5px]  absolute -top-[50px] left-1/2 -translate-x-1/2">
                <div class="brand-title-2 BARBEQUE2 !text-[146px] !h-[160px]">BARBEQUE</div>
            </div>

            <div class="cta w-full xl:!gap-[30px] xl:pt-[65px] lg:pt-[40px] md:pt-[30px] sm:pt-[10px] pt-0">
                <div class="w-full md:w-1/2 xl:w-[485px]  !pt-0">
                    <div class="competition-title xl:mb-[17px] md:mb-[10px] mb-[8px]"> <?php echo esc_html(get_theme_mod('contact_info_title')); ?></div>
                    <div class="competition-desc"><?php echo esc_html(get_theme_mod('contact_info_subtitle')); ?></div>

                    <div
                        class="flex flex-col xl:gap-[24px] md:gap-[18px] gap-[10px] xl:mt-[39px] md:mt-[25px] mt-[15px]">
                        <div
                            class="btn-overlay2 flex items-center w-full max-w-full xl:max-w-[485px]  h-[65px] md:h-[75px] xl:h-[99px]  bg-[#FFF4EE] text-[#16396F] font-bebas-neue text-[20px] xl:text-[24px] font-normal pl-[10px] pr-[23px]">

                            <!-- Icon box -->
                            <div
                                class="xl:w-[74px] md:w-[65px] w-[45px] h-[45px] md:h-[65px] xl:h-[74px] bg-[#16396F] flex items-center justify-center">
                                <i class="ri-mail-lock-line text-white text-[24px] md:text-[30px] xl:text-[36px]"></i>
                            </div>

                            <!-- Text -->
                            <span class="ml-[22px] leading-[81px]"> <?php echo esc_html(get_theme_mod('contact_info_email')); ?></span>
                        </div>
                        <div
                            class="btn-overlay2 flex items-center w-full max-w-full xl:max-w-[485px]  h-[65px] md:h-[75px] xl:h-[99px] bg-[#FFF4EE] text-[#16396F] font-bebas-neue text-[20px] xl:text-[24px] font-normal pl-[10px] pr-[23px]">

                            <!-- Icon box -->
                            <div
                                class="xl:w-[74px] md:w-[65px] w-[45px] h-[45px] md:h-[65px] xl:h-[74px]  bg-[#16396F] flex items-center justify-center">
                                <i class="ri-calendar-2-line text-white text-[24px] md:text-[30px] xl:text-[36px]"></i>
                            </div>

                            <!-- Text -->
                            <span class="ml-[22px] leading-[81px]"> <?php echo esc_html(get_theme_mod('contact_info_hours')); ?></span>
                        </div>
                        <div
                            class="btn-overlay2 flex items-center w-full max-w-full xl:max-w-[485px]  h-[65px] md:h-[75px] xl:h-[99px]  bg-[#FFF4EE] text-[#16396F] font-bebas-neue text-[20px] xl:text-[24px] font-normal pl-[10px] pr-[23px]">

                            <!-- Icon box -->
                            <div
                                class="xl:w-[74px] md:w-[65px] w-[45px] h-[45px] md:h-[65px] xl:h-[74px]  bg-[#16396F] flex items-center justify-center">
                                <i class="ri-phone-fill text-white text-[25px] md:text-[30px] xl:text-[36px]"></i>
                            </div>

                            <!-- Text -->
                            <span class="ml-[22px] leading-[81px]"> <?php echo esc_html(get_theme_mod('contact_info_phone')); ?></span>
                        </div>


                    </div>
                </div>
                <!-- form -->
                <div
                    class="w-full md:w-1/2 bg-[#fff] shadow-[-12px_49px_94px_0_rgba(85,89,90,0.05)] xl:w-[591px] h-auto xl:h-[595px] px-[10px] md:px-[30px] pt-[10px] md:pt-[20px] xl:pt-[24px] pr-auto xl:pr-[50px] z-2">

                    <h2
                        class=" text-[#16396F] font-bebas-neue text-[32px] md:text-[38px] font-normal md:leading-[81px] leading-[61px] md:tracking-[0.76px] tracking-[0.65px]  uppercase mb-[10px]">
                        <?php echo wp_kses_post(get_theme_mod('contact_form_title')); ?>
                    </h2>
                    <?php echo do_shortcode('[contact-form-7 id="96dd40b" title="Contact form 1"]'); ?>

                </div>



        
               <!-- <form
                    class="w-full md:w-1/2 bg-[#fff] shadow-[-12px_49px_94px_0_rgba(85,89,90,0.05)] xl:w-[591px] h-auto xl:h-[595px] px-[10px] md:px-[30px] pt-[10px] md:pt-[20px] xl:pt-[24px] pr-auto xl:pr-[50px] z-2">

                    <h2
                        class=" text-[#16396F] font-bebas-neue text-[32px] md:text-[38px] font-normal md:leading-[81px] leading-[61px] md:tracking-[0.76px] tracking-[0.65px]  uppercase mb-[10px]">
                        <?php echo wp_kses_post(get_theme_mod('contact_form_title')); ?>
                    </h2>

                    <div class="flex md:flex-row flex-col gap-[15px] md:gap-[30px] mb-[15px] md:mb-[22px]">
                        <div class="flex flex-col w-full md:w-1/2">
                            <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[6px]">First name</label>
                            <input type="text" class="input-name"
                                placeholder="First name" />
                        </div>
                        <div class="flex flex-col w-full md:w-1/2">
                            <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[6px]">Email</label>
                            <input type="email" class="input-name"
                                placeholder="you@company.com" />
                        </div>
                    </div>

                    <div class="flex flex-col mb-[18px] md:mb-[22px]">
                        <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[4px]">Subject</label>
                        <input type="text" class="input-name"
                            placeholder="Include a message..." />
                    </div>

                    <div class="flex flex-col mb-[18px] md:mb-[22px] xl:mb-[36px]">
                        <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[4px]">Message</label>
                        <textarea class="input-textarea"
                            placeholder="Include a message..."></textarea>
                    </div>

                    <button
                        class="c">
                        Send Message
                    </button>
                </form>  -->


            </div>
        </div>
    </section>
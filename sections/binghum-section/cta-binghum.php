    <section
        class="cta-sec bigham xl:pt-[39px] lg:pt-[30px] pt-[20px] xl:pb-[158px] lg:pb-[70px] md:pb-[60px] pb-[20px]">
        <div class="max-w-[1280px] px-[15px] mx-auto relative z-1">
            <div
                class="hero-inner hidden xl:block ml-[355px] mt-[30px]  absolute -top-[50px] left-1/2 -translate-x-1/2">
                <div class="brand-title-2 BARBEQUE2 !text-[156px] !h-[160px]">BARBEQUE</div>
            </div>

            <div class="cta w-full xl:!gap-[30px] xl:pt-[87px] pt-0 md:pt-[15px]">
                <div class="flex flex-col items-center md:items-start w-full md:w-1/2 xl:w-[624px] !pt-0">
                    <div class="competition-title  mb-[16px]">
                        <?php echo wp_kses_post(get_theme_mod('bigham_title', 'BINGHAM MAYORS <span>SCHOLARSHIP</span>')); ?>
                    </div>
                    <div class="competition-desc">
                        <?php echo wpautop(wp_kses_post(get_theme_mod('bigham_desc'))); ?>
                    </div>

                    <a href="<?php echo esc_url(get_theme_mod('bigham_button_link')); ?>"
                        class="flex mt-[20px] sm:mt-[30px] lg:mt-[40px] xl:mt-[46px] mb-[20px] sm:mb-[30px] lg:mb-[50px] xl:mb-[58px] w-[250px] xl:w-[273px] h-[50px] xl:h-[60px] justify-center items-center gap-[8px] border border-[#F65600] bg-[#F65600]">
                        <span class="text-white font-bebas-neue text-[20px] xl:text-[24px] leading-[30px]"><?php echo esc_html(get_theme_mod('bigham_button_text')); ?></span>
                    </a>
                    <div
                        class="btn-overlay  pt-[20px] pl-[48px] pr-[23px] pb-[18px] w-full max-w-[568px] h-auto xl:h-[99px]  bg-[#FFF4EE] text-[#16396F] font-bebas-neue text-[24px] font-normal leading-[30.233px]">
                        <?php echo wp_kses_post(get_theme_mod('bigham_highlight_text')); ?>
                    </div>
                </div>
                <div class="w-full md:w-1/2 mt-0 md:mt-[20px] cta-image-left-overlay">
                    <?php
                    $bigham_image = get_theme_mod('bigham_image');
                    if ($bigham_image): ?>
                        <img src="<?php echo esc_url($bigham_image); ?>" alt="Younger Division">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bigham.png" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
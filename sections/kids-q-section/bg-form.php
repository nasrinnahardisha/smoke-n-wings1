    <section class="bg-form xl:pt-[88px] lg:pt-[38px] pt-[30px] xl:pb-[89px] lg:pb-[70px] md:pb-[60px] pb-[30px]">
        <div class="max-w-[1280px] px-[15px] mx-auto">
            <div class="flex justify-between md:flex-row flex-col items-center gap-[20px] md:gap-[30px] xl:gap-[42px]">
                <!-- form -->
                <div class="w-full md:w-1/2 bg-[#fff] shadow-[-12px_49px_94px_0_rgba(85,89,90,0.05)]  h-auto xl:pl-[40px] ml-0 xl:ml-[28px] pt-[20px] md:pt-[30px] xl:pt-[40px] pr-auto xl:pr-[39px] z-2
                 px-[30px]">

                    <!-- Title -->
                    <h2
                        class="text-[#01112D] font-bebas-neue text-[32px] md:text-[38px]  font-normal leading-[120%] mb-2 xl:mb-0">
                         <?php echo wp_kses_post(get_theme_mod('form_title')); ?>
                    </h2>
                    <div class="text-[rgba(25,43,71,0.8)] mb-[20px] md:mb-[30px] font-dm-sans text-[16px] font-normal leading-[140%]">
                        <p> <?php echo wp_kses_post(get_theme_mod('form_desc')); ?></p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="91a2973" title="kids-Q Form"]'); ?>


                </div>
                <div class="w-full md:w-1/2 pl-0 xl:pl-[12px] text-center md:text-start">
                    <div
                        class="text-white font-bebas-neue text-[20px] md:text-[28px] xl:text-[40px] font-normal leading-[1.2] tracking-[0.2px]">
                        This will be a fun and rewarding event. Space is limited so sign up now. To enter, fill out the
                        form.</div>

                    <div
                        class="text-white font-jost text-[19px] font-normal leading-normal tracking-[0.38px] py-[20px] md:py-[24px] xl:py-[30px]">
                        Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in.
                        Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu.
                        Phasellus a tincidunt diam interdum.
                    </div>
                    <a href="#"
                        class="flex mx-auto md:mx-0 w-[250px] xl:w-[273px] h-[50px] xl:h-[60px]  justify-center items-center gap-[8px] border border-[#F65600] bg-[#F65600]">
                        <span class="text-white font-bebas-neue text-[20px] xl:text-[24px] leading-[30px]">ENTER THE
                            COMPETITION</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
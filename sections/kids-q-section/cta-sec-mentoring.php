<section class="cta-sec mentoring pb-[24px] md:pb-[30px] xl:pb-[81px]">
    <div class="max-w-[1278px] px-[15px] mx-auto">

        <div class="cta xl:!gap-[31px] items-center">
            <div class="flex flex-col items-center md:items-start  max-w-full xl:max-w-[624px] xl:!pt-[56px]">
                <div class="competition-title  mb-[10px] md:mb-[20px] lg:mb-[34px]">  <?php echo wp_kses_post(get_theme_mod('mentoring_cta_title')); ?>
                </div>
                <div class="competition-desc max-w-[624px] mb-0 md:mb-[20px] lg:mb-[34px]">
                       <?php echo esc_html(get_theme_mod('mentoring_cta_desc')); ?>
                </div>
                <a href="<?php echo esc_url(get_theme_mod('mentoring_cta_btn_link', esc_url(home_url('/enter-competition.php')))); ?>"
                    class="flex mt-[10px] mb-[20px] sm:mb-[30px] lg:mb-[50px] xl:mb-[60px] w-[250px] xl:w-[273px] h-[50px] xl:h-[60px] justify-center items-center gap-[8px] border border-[#F65600] bg-[#F65600]">
                    <span class="text-white font-bebas-neue text-[20px] xl:text-[24px] leading-[30px]">                        <?php echo esc_html(get_theme_mod('mentoring_cta_btn_text', 'ENTER THE COMPETITION')); ?></span>
                </a>
            </div>
            <div class="cta-image-left-overlay2">
                       <?php 
                $mentoring_img = get_theme_mod('mentoring_cta_image', get_template_directory_uri() . '/assets/images/mentoring.png');
                if($mentoring_img): ?>
                    <img src="<?php echo esc_url($mentoring_img); ?>" alt="Mentoring Division">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
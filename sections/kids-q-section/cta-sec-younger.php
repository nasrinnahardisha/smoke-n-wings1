<section class="cta-sec younger pt-[20px] md:pt-[30px] xl:pt-[56px] pb-[0px] md:pb-[30px] xl:pb-[39px]">
    <div class="max-w-[1278px] px-[15px] mx-auto">

        <div class="cta">
            <div class="flex flex-col items-center md:items-start mt-[20px] xl:mt-[66px] max-w-full xl:max-w-[624px]">
                <div class="competition-title">
                    <?php echo wp_kses_post(get_theme_mod('younger_cta_title', 'The <span>Younger</span> Division')); ?>
                </div>
                <div class="competition-desc max-w-[624px] mt-[10px] md:mt-[20px] xl:mt-[33px]"> <?php echo esc_html(get_theme_mod('younger_cta_desc')); ?></div>
                <a href="<?php echo esc_url(get_theme_mod('younger_cta_btn_link', esc_url(home_url('/enter-competition.php')))); ?>"
                    class="flex mt-[10px] md:mt-[20px] xl:mt-[44px] w-[250px] xl:w-[273px] h-[50px] xl:h-[60px]  justify-center items-center gap-[8px] border border-[#F65600] bg-[#F65600]">
                    <span class="text-white font-bebas-neue text-[20px] xl:text-[24px] leading-[30px]"> <?php echo esc_html(get_theme_mod('younger_cta_btn_text', 'ENTER THE COMPETITION')); ?></span>
                </a>
            </div>
            <div class="cta-image-left-overlay">
                <?php
                $younger_img = get_theme_mod('younger_cta_image');
                if ($younger_img): ?>
                    <img src="<?php echo esc_url($younger_img); ?>" alt="Younger Division">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/younger.png" alt="Younger Division">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
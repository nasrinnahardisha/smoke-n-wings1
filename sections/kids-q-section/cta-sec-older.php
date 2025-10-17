<section class="cta-sec older pt-[20px] md:pt-[30px] xl:pt-[70px] pb-[24px] md:pb-[30px] xl:pb-[31px]">
    <div class="max-w-[1277px] px-[15px] mx-auto">
        <div
            class="cta flex flex-col md:flex-row mx-auto md:mx-0 items-center justify-center text-center md:text-left xl:items-start xl:!gap-[23px]">
            <div class="flex flex-col items-center md:items-start !pt-0 xl:!pt-1 order-1 md:order-2">
                <div class="competition-title  mb-[10px] md:mb-[17px]"> <?php echo wp_kses_post(get_theme_mod('older_cta_title', 'The <span>OLDER</span> Division')); ?></div>
                <div class="competition-desc  max-w-[624px]"> <?php echo esc_html(get_theme_mod('older_cta_desc', 'The older kids will get to compete in a kid-only environment...')); ?>
                </div>
                <a href="<?php echo esc_url(get_theme_mod('older_cta_btn_link', esc_url(home_url('/enter-competition.php')))); ?>"
                    class="flex mt-[15px] md:mt-[30px] xl:mt-[42px] mb-[10px] sm:mb-[30px] lg:mb-[50px] xl:mb-[60px] w-[250px] xl:w-[273px] h-[50px] xl:h-[60px] justify-center items-center gap-[8px] border border-[#F65600] bg-[#F65600]">
                    <span class="text-white font-bebas-neue text-[20px] xl:text-[24px] leading-[30px]"> <?php echo esc_html(get_theme_mod('older_cta_btn_text', 'ENTER THE COMPETITION')); ?>
                    </span></span>
                </a>
            </div>
            <div class="order-2 md:order-1 cta-image-left-overlay">
                              <?php 
                $older_img = get_theme_mod('older_cta_image', get_template_directory_uri() . '/assets/images/older.png');
                if($older_img): ?>
                    <img src="<?php echo esc_url($older_img); ?>" alt="Older Division">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

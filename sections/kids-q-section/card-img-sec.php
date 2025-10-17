<section class="card-img-sec">
    <div class="container relative z-1">
        <div
            class="hero-inner xl:block hidden ml-[346px] mt-[60px]  absolute -top-[50px] left-1/2 -translate-x-1/2">
            <div class="brand-title BARBEQUE2 !tracking-[6.7px] !h-[160px]">BARBEQUE</div>
        </div>
        <div class="pt-[20px] md:pt-[50px] lg:pt-[70px] xl:pt-[100px]">
            <div class="menu-title">
                <h2> <?php echo wp_kses_post(get_theme_mod('kidsq_title')); ?></h2>


                
            </div>

            <div class="menu-desc pt-[10px] md:pt-[14px] font-jost">
                <p><?php echo get_theme_mod('kidsq_description'); ?></p>
            </div>

            <div
                class="card-image px-[15px] md:px-[30px] flex md:flex-row flex-col  gap-[20px] md:gap-[35px] justify-between mt-[15px] md:mt-[40px] xl:mt-[55px]">

                <?php
                $kidsq_query = new WP_Query(array(
                    'post_type' => 'kidsq',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'ASC'
                ));

                if ($kidsq_query->have_posts()) :
                    while ($kidsq_query->have_posts()) : $kidsq_query->the_post();
                        $price = get_post_meta(get_the_ID(), '_kidsq_price', true);
                ?>

                        <div class="single-img w-full md:w-1/2 border border-[#E7E7E7] bg-white">

                            <!-- Image -->
                            <div class="w-full max-w-full md:max-w-[545px]  h-auto">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kids.png" alt="KidsQ Image" class="w-full h-auto">
                                <?php endif; ?>
                            </div>

                            <!-- Content -->
                            <div class="pl-[15px] md:pl-[20px] xl:pl-[33px] pr-[15px] md:pr-[20px] xl:pr-[44px] mt-[30px]">
                                <!-- Two Titles -->
                                <div class="flex justify-between items-start">
                                    <h2
                                        class="text-[#000] font-bebas-neue text-[24px] xl:text-[34px] font-normal leading-[120%]">
                                        <?php the_title(); ?>
                                    </h2>
                                    <?php if ($price) : ?>
                                        <h2
                                            class="text-[#16396F] font-bebas-neue text-[30px] xl:text-[44px] font-normal leading-[120%]">
                                            $<?php echo esc_html($price); ?>
                                        </h2>
                                    <?php endif; ?>
                                </div>

                                <!-- Paragraph -->
                                <p
                                    class="mt-[7px] max-w-[394px] text-[#7C7C7C] font-jost text-[18px] font-normal leading-[120%] text-center md:text-left">
                                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                                </p>

                                <div class="flex ml-[12px]  justify-center mt-[29px] mb-[21px]">
                                    <a href="#"
                                        class="flex w-[170px] md:w-[240px] xl:w-[273px] xl:h-[60px] h-[50px] justify-center items-center gap-[8px] border border-[#16396F] bg-[#16396F]">
                                        <span class="text-white font-bebas-neue text-[20px] xl:text-[24px] leading-[30px]">
                                            Buy now
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No Kids-Q items found.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
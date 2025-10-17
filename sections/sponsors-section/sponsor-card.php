<section>
    <div class="container">
        <div class="xl:pt-[111px] lg:pt-[80px] md:pt-[50px] pt-[40px] xl:pb-[128px] lg:pb-[80px] md:pb-[60px] pb-[40px]">
            <div class="menu-title xl:mb-[65px] lg:mb-[55px] md:mb-[45px] mb-[20px]">
                <h2>   <?php echo wp_kses_post(get_theme_mod('sponsor_title')); ?></h2>
            </div>
            <div class="flex justify-center">
                <div class="flex flex-wrap justify-center xl:gap-x-[66px] md:gap-x-[30px] gap-x-[20px] xl:gap-y-[45px] md:gap-y-[30px] gap-y-[20px] justify-items-center mx-auto">

                    <?php
                    $sponsor_query = new WP_Query(array(
                        'post_type' => 'sponsor',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    ));
                    if ($sponsor_query->have_posts()) :
                        while ($sponsor_query->have_posts()) : $sponsor_query->the_post();
                            $logo = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>
                            <div class="w-[313px] h-[247px] flex flex-col items-center justify-center gap-[10px] p-[24px] md:p-[50px] xl:p-[66px] border-[5px] border-[#FFE4D5] bg-white">
                                <?php if ($logo): ?>
                                    <img src="<?php echo esc_url($logo); ?>" alt="<?php the_title_attribute(); ?>" class="w-full xl:w-auto h-full xl:h-[115px] object-contain" />
                                <?php endif; ?>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>No sponsors found.</p>';
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

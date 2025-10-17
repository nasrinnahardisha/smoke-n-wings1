<section class="menu">
  <div class="max-w-[1244px] mx-auto px-[15px] relative z-1">
    <div
      class="hero-inner xl:block hidden BARBEQUE ml-[-202px] mt-[77px]  absolute -top-[50px] left-1/2 -translate-x-1/2">
      <div class="brand-title-rule join-smoke !text-start"> <?php echo get_theme_mod('rules_title', 'SMOKE-N-WINGS'); ?></div>
    </div>
    <div class="pt-[20px] md:pt-[50px] lg:pt-[70px] xl:pt-[92px]">
      <div class="menu-title">
        <h2><?php echo get_theme_mod('rules_title', 'SMOKE-N-WINGS'); ?>
      <span><?php echo get_theme_mod('rules_year', '2025'); ?></span> RULES</h2>

      </div>
      <div class="menu-desc pt-[10px] md:pt-[14px] font-jost">
       <p><?php echo get_theme_mod('rules_description'); ?></p>
      </div>
    </div>

    <div class="pt-[10px] md:pt-[30px] lg:pt-[50px] xl:pt-[66px]">
      <div class="flex flex-col gap-[4px]">
        <span class="text-black font-jost text-[16px] md:text-[24px] font-normal leading-normal tracking-[0.48px]">As
          <?php echo get_theme_mod('rules_subtext_1'); ?></span>
        <span class="text-black font-jost text-[16px] md:text-[24px] font-normal leading-normal tracking-[0.48px]">The
           <?php echo get_theme_mod('rules_subtext_2'); ?></span>
      </div>
      <div
        class="grid grid-cols-1 md:grid-cols-2 gap-[24px] md:gap-[34px] justify-center mt-[20px] md:mt-[40px] lg:mt-[50px] xl:mt-[62px]">



        <?php
        $menu_query = new WP_Query(array(
          'post_type' => 'menu',
          'posts_per_page' => 4, // client যত খুশি add করতে পারবে
          'orderby' => 'date',
          'order' => 'ASC'
        ));

        if ($menu_query->have_posts()) :
          while ($menu_query->have_posts()) : $menu_query->the_post();
            $judging_time = get_post_meta(get_the_ID(), '_judging_time', true);
        ?>
            <!-- Card 1 -->
            <div
              class="max-w-full xl:max-w-[588px]  h-auto xl:h-[660px]  shadow-md border-[1.08px] border-[#E7E7E7] bg-[rgba(255,228,213,0.4)]">

              <div class="w-full h-auto">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-menu.png" alt="Menu Image" class="w-full h-auto">
                <?php endif; ?>
              </div>

              <div class=" pt-[20px] md:pt-[24] xl:pt-[34px] px-[20px] md:px-[24] xl:px-[38px]">
                <div class="flex  justify-between items-center">
                  <h2
                    class="text-[#000] mb-[10px] md:mb-[16px] font-bebas-neue text-[20px] md:text-[24px] lg:text-[30px] xl:text-[44px] font-normal leading-[120%]">
                    <?php the_title(); ?>
                  </h2>
                  <?php if ($judging_time) : ?>
                    <div class="flex gap-[5px] md:gap-[10px]">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 23" fill="none">
                        <g clip-path="url(#clip0_2012_6)">
                          <path
                            d="M12.4088 22.7743C18.7491 22.7743 23.9088 17.8389 23.9088 11.7743C23.9088 5.70964 18.7492 0.774292 12.4088 0.774292C6.06843 0.774292 0.908813 5.70964 0.908813 11.7743C0.908813 17.8389 6.06849 22.7743 12.4088 22.7743ZM12.4088 2.24093C17.9058 2.24093 22.3755 6.51625 22.3755 11.7743C22.3755 17.0323 17.9059 21.3077 12.4088 21.3077C6.91177 21.3077 2.44212 17.0323 2.44212 11.7743C2.44212 6.51625 6.91184 2.24093 12.4088 2.24093Z"
                            fill="#F65600" />
                          <path
                            d="M15.7629 15.2796C15.9048 15.3896 16.0734 15.441 16.2421 15.441C16.4682 15.441 16.6906 15.3457 16.84 15.166C17.1046 14.8507 17.0509 14.3887 16.7212 14.1356L13.1754 11.4223V5.90764C13.1754 5.5043 12.8304 5.17432 12.4087 5.17432C11.9871 5.17432 11.6421 5.5043 11.6421 5.90764V11.7743C11.6421 11.998 11.7494 12.207 11.9296 12.3463L15.7629 15.2796Z"
                            fill="#F65600" />
                        </g>
                        <defs>
                          <clipPath id="clip0_2012_6">
                            <rect width="23" height="22" fill="white" transform="translate(0.908813 0.774292)" />
                          </clipPath>
                        </defs>
                      </svg>
                      <p
                        class="text-[#000] font-bebas-neue text-[18px] md:text-[21px] font-normal tracking-normal leading-[120%] mb-2">
                        <?php echo esc_html($judging_time); ?>
                      </p>
                    </div>
                  <?php endif; ?>
                </div>
                <p class="text-[#7C7C7C] font-jost text-[16px] md:text-[20px] font-normal leading-[140%]">
                  <?php echo wp_trim_words(get_the_content(), 20); ?>
                </p>
                <a href="enter-competition.html"
                  class="flex w-full  md:w-[250px] lg:w-[273px] h-[50px] md:h-[60px] justify-center items-center gap-[8px] border border-[#16396F] bg-[#16396F] mb-4 sm:mb-8 md:mb-10 xl:mb-0 mt-4 sm:mt-8 md:mt-10 xl:mt-13">
                  <span class="text-white font-bebas-neue text-[20px] md:text-[24px] leading-[30px]">ENTER THE
                    COMPETITION</span>
                </a>
              </div>
            </div>

        <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>No menu items found.</p>';
        endif;
        ?>

      </div>
      <?php
      // ✅ Check total menu count (for showing "See More" button)
      $total_menu_count = wp_count_posts('menu')->publish;
      if ($total_menu_count > 4) :
      ?>
        <div class="text-center mt-[50px]">
          <a href="<?php echo site_url('/menu'); ?>" class="inline-block px-[40px] py-[15px] bg-[#16396F] text-white font-bebas-neue text-[20px] md:text-[24px] tracking-wide transition hover:bg-[#F65600]">
            SEE MORE MENU
          </a>
        </div>
      <?php endif; ?>

    </div>

  </div>
</section>
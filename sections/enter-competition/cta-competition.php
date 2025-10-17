    <section class="cta-sec bigham pt-[30px] md:pt-[44px]">
        <div class="container relative z-1">
            <div class="hero-inner hidden xl:block  ml-[328px] mt-[-5px]  absolute -top-[50px] left-1/2 -translate-x-1/2">
                <div class="brand-title-2 BARBEQUE2 !text-[146px] !h-[160px]">BARBEQUE</div>
            </div>

            <div class="cta xl:!gap-[30px] xl:pt-[65px] lg:pt-[40px] md:pt-[30px] sm:pt-[10px] pt-0">
                <div class="w-full md:w-1/2 xl:w-[485px] !pt-0">
                    <div class="competition-title  xl:mb-[17px] md:mb-[10px] mb-[8px]"> <?php echo esc_html(get_theme_mod('enter_competition_title')); ?></div>
                    <div class="competition-desc"> <?php echo wp_kses_post(get_theme_mod('enter_competition_desc1')); ?>
                        <br> <br class="hidden md:block">
                        <?php echo wp_kses_post(get_theme_mod('enter_competition_desc2')); ?>
                    </div>
                    <div class="flex flex-col xl:gap-[36px] md:gap-[24px] sm:gap-[18px] gap-[10px] xl:mt-[35px] md:mt-[25px] mt-[15px]">
                        <div
                            class="btn-overlay2 flex items-center w-full max-w-full xl:max-w-[485px] xl:h-[99px] h-auto bg-[#FFF4EE] text-[#16396F] font-bebas-neue text-[20px] xl:text-[24px] font-normal pl-[10px] pr-[23px]">

                            <div class="xl:w-[74px] md:w-[65px] w-[48px] h-[48px] md:h-[65px] xl:h-[74px] bg-[#16396F] flex items-center justify-center">
                                <i class="ri-mail-lock-line text-white text-[20px] md:text-[30px] xl:text-[36px]"></i>
                            </div>

                            <span class="ml-[22px] leading-[81px]"> <?php echo esc_html(get_theme_mod('enter_competition_email')); ?></span>
                        </div>
                        <div
                            class="btn-overlay2 flex items-center w-full max-w-full xl:max-w-[485px] xl:h-[99px] h-auto bg-[#FFF4EE] text-[#16396F] font-bebas-neue text-[24px] font-normal pl-[13px] pr-[23px]">

                            <div class="xl:w-[74px] md:w-[65px] w-[48px] h-[48px] md:h-[65px] xl:h-[74px] bg-[#16396F] flex items-center justify-center">
                                <i class="ri-calendar-2-line text-white text-[20px] md:text-[30px] xl:text-[36px]"></i>
                            </div>

                            <span class="ml-[22px] leading-[81px]"> <?php echo esc_html(get_theme_mod('enter_competition_hours')); ?></span>
                        </div>
                        <div
                            class="btn-overlay2 flex items-center w-full max-w-full xl:max-w-[485px] xl:h-[99px] h-auto bg-[#FFF4EE] text-[#16396F] font-bebas-neue text-[24px] font-normal pl-[13px] pr-[23px]">

                            <div class="xl:w-[74px] md:w-[65px] w-[48px] h-[48px] md:h-[65px] xl:h-[74px] bg-[#16396F] flex items-center justify-center">
                                <i class="ri-phone-fill text-white text-[20px] md:text-[30px] xl:text-[36px]"></i>
                            </div>

                            <span class="ml-[22px] leading-[81px]"> <?php echo esc_html(get_theme_mod('enter_competition_phone')); ?></span>
                        </div>


                    </div>
                </div>
                <div
                    class="bg-[#fff] shadow-[-12px_49px_94px_0_rgba(85,89,90,0.05)] w-full md:w-1/2 xl:w-[591px] h-auto  px-[10px] md:px-[30px] pt-[10px] md:pt-[20px] xl:pt-[24px] pr-auto xl:pr-[50px] z-2">

                    <!-- Title -->
                    <h2
                        class="text-[#16396F] font-bebas-neue text-[32px] md:text-[38px] font-normal xl:leading-[81px] leading-[50px] md:tracking-[0.76px] tracking-[0.65px]  uppercase mb-[10px]">
                        <?php echo wp_kses_post(get_theme_mod('enter_form_title')); ?>
                    </h2>

                                   <?php echo do_shortcode('[contact-form-7 id="57fc11b" title="Untitled"]'); ?>
                    <!-- <div class="flex lg:flex-row flex-col gap-[15px] lg:gap-[30px] mb-[18px] md:mb-[22px]">
                   
                        <div class="flex flex-col w-full lg:w-1/2 relative">
                            <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[6px]">Team name</label>
                            <input type="text" class="enter-name"
                                placeholder="Enter team name" />
                         
                            <span class="absolute right-3 top-[38px] text-gray-400">
                                <i class="ri-user-line"></i> 
                            </span>
                        </div>

                
                        <div class="flex flex-col w-full lg:w-1/2 relative">
                            <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[6px]">Email</label>
                            <input type="email" class="enter-name"
                                placeholder="you@company.com" />
                           
                            <span class="absolute right-3 top-[38px] text-gray-400">
                                <i class="ri-mail-line"></i> 
                            </span>
                        </div>
                    </div>

                 
                    <div class="flex flex-col mb-[18px] md:mb-[22px] relative">
                        <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[4px]">Head Cook</label>
                        <input type="text" class="enter-name"
                            placeholder="Head Cook" />
                        <i
                            class="ri-user-star-line absolute right-3 top-[38px] text-gray-500 text-lg pointer-events-none"></i>
                    </div>

                   
                    <div class="flex lg:flex-row flex-col gap-[15px] lg:gap-[30px] mb-[18px] md:mb-[22px]">
                        <div class="flex flex-col w-full lg:w-1/2 relative">
                            <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[4px]">Address</label>
                            <input type="text" class="enter-name"
                                placeholder="Enter your address" />
                            <i
                                class="ri-map-pin-line absolute right-3 top-[38px] text-gray-500 text-lg pointer-events-none"></i>
                        </div>

                        <div class="flex flex-col w-full lg:w-1/2 relative">
                            <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[4px]">Phone Number</label>
                            <input type="text" class="enter-name"
                                placeholder="Enter your phone number" />
                            <i
                                class="ri-phone-line absolute right-3 top-[38px] text-gray-500 text-lg pointer-events-none"></i>
                        </div>
                    </div>

                   
                    <div class="flex lg:flex-row flex-col gap-[15px] lg:gap-[30px] mb-[18px] md:mb-[22px]">
                        <div class="flex flex-col w-full lg:w-1/2 relative">
                            <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[4px]">
                                Are you a KCBS Member?
                            </label>
                            <input type="text" class="enter-name"
                                placeholder="Yes" />
                            <i
                                class="ri-user-line absolute right-3 top-[38px] text-gray-500 text-lg pointer-events-none"></i>
                        </div>

                        <div class="flex flex-col w-full lg:w-1/2 relative">
                            <label class="text-[#16396F] font-bebas-neue text-[16px] mb-[4px]">
                                Head Cook KCBS Number
                            </label>
                            <input type="text" class="enter-name"
                                placeholder="Head cook KCBS number" />
                            <img src="./assets/images/image 6.png"
                                class="absolute right-3 top-[43px] text-lg pointer-events-none" alt="">

                        </div>
                    </div>


                 
                    <div class="bg-[#FFF4EE] flex flex-col items-start px-[18px] py-[22px]
 gap-[15px] h-auto xl:h-[125px] w-full mt-[18px] md:mt-10 xl:mt-21">
                        
                        <p class="text-[#16396F] font-jost text-[16px] font-semibold leading-[24px] tracking-[0.32px]">
                            I have read and agree to the smoke-n-wings Competition Rules
                        </p>
                        <div class="flex lg:flex-row flex-col gap-[12px] xl:mb-[22px] mb-0 w-full">
                      
                            <div class="flex flex-col h-[40px] w-full lg:w-1/2">
                                <div class="h-[48px] flex items-center gap-2 bg-[#fff] px-3 pr-10 !rounded-none w-full">
                                    <input type="checkbox" name="agree" class="form-checkbox"
                                        onclick="this.checked ? document.getElementById('noCheckbox').checked=false : null"
                                        id="yesCheckbox">
                                    <span>Yes</span>
                                </div>
                            </div>

                            <div class="flex flex-col h-[40px] w-full lg:w-1/2">
                                <div class="h-[48px] flex items-center gap-2 bg-[#fff] px-3 pr-10 !rounded-none w-full">
                                    <input type="checkbox" name="agree" class="form-checkbox"
                                        onclick="this.checked ? document.getElementById('yesCheckbox').checked=false : null"
                                        id="noCheckbox">
                                    <span>No</span>
                                </div>
                            </div>

                        </div>
                    </div>

                  
                    <div class="bg-[#FFF4EE] flex flex-col items-start px-[18px] py-[22px]
 gap-[15px] w-full mt-[18px] xl:mt-6">
                       
                        <p class="text-[#16396F] font-jost text-[16px] font-semibold leading-[24px] tracking-[0.32px]">
                            TO HELP US PROMOTE THIS EVENT AND OUR FUNDRAISER TO THE PUBLIC, MY TEAM WOULD LIKE TO SERVE
                            FOOD ON FRIDAY NIGHT FROM 5-7PM. 100% OF SALES FROM FOOD REMAINS WITH THE TEAM.
                        </p>
                        <div class="flex flex-col gap-[10px]  w-full">
                          
                            <div
                                class="flex flex-col h-[40px] text-[#000] font-jost text-[12px] font-semibold leading-normal tracking-[0.24px]">
                                <div class="h-[48px] flex items-center gap-2 bg-[#fff] px-3 !rounded-none w-full">
                                    <input type="checkbox" name="agree" class="form-checkbox"
                                        onclick="this.checked ? document.getElementById('noCheckbox2').checked=false : null"
                                        id="yesCheckbox2">
                                    <span>Yes - My team would like to serve food</span>
                                </div>
                            </div>

                            <div class="flex flex-col h-[40px]">
                                <div
                                    class="h-[48px] flex items-center gap-2 bg-[#fff] px-3  !rounded-none w-full text-[#000] font-jost text-[12px] font-semibold leading-normal tracking-[0.24px]">
                                    <input type="checkbox" name="agree" class="form-checkbox"
                                        onclick="this.checked ? document.getElementById('yesCheckbox2').checked=false : null"
                                        id="noCheckbox2">
                                    <span>No</span>
                                </div>
                            </div>

                        </div>
                    </div>
                   

                    <div class="bg-[#FFF4EE] flex flex-col items-start px-[18px] py-[22px]
 gap-[15px] w-full mt-[18px] xl:mt-6">
                       
                        <p class="text-[#16396F] font-jost text-[16px] font-semibold leading-[24px] tracking-[0.32px]">
                            MY TEAM WOULD BE WILLING TO MENTOR AN OLDER DIVISION KIDS-Q CONTESTANT FOR 30 MINUTES
                            IMMEDIATELY FOLLOWING THE COOKS MEETING.
                        </p>
                        <div class="flex flex-col gap-[10px]  w-full">
                           
                            <div
                                class="flex flex-col h-[40px] text-[#000] font-jost text-[11px] font-semibold leading-normal tracking-[0.24px]">
                                <div class="h-[48px] flex items-center gap-2 bg-[#fff] px-3  !rounded-none w-full">
                                    <input type="checkbox" name="agree" class="form-checkbox"
                                        onclick="this.checked ? document.getElementById('noCheckbox3').checked=false : null"
                                        id="yesCheckbox3">
                                    <span>YES – MY TEAM WOULD LOVE TO HELP A KID PREPARE FOR THE KIDS-Q</span>
                                </div>
                            </div>

                            <div class="flex flex-col h-[40px]">
                                <div
                                    class="h-[48px] flex items-center gap-2 bg-[#fff] px-3 pr-10 !rounded-none w-full text-[#000] font-jost text-[12px] font-semibold leading-normal tracking-[0.24px]">
                                    <input type="checkbox" name="agree" class="form-checkbox"
                                        onclick="this.checked ? document.getElementById('yesCheckbox3').checked=false : null"
                                        id="noCheckbox3">
                                    <span>No</span>
                                </div>
                            </div>

                        </div>
                    </div>


                    
                    <div class="mt-[18px] xl:mt-6">
                        <label
                            class="flex items-start gap-2 text-[#000] font-jost text-[11px] font-semibold leading-normal tracking-[0.24px]">
                            <input type="checkbox" class="h-3 !w-3 accent-[#16396F] mt-1">
                            <span class="text-sm text-[#16396F]">I UNDERSTAND THAT POWER WILL NOT BE PROVIDED AND I
                                NEED
                                TO PROVIDE MY OWN POWER SOURCE.</span>
                        </label>
                    </div>

                  
                    <button
                        class="enter-sub-btn">
                        Submit
                    </button> -->
                </div>
            </div>

            <div class="xl:pt-[160px] lg:pt-[70px] md:pt-[60px] pt-[30px] xl:pb-[115px] lg:pb-[70px] md:pb-[60px] pb-[30px]">
                <div class="image-card flex flex-col w-full gap-[20px] md:gap-[30px] xl:gap-[50px]">

                    <?php
                    $cook_query = new WP_Query(array(
                        'post_type' => 'cooksite',
                        'posts_per_page' => -1, // সব দেখাবে
                        'orderby' => 'date',
                        'order' => 'ASC',
                    ));

                    if ($cook_query->have_posts()) :
                        while ($cook_query->have_posts()) : $cook_query->the_post();
                            $price = get_post_meta(get_the_ID(), '_cook_price', true);
                    ?>


                            <div
                                class="single-img1 w-full max-w-[1176px] justify-between h-auto xl:h-[317px] flex  flex-col md:flex-row border border-[#E7E7E7] bg-white flex-shrink-0">
                                <!-- Left Image -->
                                <div class="max-w-full md:max-w-[545px] w-full h-auto  xl:h-[317px]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-cooksite.png" alt="Cook Site" class="w-full h-auto">
                                    <?php endif; ?>
                                </div>

                                <!-- Right Content -->
                                <div class="flex-1 flex flex-col justify-between md:pt-[35px] pt-[24px] xl:pt-[45px] pb-[24px] md:pb-[36px] xl:pb-[48px]  pl-auto xl:pl-[47px] pr-auto xl:pr-[56px] px-[15px] md:px-[30px]">
                                    <!-- Top Texts -->
                                    <div class="flex justify-between items-start">
                                        <h2 class="text-[#000] font-bebas-neue text-[19px] sm:text-[24px] md:text-[28px] xl:text-[34px] font-normal leading-[120%]">
                                            <?php the_title(); ?>
                                        </h2>
                                        <?php if ($price) : ?>
                                            <h2 class="text-[#16396F] font-bebas-neue text-[19px] sm:text-[24px] md:text-[28px] lg:text-[36px] xl:text-[44px] font-normal leading-[120%] text-right w-[142px]">
                                                $<?php echo esc_html($price); ?>
                                            </h2>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Paragraph -->
                                    <p
                                        class="mt-[6px] max-w-full w-full xl:max-w-[485px] text-[#7C7C7C] font-jost text-[16px] md:text-[18px] font-normal md:leading-[140%] leading-[130%] text-center md:text-start">
                                        <?php echo wp_trim_words(get_the_content(), 25); ?>
                                    </p>

                                    <!-- Button -->
                                    <a href="#"
                                        class="flex mx-auto md:mx-0 mt-[15px] md:mt-[20px] xl:mt-[29px] w-[200px] md:w-[273px] h-[40px] md:h-[60px] justify-center items-center gap-[8px] border border-[#16396F] bg-[#16396F]">
                                        <span class="text-white font-bebas-neue text-[20px] md:text-[24px] leading-[30px]">
                                            Buy now
                                        </span>
                                    </a>
                                </div>
                            </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No cook sites found.</p>';
                    endif;
                    ?>


                </div>
            </div>
        </div>
    </section>
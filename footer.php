 <footer class="bg-[#16396F]">
     <div class="container">
         <div
             class="flex flex-col md:flex-row  justify-between gap-[30px] md:gap-[60x] xl:gap-[129px] pt-[25px] md:pt-[45px] text-center sm:text-start">
             <div class="w-full md:max-w-[695px]">
                 <div class="text-[#FFE4D5] font-bebas-pro font-bold uppercase 
         text-[32px] sm:text-[48px] md:text-[60px] lg:text-[88px] xl:text-[115px]
         leading-[40px] sm:leading-[54px] md:leading-[76px] lg:leading-[92px] xl:leading-[102px]
         tracking-[1px] sm:tracking-[1.5px] md:tracking-[2px] lg:tracking-[2.2px] xl:tracking-[2.3px]">
                     Smoke-N-Wings
                     <span class="text-[#F65600]">BBQ</span> Competition
                 </div>

             </div>
             <div class="w-full md:max-w-[367px] mt-[10px] md:mt-[20px] xl:mt-[24px]">
                 <ul class="">
                     <li>
                         <a href="enter-competition.html" class="enter-btn px-auto xl:!px-[119px] font-bebas-pro">Enter
                             Competition</a>
                     </li>
                 </ul>
                 <div
                     class="flex flex-col sm:flex-row gap-[15px]  sm:gap-[30px] md:gap-[60px] lg:gap-[80px] xl:gap-[98px] mt-[20px] md:mt-0">



                     <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_menu_1',
                            'container' => false,
                            'menu_class' => 'flex flex-col gap-[14px] text-[20px] font-bebas-pro font-bold leading-normal tracking-[0.4px] uppercase text-[#fff] xl:pt-10 lg:pt-8 md:pt-6 pt-4 xl:pb-10 lg:pb-8 md:pb-6 sm:pb-4 pb-0',
                            'fallback_cb' => false,
                            'depth' => 1,
                            'walker' => new Tailwind_Navwalker_footer(),
                        ));
                        ?>




                     <!-- <ul
                         class="flex  flex-col  gap-[14px]  text-[20px] font-bebas-pro font-bold   leading-normal tracking-[0.4px] uppercase text-[#fff] xl:pt-10 lg:pt-8 md:pt-6 pt-4 xl:pb-10 lg:pb-8 md:pb-6 sm:pb-4 pb-0">
                         <li><a href="rules.html">Rules</a>
                         </li>
                         <li><a href="sponsors.html">Sponsors</a></li>
                         <li><a href="kids-q.html">Kids-Q</a></li>
                     </ul> -->

                     <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_menu_2',
                            'container' => false,
                            'menu_class' => 'flex flex-col gap-[12px] md:gap-[18px]  text-[20px] font-bebas-pro font-bold   leading-normal tracking-[0.4px] uppercase text-[#fff] xl:pt-10 lg:pt-8 md:pt-6 sm:pt-4 pt-0 xl:pb-10 lg:pb-8 md:pb-6 pb-4',
                            'fallback_cb' => false,
                            'depth' => 1,
                            'walker' => new Tailwind_Navwalker_footer(),
                        ));
                        ?>
                     <!-- <ul
                         class="flex flex-col gap-[12px] md:gap-[18px]  text-[20px] font-bebas-pro font-bold   leading-normal tracking-[0.4px] uppercase text-[#fff] xl:pt-10 lg:pt-8 md:pt-6 sm:pt-4 pt-0 xl:pb-10 lg:pb-8 md:pb-6 pb-4">
                         <li><a href="bingham.html">Bingham Mayors Scholarship</a></li>
                         <li><a href="contact.html">Contact Us</a></li>
                     </ul> -->
                 </div>
             </div>
         </div>
         <hr class="border-t border-[#FFFFFF] mx-auto w-full xl:w-[1334px] xl:ml-[-70px] h-[2px] mt-0 xl:mt-[-9px]" />

         <div class="flex justify-center items-center py-[15px] md:py-[20px]">
             <div
                 class="text-[#FFE4D5] font-jost text-[12px] md:text-[15px] font-normal leading-normal tracking-[0.3px] uppercase text-center">
                 © copyright 2025 smoke-n-wings.com. All rights reserved.
             </div>
         </div>

 </footer>


 <?php wp_footer(); ?>

 </body>

 </html>
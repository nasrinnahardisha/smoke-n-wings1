<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/title-logo.png" type="image/png">
    <title><?php bloginfo('name'); ?> <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="./src/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="./src/style.css" />
    <link rel="stylesheet" href="./src/rules.css" />
    <link rel="stylesheet" href="./src/responsive.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="w-full bg-[#fff] z-50 py-3 xl:py-0 px-[30px] xl:px-[15px]">
        <div class="max-w-[1225px] mx-auto flex items-center justify-between">

            <div class="logo">


                <?php if (has_custom_logo()): ?>
                    <div class="standard-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else: ?>
                    <a href="<?php echo home_url('/'); ?>" class="standard-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/images/logo.jpg" alt="standard-logo">
                    </a>
                <?php endif; ?>

                <?php if (get_theme_mod('sticky_logo')): ?>
                    <a href="<?php echo home_url('/'); ?>" class="sticky-logo">
                        <img src="<?php echo esc_url(get_theme_mod('sticky_logo')); ?>" alt="sticky-logo">
                    </a>
                <?php endif; ?>

                <!-- <a href="index.html" class="standard-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/logo.jpg" alt="standard-logo">
                </a>
                <a href="index.html" class="sticky-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>./images/logo.jpg" alt="sticky-logo">
                </a> -->

            </div>



            <div class="flex items-center ml-[-21px]">


                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu', // নাম অবশ্যই register_nav_menus এ দেওয়া নামের সাথে মিলতে হবে
                    'container' => 'nav',
                    'container_id' => 'nav-links',
                    'container_class' => 'hidden lg:flex',
                    'menu_class' => '"nav__links flex items-center gap-[20px] lg:gap-[30px] text-[20px] font-bebas-pro font-bold   leading-normal tracking-[0.4px] uppercase text-[#000] py-11',
                    'walker' => new Tailwind_Navwalker() // Custom walker ক্লাস ইউজ করা হচ্ছে
                ));
                ?>

                <!-- <nav id="nav-links" class="hidden lg:flex">
                    <ul
                        class="nav__links flex items-center gap-[20px] lg:gap-[30px] text-[20px] font-bebas-pro font-bold   leading-normal tracking-[0.4px] uppercase text-[#000] py-11">
                        <li><a href="rules.html">Rules</a>
                        </li>
                        <li><a href="sponsors.html">Sponsors</a></li>
                        <li><a href="kids-q.html">Kids-Q</a></li>
                        <li><a href="bingham.html">Bingham Mayors Scholarship</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </nav> -->
            </div>
            <ul class="hidden lg:flex mr-[7px]">
                <li>
                    <a href="<?php echo esc_url(get_theme_mod('header_button_link')); ?>" class="enter-btn font-bebas-pro"><?php echo esc_html(get_theme_mod('header_button_text')); ?></a>
                </li>
            </ul>


            <div class="flex lg:hidden items-center gap-4">
                <ul class="hidden sm:flex lg:hidden">
                    <li>
                        <a href="<?php echo esc_url(get_theme_mod('header_button_link')); ?>" class="enter-btn font-bebas-pro"><?php echo esc_html(get_theme_mod('header_button_text')); ?></a>
                    </li>
                </ul>
          <button id="menu-toggle" aria-label="Open menu" class="focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 51 51" fill="none">
                        <circle cx="25.5" cy="25.5" r="25.5" fill="#F65600" />
                        <path d="M25 21L35 21" stroke="white" stroke-width="2" />
                        <path d="M15 28L35 28" stroke="white" stroke-width="2" />
                    </svg>
                </button>

                <button id="menu-close" aria-label="Close menu"
                    class="w-[45px] h-[45px] rounded-full items-center justify-center bg-[#F65600] hover:bg-gray-100 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F65600] text-white text-2xl hidden">
                    <i class="ri-close-line"></i>
                </button>
            </div>


                 <?php
            wp_nav_menu(array(
                'theme_location' => 'mobile_menu',
                'container' => 'nav',
                'container_id' => 'mobile-nav',
                'container_class' => 'flex opacity-0 translate-x-0 fixed top-[80px] right-0 h-screen w-[260px] bg-[#fff] p-4 shadow-lg z-50 lg:hidden transition-all duration-500 ease-in-out',
                'menu_class' => 'flex flex-col   gap-5 text-[16px] font-bold leading-[20px] text-[#031F42]',
                'walker' => new Tailwind_Navwalker_mobile()
            ));
            ?>
            <!-- <nav id="mobile-nav"
                class="flex opacity-0 translate-x-0 fixed top-[80px] right-0 h-screen w-[260px] bg-[#FFE4D5] p-4 shadow-lg z-50 lg:hidden transition-all duration-500 ease-in-out">
                <ul class="flex flex-col   gap-5 text-[16px] font-bold leading-[20px] text-[#031F42]">
                    <li><a href="rules.html" class="flex  items-center">Rules</a>
                    </li>
                    <li><a href="sponsors.html">Sponsors</a></li>
                    <li><a href="kids-q.html">Kids-Q</a></li>
                    <li><a href="bingham.html">Bingham Mayors Scholarship</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li>
                        <a href="enter-competition.html" class="flex sm:hidden enter-btn font-bebas-pro">Enter Competition</a>
                    </li>
                </ul>
            </nav> -->
        </div>

    </header>
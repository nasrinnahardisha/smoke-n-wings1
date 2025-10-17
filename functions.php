<?php
function smoke_theme_scripts()
{
    // CSS
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css');

    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');

    wp_enqueue_style('remixicon-css', 'https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css', array(), '4.0.0');

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0');


    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/output.css', array(), filemtime(get_template_directory() . '/src/output.css'));

    wp_enqueue_style('custom-style', get_template_directory_uri() . '/src/style.css');
    wp_enqueue_style('rules-style', get_template_directory_uri() . '/src/rules.css');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/src/responsive.css');


    wp_enqueue_style('theme-style', get_stylesheet_uri());



    // JS
    wp_enqueue_script('jquery'); // WordPress default jQuery


    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);

    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/script.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'smoke_theme_scripts');



//logo & navbar
function smokelms_theme_registration()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');



    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'smokelms'),
        'mobile_menu' => __('Mobile Menu', 'smokelms'),
        'footer_menu_1' => __('Footer Menu 1', 'smokelms'),
        'footer_menu_2' => __('Footer Menu 2', 'smokelms')
    ));
}

add_action("after_setup_theme", "smokelms_theme_registration");







/**
 * Tailwind NavWalker
 */

class Tailwind_Navwalker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="relative group">';
        $output .= '<a href="' . esc_url($item->url) . '" class="flex items-center px-3 py-2 text-[18px] font-bold leading-[20px] text-[#000] hover:text-[#F65600] transition-all duration-300">';
        $output .= esc_html($item->title);
        $output .= '</a>';
        $output .= '</li>';
    }

    function end_el(&$output, $item, $depth = 0, $args = []) {}
}
class Tailwind_Navwalker_footer extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="relative group">';
        $output .= '<a href="' . esc_url($item->url) . '" class="hover:text-[#F65600] transition-all duration-300">';
        $output .= esc_html($item->title);
        $output .= '</a></li>';
    }

    function end_el(&$output, $item, $depth = 0, $args = [])
    {
        // কিছুই দরকার নেই
    }
}

class Tailwind_Navwalker_mobile extends Walker_Nav_Menu
{

    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $li_class = 'relative group';

        // Default link class
        $a_class = 'flex flex-col   gap-5 text-[16px] font-bold leading-[20px] text-[#031F42]';

        // Last item special class
        if (strtolower($item->title) === 'enter competition') {
            $a_class = 'inline-flex font-normal sm:hidden enter-btn font-bebas-pro';
        }

        $output .= '<li class="' . esc_attr($li_class) . '">';
        $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($a_class) . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
        $output .= '</li>';
    }

    function end_el(&$output, $item, $depth = 0, $args = []) {}
}





// Sticky Logo
function smokelms_customize_register($wp_customize)
{

    $wp_customize->add_setting('sticky_logo');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sticky_logo', array(
        'label' => __('Sticky Logo', 'smokelms'),
        'section' => 'title_tagline', // optional: logo এর নিচে দেখাবে
        'settings' => 'sticky_logo',
    )));


    // Button Text and link
    $wp_customize->add_setting('header_button_link', array(
        'default' => 'http://localhost/smoke-N-wings/wordpress/enter-competition/'
    ));
    $wp_customize->add_control('header_button_link', array(
        'label' => __('Header Button Link', 'smokelms'),
        'section' => 'title_tagline',
        'type' => 'url',
    ));
    // Button Text
    $wp_customize->add_setting('header_button_text', array(
        'default' => 'Enter Competition',
    ));

    $wp_customize->add_control('header_button_text', array(
        'label' => __('Header Button Text', 'smokelms'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));
}
add_action('customize_register', 'smokelms_customize_register');



function smokelms_customize_homepage_settings($wp_customize)
{

    // Home Page Panel তৈরি
    $wp_customize->add_panel('homepage_panel', array(
        'title' => __('Home Page', 'smokelms'),
        'priority' => 110,
    ));
    // Kids-Q Page Panel
    $wp_customize->add_panel('Kidspage_panel', array(
        'title'    => __('Kids-Q Page', 'smokelms'),
        'priority' => 120, // Home Page এর পরে দেখাতে চাইলে 120
    ));

    // Hero Section********************
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'smokelms'),
        'panel' => 'homepage_panel',
        'priority' => 1,
    ));

    //hero Button Text and link 1
    $wp_customize->add_setting('hero_button_link1', array(
        'default' => 'http://localhost/smoke-N-wings/wordpress/enter-competition/'
    ));
    $wp_customize->add_control('hero_button_link1', array(
        'label' => __('Hero Button Link', 'smokelms'),
        'section' => 'hero_section',
        'type' => 'url',
    ));
    // Button Text
    $wp_customize->add_setting('hero_button_text1', array(
        'default' => 'Enter Competition',
    ));

    $wp_customize->add_control('hero_button_text1', array(
        'label' => __('Hero Button Text', 'smokelms'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    //hero Button Text and link 2
    $wp_customize->add_setting('hero_button_link2', array(
        'default' => 'http://localhost/smoke-N-wings/wordpress/rules/'
    ));
    $wp_customize->add_control('hero_button_link2', array(
        'label' => __('Hero Button Link', 'smokelms'),
        'section' => 'hero_section',
        'type' => 'url',
    ));
    // Button Text
    $wp_customize->add_setting('hero_button_text2', array(
        'default' => 'CHECK OUT THE RULES',
    ));

    $wp_customize->add_control('hero_button_text2', array(
        'label' => __('Hero Button Text', 'smokelms'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    // hero-image
    $wp_customize->add_setting('hero_image', array(
        'default' => get_template_directory_uri() . '/assets/images/meet.png',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_img', array(
        'label' => __('Hero Img 1', 'smokelms'),
        'section' => 'hero_section',
        'settings' => 'hero_image',
    )));

    // course title
   
    $wp_customize->add_section('course_section', array(
        'title' => __('Course Section', 'smokelms'),
        'panel' => 'homepage_panel',
        'priority' => 1,
    ));
    // Title
    $wp_customize->add_setting('course_title', array(
        'default' => 'Smokin’ Highlights: The <span> best bbq</span>in action',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('course_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'course_section',
        'type' => 'text',
    ));

    // CTA-Join Section********************
    //********************
    $wp_customize->add_section('cta_join_section', array(
        'title' => __('cta-join Section', 'smokelms'),
        'panel' => 'homepage_panel',
        'priority' => 1,
    ));

    // Title
    $wp_customize->add_setting('cta_title', array(
        'default' => 'Join us for the',
    ));

    $wp_customize->add_control('cta_title', array(
        'label' => __('Hero Title_', 'smokelms'),
        'section' => 'cta_join_section',
        'type' => 'text',
    ));

    // Title (span part)
    $wp_customize->add_setting('cta_title_span', array(
        'default' => '2025 Smoke-N-Wings',
    ));
    $wp_customize->add_control('cta_title_span', array(
        'label' => __('CTA Title Span', 'smokelms'),
        'section' => 'cta_join_section',
        'type' => 'text',
    ));


    // Description
    $wp_customize->add_setting('cta_description', array(
        'default' => 'Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition. Teams will cook chicken, ribs, pork and brisket.
The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.',
    ));

    $wp_customize->add_control('cta_description', array(
        'label' => __('Cta-Join  Description', 'smokelms'),
        'section' => 'cta_join_section',
        'type' => 'text',
    ));


    // cta-image
    $wp_customize->add_setting('cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/join-us.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cta_image', array(
        'label' => __('CTA Image', 'smokelms'),
        'section' => 'cta_join_section',
        'settings' => 'cta_image',
    )));




    // =====================
    // WHEN & WHERE SECTION
    // =====================
    $wp_customize->add_section('when_where_section', array(
        'title'       => __('When & Where Section', 'smokelms'),
        'panel' => 'homepage_panel',
        'priority'    => 40,
    ));

    // WHEN title
    $wp_customize->add_setting('when_title', array(
        'default' => 'WHEN',
    ));
    $wp_customize->add_control('when_title', array(
        'label'   => __('When Title', 'smokelms'),
        'section' => 'when_where_section',
        'type'    => 'text',
    ));

    // WHEN date
    $wp_customize->add_setting('when_date', array(
        'default' => 'June 28-29, 2025',
    ));
    $wp_customize->add_control('when_date', array(
        'label'   => __('When Date', 'smokelms'),
        'section' => 'when_where_section',
        'type'    => 'text',
    ));

    // WHERE title
    $wp_customize->add_setting('where_title', array(
        'default' => 'WHERE',
    ));
    $wp_customize->add_control('where_title', array(
        'label'   => __('Where Title', 'smokelms'),
        'section' => 'when_where_section',
        'type'    => 'text',
    ));

    // WHERE location
    $wp_customize->add_setting('where_location', array(
        'default' => 'Blackfoot, Idaho',
    ));
    $wp_customize->add_control('where_location', array(
        'label'   => __('Where Location', 'smokelms'),
        'section' => 'when_where_section',
        'type'    => 'text',
    ));

    // WHERE sublocation
    $wp_customize->add_setting('where_sublocation', array(
        'default' => 'Blackfoot Airport (McCarly Field)',
    ));
    $wp_customize->add_control('where_sublocation', array(
        'label'   => __('Where Sublocation', 'smokelms'),
        'section' => 'when_where_section',
        'type'    => 'text',
    ));

    // Right-side paragraph
    $wp_customize->add_setting('when_where_description', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.',
    ));
    $wp_customize->add_control('when_where_description', array(
        'label'   => __('Description Text', 'smokelms'),
        'section' => 'when_where_section',
        'type'    => 'textarea',
    ));



    // =======================
    // DATE SECTION CUSTOMIZER
    // =======================
    $wp_customize->add_section('date_section', array(
        'title'       => __('Date Section', 'smokelms'),
        'panel' => 'homepage_panel',
        'priority'    => 45,
    ));

    // Kids-Q button text
    $wp_customize->add_setting('kidsq_text', array(
        'default' => 'KIDS-Q',
    ));
    $wp_customize->add_control('kidsq_text', array(
        'label'   => __('Kids-Q Button Text', 'smokelms'),
        'section' => 'date_section',
        'type'    => 'text',
    ));

    // Kids-Q link
    $wp_customize->add_setting('kidsq_link', array(
        'default' => 'kids-q.php',
    ));
    $wp_customize->add_control('kidsq_link', array(
        'label'   => __('Kids-Q Link URL', 'smokelms'),
        'section' => 'date_section',
        'type'    => 'url',
    ));

    // Saturday box text
    $wp_customize->add_setting('saturday_text', array(
        'default' => 'SATURDAY JUNE 29TH',
    ));
    $wp_customize->add_control('saturday_text', array(
        'label'   => __('Saturday Text', 'smokelms'),
        'section' => 'date_section',
        'type'    => 'text',
    ));

    // Friday date heading
    $wp_customize->add_setting('friday_heading', array(
        'default' => 'FRIDAY JUNE 28, 2024',
    ));
    $wp_customize->add_control('friday_heading', array(
        'label'   => __('Friday Date Heading', 'smokelms'),
        'section' => 'date_section',
        'type'    => 'text',
    ));

    // Event title
    $wp_customize->add_setting('event_title', array(
        'default' => 'BINGHAM COUNTY MAYORS SCHOLARSHIP FUNDRAISER',
    ));
    $wp_customize->add_control('event_title', array(
        'label'   => __('Event Title', 'smokelms'),
        'section' => 'date_section',
        'type'    => 'text',
    ));

    // Event description
    $wp_customize->add_setting('event_description', array(
        'default' => 'Friday June 28, 2024 from 5-7pm — Community invited to enjoy BBQ, Kids-Q activities and an auction to benefit the high school seniors of Bingham County through the Bingham County Mayors Scholarship. Come and help support a wonderful cause.',
    ));
    $wp_customize->add_control('event_description', array(
        'label'   => __('Event Description', 'smokelms'),
        'section' => 'date_section',
        'type'    => 'textarea',
    ));




    // CTA-ask Section********************
    // Hero Section********************
    $wp_customize->add_section('cta_ask_section', array(
        'title' => __('cta-ask Section', 'smokelms'),
        'panel' => 'homepage_panel',
        'priority' => 1,
    ));

    // Title
    $wp_customize->add_setting('cta_ask_title', array(
        'default' => 'Frequently',
    ));

    $wp_customize->add_control('cta_ask_title', array(
        'label' => __('Hero Title_', 'smokelms'),
        'section' => 'cta_ask_section',
        'type' => 'text',
    ));

    // Title (span part)
    $wp_customize->add_setting('cta_span_title_span', array(
        'default' => 'Asked',
    ));
    $wp_customize->add_control('cta_span_title_span', array(
        'label' => __('CTA ASK Title Span', 'smokelms'),
        'section' => 'cta_ask_section',
        'type' => 'text',
    ));

    // cta-image
    $wp_customize->add_setting('cta_ask_image', array(
        'default' => get_template_directory_uri() . '/assets/images/ask.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cta_ask_image', array(
        'label' => __('CTA ASK Image', 'smokelms'),
        'section' => 'cta_ask_section',
        'settings' => 'cta_ask_image',
    )));


    for ($i = 1; $i <= 4; $i++) {
        // Question
        $wp_customize->add_setting("faq_question_$i", array(
            'default' => "Question one Goes here? $i",
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("faq_question_$i", array(
            'label' => __("Question $i", 'smokelms'),
            'section' => 'cta_ask_section',
            'type' => 'text',
        ));

        // Answer
        $wp_customize->add_setting("faq_answer_$i", array(
            'default' => "Lorem ipsum dolor sit amet consectetur. Facilisi gravida ultricies nec integer amet quis neque aliquet. Nec eget consectetur gravida amet donec suspendisse non. $i",
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("faq_answer_$i", array(
            'label' => __("Answer $i", 'smokelms'),
            'section' => 'cta_ask_section',
            'type' => 'textarea',
        ));
    }





    //footer start********
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Section', 'smokelms'),
        'panel' => 'homepage_panel',
        'priority' => 120,

    ));

    //footer Logo
    $wp_customize->add_setting('footer_logo');

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'footer_logo',
        array(
            'label' => __('Footer Logo', 'smokelms'),
            'section' => 'footer_settings',
            'settings' => 'footer_logo',
        )
    ));


// ===============================
// Sponsors Page Panel
// ===============================
$wp_customize->add_panel('sponsorspage_panel', array(
    'title'    => __('Sponsors Page', 'smokelms'),
    'priority' => 120,
));

// ========== Section: Banner ==========
$wp_customize->add_section('sponsors_banner_section', array(
    'title' => __('Banner Section', 'smokelms'),
    'panel' => 'sponsorspage_panel',
));

// -------- Subtitle Left Text --------
$wp_customize->add_setting('sponsors_banner_subtitle_left', array(
    'default'   => 'HOME',
    'transport' => 'refresh',
));
$wp_customize->add_control('sponsors_banner_subtitle_left', array(
    'label'   => __('Subtitle Left Text', 'smokelms'),
    'section' => 'sponsors_banner_section',
    'type'    => 'text',
));

// -------- Subtitle Right Text --------
$wp_customize->add_setting('sponsors_banner_subtitle_right', array(
    'default'   => 'SPONSORS',
    'transport' => 'refresh',
));
$wp_customize->add_control('sponsors_banner_subtitle_right', array(
    'label'   => __('Subtitle Right Text', 'smokelms'),
    'section' => 'sponsors_banner_section',
    'type'    => 'text',
));

// -------- Banner Title --------
$wp_customize->add_setting('sponsors_banner_title', array(
    'default'   => 'Our Sponsors Partners',
    'transport' => 'refresh',
));
$wp_customize->add_control('sponsors_banner_title', array(
    'label'   => __('Banner Title', 'smokelms'),
    'section' => 'sponsors_banner_section',
    'type'    => 'text',
));

// -------- Banner Background Color --------
$wp_customize->add_setting('sponsors_banner_bgcolor', array(
    'default'   => '#591419',
    'transport' => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sponsors_banner_bgcolor', array(
    'label'   => __('Banner Background Color', 'smokelms'),
    'section' => 'sponsors_banner_section',
)));


    $wp_customize->add_section('sponsor_section', array(
        'title' => __('Sponsor Section', 'smokelms'),
        'panel' => 'sponsorspage_panel',
        'priority' => 1,
    ));
    // Title
    $wp_customize->add_setting('sponsor_title', array(
        'default' => 'our featured <span> sponsors</span>',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('sponsor_title', array(
        'label' => __('sponsor Title', 'smokelms'),
        'section' => 'sponsor_section',
        'type' => 'text',
    ));
 

    // Kids-Q Page Panel
    $wp_customize->add_panel('Kidspage_panel', array(
        'title'    => __('Kids-Q Page', 'smokelms'),
        'priority' => 120, // Home Page এর পরে দেখাতে চাইলে 120
    ));
    //  Section: Banner
    $wp_customize->add_section('kidsq_banner_section', array(
        'title' => __('Banner Section', 'smokelms'),
        'panel' => 'Kidspage_panel',
    ));

    //  Sub Title Left Text 
    $wp_customize->add_setting('kidsq_banner_subtitle_left', array(
        'default' => 'HOME',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('kidsq_banner_subtitle_left', array(
        'label' => __('Subtitle Left Text', 'smokelms'),
        'section' => 'kidsq_banner_section',
        'type' => 'text',
    ));

    //Subtitle Right Text 
    $wp_customize->add_setting('kidsq_banner_subtitle_right', array(
        'default' => 'KIDS-Q',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('kidsq_banner_subtitle_right', array(
        'label' => __('Subtitle Right Text', 'smokelms'),
        'section' => 'kidsq_banner_section',
        'type' => 'text',
    ));

    //  Banner Title 
    $wp_customize->add_setting('kidsq_banner_title', array(
        'default' => 'The Kid’s Q divisions',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('kidsq_banner_title', array(
        'label' => __('Banner Title', 'smokelms'),
        'section' => 'kidsq_banner_section',
        'type' => 'text',
    ));

    //  Banner Background Color
    $wp_customize->add_setting('kidsq_banner_bgcolor', array(
        'default' => '#591419',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'kidsq_banner_bgcolor', array(
        'label' => __('Banner Background Color', 'smokelms'),
        'section' => 'kidsq_banner_section',
    )));
    // Section for Kids-Q
    $wp_customize->add_section('kidsq_section', array(
        'title'    => __('Kids-Q Section', 'smokelms'),
        'panel' => 'Kidspage_panel',
        'priority' => 130,
    ));

    // Title
    $wp_customize->add_setting('kidsq_title', array(
        'default' => 'KIDS- <span>Q</span>',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('kidsq_title', array(
        'label' => __('Title', 'smokelms'),
        'section' => 'kidsq_section',
        'type' => 'textarea',
    ));


    // Description
    $wp_customize->add_setting('kidsq_description', array(
        'default' => 'The Kid’s Q will be divided into two divisions',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('kidsq_description', array(
        'label'    => __('Kids-Q Description', 'smokelms'),
        'section'  => 'kidsq_section',
        'type'     => 'textarea',
    ));
    // younger_cta_section
    $wp_customize->add_section('younger_cta_section', array(
        'title'       => __('Younger Division CTA', 'smokelms'),
        'priority'    => 140,
        'panel' => 'Kidspage_panel',
    ));

    // Title
    $wp_customize->add_setting('younger_cta_title', array(
        'default' => 'The <span>Younger</span> Division',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('younger_cta_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'younger_cta_section',
        'type' => 'text',
    ));

    // Description
    $wp_customize->add_setting('younger_cta_desc', array(
        'default' => 'The younger kids will prepare, cook, and box their entries with the help of a parent.Parents should let the kids do as much as they are capable of, given age and abilities.The emphasis in this age group is bonding with their family/friends, learning how to cook and growing their skills with familiar mentors. The focus should be to encourage kids to have fun while learning.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('younger_cta_desc', array(
        'label' => __('CTA Description', 'smokelms'),
        'section' => 'younger_cta_section',
        'type' => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('younger_cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/younger.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'younger_cta_image', array(
        'label' => __('CTA Image', 'smokelms'),
        'section' => 'younger_cta_section',
        'settings' => 'younger_cta_image',
    )));


    // Button Text
    $wp_customize->add_setting('younger_cta_btn_text', array(
        'default' => 'ENTER THE COMPETITION',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('younger_cta_btn_text', array(
        'label' => __('Button Text', 'smokelms'),
        'section' => 'younger_cta_section',
        'type' => 'text',
    ));

    // Button Link
    $wp_customize->add_setting('younger_cta_btn_link', array(
        'default' => esc_url(home_url('/enter-competition.php')),

        'transport' => 'refresh',
    ));
    $wp_customize->add_control('younger_cta_btn_link', array(
        'label' => __('Button Link', 'smokelms'),
        'section' => 'younger_cta_section',
        'type' => 'url',
    ));



    // older section ###########

    $wp_customize->add_section('older_cta_section', array(
        'title'       => __('Older Division CTA', 'smokelms'),
        'priority'    => 150,
        'panel' => 'Kidspage_panel',
    ));

    // Title
    $wp_customize->add_setting('older_cta_title', array(
        'default' => 'The <span>OLDER</span> Division',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('older_cta_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'older_cta_section',
        'type' => 'text',
    ));

    // Description
    $wp_customize->add_setting('older_cta_desc', array(
        'default' => 'The older kids will
                    get to compete in a kid-only
                    environment, and allowed to challenge their peers much like they do in any other sport or
                    activity that hosts competitions and tournaments.Parents can encourage their children from
                    outside the cooking area, but cannot help/do any of the cooking. Each entry shall be cooked by
                    one child only.The child must do the preparation, cooking, and presentation. This means that the
                    child should be able to put his/her own protein on the grill, turn his/her own protein on the
                    grill,remove the protein from the grill, and do all garnishing (if garnish is being used).Must
                    be able to temp and flip their own food.Are allowed to bring written or pictorial notes with
                    them for guidance but must be able to read/follow it themselves. It helps if the children make
                    these note sheets themselves.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('older_cta_desc', array(
        'label' => __('CTA Description', 'smokelms'),
        'section' => 'older_cta_section',
        'type' => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('older_cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/older.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'older_cta_image', array(
        'label' => __('CTA Image', 'smokelms'),
        'section' => 'older_cta_section',
        'settings' => 'older_cta_image',
    )));

    // Button Text
    $wp_customize->add_setting('older_cta_btn_text', array(
        'default' => 'ENTER THE COMPETITION',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('older_cta_btn_text', array(
        'label' => __('Button Text', 'smokelms'),
        'section' => 'older_cta_section',
        'type' => 'text',
    ));

    // Button Link
    $wp_customize->add_setting('older_cta_btn_link', array(
        'default' => esc_url(home_url('/enter-competition.php')),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('older_cta_btn_link', array(
        'label' => __('Button Link', 'smokelms'),
        'section' => 'older_cta_section',
        'type' => 'url',
    ));




    // mentoring section ********
    $wp_customize->add_section('mentoring_cta_section', array(
        'title'    => __('Mentoring CTA', 'smokelms'),
        'priority' => 160,
        'panel' => 'Kidspage_panel',

    ));

    // Title
    $wp_customize->add_setting('mentoring_cta_title', array(
        'default' => 'The older competitor <span>mentoring</span> session',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('mentoring_cta_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'mentoring_cta_section',
        'type' => 'text',
    ));

    // Description
    $wp_customize->add_setting('mentoring_cta_desc', array(
        'default' => 'Competitors should
                    trim any of their meats, as
                    needed, and volunteers will be available to help as necessary.Older division cooks will have the
                    opportunity to have a mentoring session with a competition BBQ team at the event prior to their
                    contest.Charcoal grills will be provided for each contestant and a volunteer will be on hand to
                    light the charcoal and provide other assistance as needed.Prior to the contest an information
                    packet will be sent to all the contestants outlining the rules and describing the protein being
                    used. This information will be sent to all contestants at the same time allowing an equal amount
                    of time for contestants to plan and prepare for their cook.Entry fee is $25 for each child.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('mentoring_cta_desc', array(
        'label' => __('CTA Description', 'smokelms'),
        'section' => 'mentoring_cta_section',
        'type' => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('mentoring_cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/mentoring.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mentoring_cta_image', array(
        'label' => __('CTA Image', 'smokelms'),
        'section' => 'mentoring_cta_section',
        'settings' => 'mentoring_cta_image',
    )));

    // Button Text
    $wp_customize->add_setting('mentoring_cta_btn_text', array(
        'default' => 'ENTER THE COMPETITION',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('mentoring_cta_btn_text', array(
        'label' => __('Button Text', 'smokelms'),
        'section' => 'mentoring_cta_section',
        'type' => 'text',
    ));

    // Button Link
    $wp_customize->add_setting('mentoring_cta_btn_link', array(
        'default' => esc_url(home_url('/enter-competition.php')),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('mentoring_cta_btn_link', array(
        'label' => __('Button Link', 'smokelms'),
        'section' => 'mentoring_cta_section',
        'type' => 'url',
    ));




    // form section ********
    $wp_customize->add_section('form_section', array(
        'title'    => __('form_section', 'smokelms'),
        'priority' => 160,
        'panel' => 'Kidspage_panel',

    ));

    // Title
    $wp_customize->add_setting('form_title', array(
        'default' => 'Welcome to Form Builder',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('form_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'form_section',
        'type' => 'text',
    ));

    // Description
    $wp_customize->add_setting('form_desc', array(
        'default' => 'Each child needs a separate entry.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('form_desc', array(
        'label' => __('CTA Description', 'smokelms'),
        'section' => 'form_section',
        'type' => 'textarea',
    ));


    // Rules Page Panel*****************
    $wp_customize->add_panel('Rules_panel', array(
        'title'    => __('Rules Page', 'smokelms'),
        'priority' => 130,
    ));

    //  Section:Rules Banner###
    $wp_customize->add_section('rules_banner_section', array(
        'title' => __('Banner Section', 'smokelms'),
        'panel' => 'Rules_panel',
    ));

    // Banner Title
    $wp_customize->add_setting('rules_banner_title', array(
        'default' => 'The Gaming Rules',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rules_banner_title', array(
        'label' => __('Banner Title', 'smokelms'),
        'section' => 'rules_banner_section',
        'type' => 'text',
    ));

    // Breadcrumb Left Text
    $wp_customize->add_setting('rules_breadcrumb_left', array(
        'default' => 'HOME',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rules_breadcrumb_left', array(
        'label' => __('Breadcrumb Left Text', 'smokelms'),
        'section' => 'rules_banner_section',
        'type' => 'text',
    ));

    // Breadcrumb Right Text
    $wp_customize->add_setting('rules_breadcrumb_right', array(
        'default' => 'RULES',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rules_breadcrumb_right', array(
        'label' => __('Breadcrumb Right Text', 'smokelms'),
        'section' => 'rules_banner_section',
        'type' => 'text',
    ));

    // Banner Background Color
    $wp_customize->add_setting('rules_banner_bg', array(
        'default' => '#591419',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rules_banner_bg', array(
        'label' => __('Banner Background Color', 'smokelms'),
        'section' => 'rules_banner_section',
    )));



    // Section: Competition CTA Section***
    $wp_customize->add_section('competition_cta_section', array(
        'title' => __('Competition CTA Section', 'smokelms'),
        'panel' => 'Rules_panel',
    ));

    // Title
    $wp_customize->add_setting('competition_cta_title', array(
        'default' => 'The <span>competition</span> held on',
    ));
    $wp_customize->add_control('competition_cta_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'competition_cta_section',
        'type' => 'text',
    ));

    // Description
    $wp_customize->add_setting('competition_cta_desc', array(
        'default' => 'The competition will be held on the tarmac at the Blackfoot Municipal Airport (McCarley Field).During the competition the area will continue to be an active airport.No guns, fireworks and all fire/flame must be contained within the cooking apparatus.Pets MUST be on a leash or contained at the teams cook site. There is a dog park just outside the airport gate.Vehicles must follow established traffic flow through the airport property.
   ',
    ));
    $wp_customize->add_control('competition_cta_desc', array(
        'label' => __('CTA Description', 'smokelms'),
        'section' => 'competition_cta_section',
        'type' => 'textarea',
    ));

    // Description 2
    $wp_customize->add_setting('competition_cta_desc2', array(
        'default' => 'Each team site must have a fire extinguisher and if a stick burner is used some sort of ground protection must be used under the fire box. This may include sheet metal or cement board forexample.',
    ));
    $wp_customize->add_control('competition_cta_desc2', array(
        'label' => __('CTA Description 2', 'smokelms'),
        'section' => 'competition_cta_section',
        'type' => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('competition_cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/held-on.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'competition_cta_image', array(
        'label' => __('CTA Image', 'smokelms'),
        'section' => 'competition_cta_section',
        'settings' => 'competition_cta_image',
    )));


    // Section: Awareness CTA Section ***
    $wp_customize->add_section('awareness_cta_section', array(
        'title' => __('Awareness CTA Section', 'smokelms'),
        'panel' => 'Rules_panel',
    ));

    // Title
    $wp_customize->add_setting('awareness_cta_title', array(
        'default' => 'The <span>competition</span> awareness',
    ));
    $wp_customize->add_control('awareness_cta_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'awareness_cta_section',
        'type' => 'text',
    ));

    // Description 1
    $wp_customize->add_setting('awareness_cta_desc1', array(
        'default' => 'Fire lanes and emergency access shall be maintained at all times. Ashes and grease must be disposed of in provided containers located close to the cook sites. Team site will be left with no garbage, ashes, debris or liquid/grease spills. If site is not left in a clean manner the city will clean the site and bill the team for the labor involved.',
    ));
    $wp_customize->add_control('awareness_cta_desc1', array(
        'label' => __('CTA Description 1', 'smokelms'),
        'section' => 'awareness_cta_section',
        'type' => 'textarea',
    ));

    // Description 2
    $wp_customize->add_setting('awareness_cta_desc2', array(
        'default' => 'All teams equipment, vehicles, trailers, cookers, awnings etc. must stay within teams assigned cook area. A parking area will be available nearby for vehicles that don’t fit within cook site. Water will be available as well as gray water disposal area. Electricity will not be provided. Please plan accordingly. Each cook site will have a brief health department inspection along with their meat inspection.',
    ));
    $wp_customize->add_control('awareness_cta_desc2', array(
        'label' => __('CTA Description 2', 'smokelms'),
        'section' => 'awareness_cta_section',
        'type' => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('awareness_cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/awereness.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'awareness_cta_image', array(
        'label' => __('CTA Image', 'smokelms'),
        'section' => 'awareness_cta_section',
        'settings' => 'awareness_cta_image',
    )));


    // =====================
    // WHEN & WHERE SECTION
    // =====================
    $wp_customize->add_section('when_where_section', array(
        'title'       => __('When & Where Section', 'smokelms'),
        'panel' => 'Rules_panel',
        'priority'    => 40,
    ));




    //
    // ===================== Section: Items CTA Section ***
    $wp_customize->add_section('items_cta_section', array(
        'title' => __('Items CTA Section', 'smokelms'),
        'panel' => 'Rules_panel',
    ));

    // Title
    $wp_customize->add_setting('items_cta_title', array(
        'default' => 'The <span>items</span> they are looking for are',
    ));
    $wp_customize->add_control('items_cta_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'items_cta_section',
        'type' => 'text',
    ));

    // Image
    $wp_customize->add_setting('items_cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/held-on.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'items_cta_image', array(
        'label' => __('CTA Image', 'smokelms'),
        'section' => 'items_cta_section',
        'settings' => 'items_cta_image',
    )));

    // Items (multiple text fields)
    for ($i = 1; $i <= 7; $i++) {
        $wp_customize->add_setting("items_cta_item_$i", array(
            'default' => '',
        ));
        $wp_customize->add_control("items_cta_item_$i", array(
            'label' => __("Item $i", 'smokelms'),
            'section' => 'items_cta_section',
            'type' => 'text',
        ));
    }
    // =======================
    // DATE SECTION CUSTOMIZER
    // =======================
    $wp_customize->add_section('date_section', array(
        'title'       => __('Date Section', 'smokelms'),
        'panel' => 'Rules_panel',
        'priority'    => 45,
    ));
    // Section
    $wp_customize->add_section('rules_section', array(
        'title' => __('Smoke-N-Wings Rules Section', 'smokelms'),
        'panel' => 'Rules_panel',
    ));

    // Title Field
    $wp_customize->add_setting('rules_title', array(
        'default' => 'SMOKE-N-WINGS',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rules_title', array(
        'label' => __('Rules Title', 'smokelms'),
        'section' => 'rules_section',
        'type' => 'text',
    ));

    // Year Field
    $wp_customize->add_setting('rules_year', array(
        'default' => '2025',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rules_year', array(
        'label' => __('Rules Year', 'smokelms'),
        'section' => 'rules_section',
        'type' => 'text',
    ));

    // Description Field
    $wp_customize->add_setting('rules_description', array(
        'default' => 'As a KCBS sanctioned Master Series Contest, all KCBS rules will be followed. The event and the judging will be overseen by the KCBS Contest Representatives assigned to the event. Their decisions and interpretations are final.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rules_description', array(
        'label' => __('Rules Description', 'smokelms'),
        'section' => 'rules_section',
        'type' => 'textarea',
    ));


    // Additional Text Section (below rules description)
    $wp_customize->add_setting('rules_subtext_1', array(
        'default' => 'As a Master Series Contest, teams will cook four meats:',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rules_subtext_1', array(
        'label' => __('Sub Text Line 1', 'smokelms'),
        'section' => 'rules_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('rules_subtext_2', array(
        'default' => 'The Four KCBS Meat Categories are:',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('rules_subtext_2', array(
        'label' => __('Sub Text Line 2', 'smokelms'),
        'section' => 'rules_section',
        'type' => 'text',
    ));

    // Section: Responsibility CTA Section ***
    $wp_customize->add_section('responsibility_cta_section', array(
        'title' => __('Responsibility CTA Section', 'smokelms'),
        'panel' => 'Rules_panel',
    ));

    // Title
    $wp_customize->add_setting('responsibility_cta_title', array(
        'default' => 'Contestant’s <span>responsibility</span>',
    ));
    $wp_customize->add_control('responsibility_cta_title', array(
        'label' => __('CTA Title', 'smokelms'),
        'section' => 'responsibility_cta_section',
        'type' => 'text',
    ));

    // Description
    $wp_customize->add_setting('responsibility_cta_desc', array(
        'default' => 'Neither the City of Blackfoot, McCarley Field nor the event organizers will be responsible for any injury, loss or damage that may occur to the contestants or the contestant’s property from any cause whatsoever. It is the contestant’s responsibility to protect equipment and space so that no injury will result to the public, visitors, guests or persons or property. Cancellation and Refunds – A team may cancel up to 1 month (May 28th) prior to the event with full refund of site fee. Cancellations after May 28th will forfeit fees paid.',
    ));
    $wp_customize->add_control('responsibility_cta_desc', array(
        'label' => __('CTA Description', 'smokelms'),
        'section' => 'responsibility_cta_section',
        'type' => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('responsibility_cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/contestant.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'responsibility_cta_image', array(
        'label' => __('CTA Image', 'smokelms'),
        'section' => 'responsibility_cta_section',
        'settings' => 'responsibility_cta_image',
    )));




    // Panel ********************************
    $wp_customize->add_panel('bigham_panel', array(
        'title' => __('Bingham Section', 'smokelms'),
        'priority' => 150,
    ));


    //  Section 
    $wp_customize->add_section('bingham_banner_section', array(
        'title' => __('Banner Section', 'smokelms'),
        'panel' => 'bigham_panel',
    ));

    //  Subtitle Left ("HOME")
    $wp_customize->add_setting('bingham_banner_subtitle_left', array(
        'default' => 'HOME',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('bingham_banner_subtitle_left', array(
        'label' => __('Left Subtitle (e.g. HOME)', 'smokelms'),
        'section' => 'bingham_banner_section',
        'type' => 'text',
    ));

    //  Subtitle Right ("BINGHAM MAYORS SCHOLARSHIP")
    $wp_customize->add_setting('bingham_banner_subtitle_right', array(
        'default' => 'BINGHAM MAYORS SCHOLARSHIP',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('bingham_banner_subtitle_right', array(
        'label' => __('Right Subtitle (e.g. BINGHAM MAYORS SCHOLARSHIP)', 'smokelms'),
        'section' => 'bingham_banner_section',
        'type' => 'text',
    ));

    //  Banner Title (Main Heading)
    $wp_customize->add_setting('bingham_banner_title', array(
        'default' => 'BINGHAM MAYORS SCHOLARSHIP',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('bingham_banner_title', array(
        'label' => __('Main Banner Title', 'smokelms'),
        'section' => 'bingham_banner_section',
        'type' => 'textarea',
    ));

    //  Background Color
    $wp_customize->add_setting('bingham_banner_bg_color', array(
        'default' => '#591419',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bingham_banner_bg_color', array(
        'label' => __('Background Color', 'smokelms'),
        'section' => 'bingham_banner_section',
    )));



    // Section 
    $wp_customize->add_section('bigham_section', array(
        'title' => __('Bingham Mayors Scholarship', 'smokelms'),
        'panel' => 'bigham_panel',
    ));

    // Title
    $wp_customize->add_setting('bigham_title', array(
        'default' => 'BINGHAM MAYORS <span>SCHOLARSHIP</span>',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('bigham_title', array(
        'label' => __('Title', 'smokelms'),
        'section' => 'bigham_section',
        'type' => 'textarea',
    ));

    // Description
    $wp_customize->add_setting('bigham_desc', array(
        'default' => 'The Bingham County Mayors Scholarship committee is pleased to announce a scholarship for graduating high school seniors residing or attending any school in Bingham County who plan on continuing their education at any accredited college/university, including technical and vocational programs. The Bingham County Mayors Scholarship will be awarded under the direction of the Bingham County Mayors Scholarship Selection Committee.',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('bigham_desc', array(
        'label' => __('Description', 'smokelms'),
        'section' => 'bigham_section',
        'type' => 'textarea',
    ));

    // Button Text
    $wp_customize->add_setting('bigham_button_text', array(
        'default' => 'ENTER THE COMPETITION',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('bigham_button_text', array(
        'label' => __('Button Text', 'smokelms'),
        'section' => 'bigham_section',
        'type' => 'text',
    ));

    // Button Link
    $wp_customize->add_setting('bigham_button_link', array(
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('bigham_button_link', array(
        'label' => __('Button Link', 'smokelms'),
        'section' => 'bigham_section',
        'type' => 'url',
    ));

    // Highlight Text
    $wp_customize->add_setting('bigham_highlight_text', array(
        'default' => 'In 2023, 46 scholarships were awarded to Bingham County high school seniors. A total of <span class="text-[#F65600]">$23,000 was awarded.</span>',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('bigham_highlight_text', array(
        'label' => __('Highlight Text', 'smokelms'),
        'section' => 'bigham_section',
        'type' => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('bigham_image', array(
        'default' => get_template_directory_uri() . '/assets/images/bigham.png',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bigham_image', array(
        'label' => __('Right Image', 'smokelms'),
        'section' => 'bigham_section',
    )));

    // 🔹 Panel তৈরি (Contact Page এর জন্য)
    $wp_customize->add_panel('contact_page_panel', array(
        'title'       => __('Contact Page', 'smokelms'),
        'priority'    => 150,
    ));

    // 🔹 Section তৈরি (Banner Section)
    $wp_customize->add_section('contact_banner_section', array(
        'title' => __('Banner Section', 'smokelms'),
        'panel' => 'contact_page_panel',
    ));

    // 🟠 Subtitle Left (e.g. HOME)
    $wp_customize->add_setting('contact_banner_subtitle_left', array(
        'default' => 'HOME',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_banner_subtitle_left', array(
        'label' => __('Left Subtitle (e.g. HOME)', 'smokelms'),
        'section' => 'contact_banner_section',
        'type' => 'text',
    ));

    // 🟠 Subtitle Right (e.g. CONTACT)
    $wp_customize->add_setting('contact_banner_subtitle_right', array(
        'default' => 'CONTACT',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_banner_subtitle_right', array(
        'label' => __('Right Subtitle (e.g. CONTACT)', 'smokelms'),
        'section' => 'contact_banner_section',
        'type' => 'text',
    ));

    // 🟠 Banner Title (Main Heading)
    $wp_customize->add_setting('contact_banner_title', array(
        'default' => 'CONTACT US',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('contact_banner_title', array(
        'label' => __('Banner Title', 'smokelms'),
        'section' => 'contact_banner_section',
        'type' => 'textarea',
    ));

    // 🟠 Background Color Option
    $wp_customize->add_setting('contact_banner_bg_color', array(
        'default' => '#591419',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'contact_banner_bg_color', array(
        'label' => __('Background Color', 'smokelms'),
        'section' => 'contact_banner_section',
    )));


    // 🔹 Section: Contact Info
    $wp_customize->add_section('contact_info_section', array(
        'title' => __('Contact Info', 'smokelms'),
        'panel' => 'contact_page_panel',
    ));

    // Title
    $wp_customize->add_setting('contact_info_title', array(
        'default' => 'CONTACT US',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_info_title', array(
        'label' => __('Section Title', 'smokelms'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    // Subtitle
    $wp_customize->add_setting('contact_info_subtitle', array(
        'default' => 'We will reply as soon as possible',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_info_subtitle', array(
        'label' => __('Section Subtitle', 'smokelms'),
        'section' => 'contact_info_section',
        'type' => 'textarea',
    ));

    // Email
    $wp_customize->add_setting('contact_info_email', array(
        'default' => 'smokenwingsbbq@gmail.com',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_info_email', array(
        'label' => __('Email Address', 'smokelms'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    // Working Hours
    $wp_customize->add_setting('contact_info_hours', array(
        'default' => 'Mon - Fri 09:00 - 18:00',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_info_hours', array(
        'label' => __('Working Hours', 'smokelms'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    // Phone
    $wp_customize->add_setting('contact_info_phone', array(
        'default' => 'Call (800) 123 45 67',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_info_phone', array(
        'label' => __('Phone Number', 'smokelms'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));


    // Form Title
    $wp_customize->add_setting('contact_form_title', array(
        'default' => 'Leave Us <span class="text-[#F65600]">Message</span>',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('contact_form_title', array(
        'label' => __('Form Title', 'smokelms'),
        'section' => 'contact_info_section',
        'type' => 'textarea',
    ));





    // ========== Enter Competition Section ==========

    //  Panel বা
    $wp_customize->add_panel('enter_page_panel', array(
        'title'       => __('Enter Page', 'smokelms'),
        'priority'    => 175,
    ));


    // Section banner
    $wp_customize->add_section('enter_competition_section', array(
        'title'       => __('Enter Competition Section', 'smokelms'),
        'panel'       => 'enter_page_panel',
        'description' => __('Manage the Enter Competition content here.'),
    ));

    //  Home Text
    $wp_customize->add_setting('home_text', array(
        'default' => 'HOME',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Home Text
    $wp_customize->add_control('home_text', array(
        'label' => __('HOME', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'text',
    ));

    // enter Text
    $wp_customize->add_setting('enter_text', array(
        'default' => 'Enter',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // enter Text
    $wp_customize->add_control('enter_text', array(
        'label' => __('Enter', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'text',
    ));

    // Setting: Banner Title
    $wp_customize->add_setting('enter_banner_title', array(
        'default' => 'ENTER COMPETITION',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Control: Banner Title
    $wp_customize->add_control('enter_banner_title', array(
        'label' => __('Banner Title', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'text',
    ));
    // Section তৈরি
    $wp_customize->add_section('enter_competition_section', array(
        'title'       => __('Enter Competition Section', 'smokelms'),

        'panel'       => 'enter_page_panel',
        'description' => __('Manage the Enter Competition content here.'),
    ));

    // Title
    $wp_customize->add_setting('enter_competition_title', array(
        'default' => 'Enter Competition',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('enter_competition_title', array(
        'label' => __('Section Title', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'text',
    ));

    // Description
    $wp_customize->add_setting('enter_competition_desc1', array(
        'default' => 'We are excited to welcome your team to the 2024 SMOKE-N-WINGS BBQ CONTEST. Put your skills to the test for your chance to win cash prizes and be crowned the SMOKE-N-WINGS Grand Champion and the Idaho State Champion.',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('enter_competition_desc1', array(
        'label' => __('Section Description', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'textarea',
    ));
    // Description
    $wp_customize->add_setting('enter_competition_desc2', array(
        'default' => 'This KCBS sanctioned competition will be held June 28-29, 2024. Winning will make your team eligible for the American Royal and the Jack Daniels World Championship. ',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('enter_competition_desc2', array(
        'label' => __('Section Description', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'textarea',
    ));

    // Email
    $wp_customize->add_setting('enter_competition_email', array(
        'default' => 'smokenwingsbbq@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('enter_competition_email', array(
        'label' => __('Contact Email', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'text',
    ));

    // Hours
    $wp_customize->add_setting('enter_competition_hours', array(
        'default' => 'Mon - Fri 09:00 - 18:00',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('enter_competition_hours', array(
        'label' => __('Working Hours', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'text',
    ));

    // Phone
    $wp_customize->add_setting('enter_competition_phone', array(
        'default' => 'Call (800) 123 45 67',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('enter_competition_phone', array(
        'label' => __('Phone Number', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'text',
    ));

    //enter Form Title
    $wp_customize->add_setting('enter_form_title', array(
        'default' => 'Complete the <span class="text-[#F65600]">Entry Form</span> Below',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('enter_form_title', array(
        'label' => __('Form Title', 'smokelms'),
        'section' => 'enter_competition_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'smokelms_customize_homepage_settings');



function smokelms_register_menu()
{
    register_post_type('menu', array(
        'labels' => array(
            'name' => __('Menus', 'smokelms'),
            'singular_name' => __('Menu', 'smokelms'),
            'add_new_item' => __('Add New Menu', 'smokelms'),
            'edit_item' => __('Edit Menu', 'smokelms'),
            'new_item' => __('New Menu', 'smokelms'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'menu'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-food',
    ));
}
add_action('init', 'smokelms_register_menu');



function smokelms_menu_meta_box()
{
    add_meta_box(
        'menu_extra_info',
        'Menu Extra Info',
        'smokelms_menu_meta_box_callback',
        'menu',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'smokelms_menu_meta_box');

function smokelms_menu_meta_box_callback($post)
{
    $judging_time = get_post_meta($post->ID, '_judging_time', true);
?>
    <p>
        <label for="judging_time"><strong>Judging Time:</strong></label><br>
        <input type="text" name="judging_time" id="judging_time" value="<?php echo esc_attr($judging_time); ?>" style="width:100%;" placeholder="e.g. Judging will start at 1:30pm">
    </p>
<?php
}

function smokelms_save_menu_meta_box($post_id)
{
    if (array_key_exists('judging_time', $_POST)) {
        update_post_meta($post_id, '_judging_time', sanitize_text_field($_POST['judging_time']));
    }
}
add_action('save_post', 'smokelms_save_menu_meta_box');

// kids-q************************

// Register Kids-Q Post Type
function smokelms_register_kidsq()
{
    register_post_type('kidsq', array(
        'labels' => array(
            'name' => __('Kids-Q', 'smokelms'),
            'singular_name' => __('Kids-Q Item', 'smokelms'),
            'add_new_item' => __('Add New Kids-Q Item', 'smokelms'),
            'edit_item' => __('Edit Kids-Q Item', 'smokelms'),
            'new_item' => __('New Kids-Q Item', 'smokelms'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'kidsq'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-groups',
    ));
}
add_action('init', 'smokelms_register_kidsq');


// Add Meta Boxes for Kids-Q
function smokelms_kidsq_meta_box()
{
    add_meta_box(
        'kidsq_extra_info',
        'Kids-Q Extra Info',
        'smokelms_kidsq_meta_box_callback',
        'kidsq',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'smokelms_kidsq_meta_box');

function smokelms_kidsq_meta_box_callback($post)
{
    $price = get_post_meta($post->ID, '_kidsq_price', true);
?>
    <p>
        <label for="kidsq_price"><strong>Price ($):</strong></label><br>
        <input type="text" name="kidsq_price" id="kidsq_price" value="<?php echo esc_attr($price); ?>" style="width:100%;" placeholder="e.g. 25">
    </p>
<?php
}

function smokelms_save_kidsq_meta_box($post_id)
{
    if (array_key_exists('kidsq_price', $_POST)) {
        update_post_meta($post_id, '_kidsq_price', sanitize_text_field($_POST['kidsq_price']));
    }
}
add_action('save_post', 'smokelms_save_kidsq_meta_box');









// =====================
//Enter competition  Register Cook Site Post Type
// =====================
function smokelms_register_cooksite()
{
    register_post_type('cooksite', array(
        'labels' => array(
            'name' => __('Cook Sites', 'smokelms'),
            'singular_name' => __('Cook Site', 'smokelms'),
            'add_new_item' => __('Add New Cook Site', 'smokelms'),
            'edit_item' => __('Edit Cook Site', 'smokelms'),
            'new_item' => __('New Cook Site', 'smokelms'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'cooksite'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-carrot',
    ));
}
add_action('init', 'smokelms_register_cooksite');



// =====================
// Add Price Meta Box
// =====================
function smokelms_cooksite_meta_box()
{
    add_meta_box(
        'cooksite_extra_info',
        'Cook Site Price',
        'smokelms_cooksite_meta_box_callback',
        'cooksite',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'smokelms_cooksite_meta_box');

function smokelms_cooksite_meta_box_callback($post)
{
    $cook_price = get_post_meta($post->ID, '_cook_price', true);
?>
    <p>
        <label for="cook_price"><strong>Price ($):</strong></label><br>
        <input type="text" id="cook_price" name="cook_price"
            value="<?php echo esc_attr($cook_price); ?>"
            style="width:100%;" placeholder="e.g. 300">
    </p>
<?php
}

function smokelms_save_cooksite_meta($post_id)
{
    if (isset($_POST['cook_price'])) {
        update_post_meta($post_id, '_cook_price', sanitize_text_field($_POST['cook_price']));
    }
}
add_action('save_post', 'smokelms_save_cooksite_meta');


// 'show_in_rest' = true,

// =====================
//course-bbq Register  Post Type
// =====================
function smokelms_register_bbq()
{
    register_post_type('bbqsite', array(
        'labels' => array(
            'name' => __('BBQ Sites', 'smokelms'),
            'singular_name' => __('BBQ Site', 'smokelms'),
            'add_new_item' => __('Add New BBQ Site', 'smokelms'),
            'edit_item' => __('Edit BBQ Site', 'smokelms'),
            'new_item' => __('New BBQ Site', 'smokelms'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'bbqsite'),
        'supports' => array('title', 'editor', 'thumbnail'), // extra meta field nai
        'menu_icon' => 'dashicons-carrot',
        'show_in_rest' => true, // Gutenberg & REST API support
    ));
}
add_action('init', 'smokelms_register_bbq');


// Register Custom Post Type: Sponsors
function create_sponsors_cpt() {

    $labels = array(
        'name' => __( 'Sponsors', 'textdomain' ),
        'singular_name' => __( 'Sponsor', 'textdomain' ),
        'add_new' => __( 'Add New Sponsor', 'textdomain' ),
        'add_new_item' => __( 'Add New Sponsor', 'textdomain' ),
        'edit_item' => __( 'Edit Sponsor', 'textdomain' ),
        'new_item' => __( 'New Sponsor', 'textdomain' ),
        'view_item' => __( 'View Sponsor', 'textdomain' ),
        'search_items' => __( 'Search Sponsors', 'textdomain' ),
        'not_found' => __( 'No Sponsors found', 'textdomain' ),
        'menu_name' => __( 'Sponsors', 'textdomain' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title', 'thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('sponsor', $args);
}
add_action('init', 'create_sponsors_cpt');


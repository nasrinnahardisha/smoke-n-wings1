<?php
$image = get_theme_mod('items_cta_image');
$title = get_theme_mod('items_cta_title');

// ৭টা item আনছি loop দিয়ে
$items = [];
for ($i = 1; $i <= 7; $i++) {
    $item = get_theme_mod("items_cta_item_$i");
    if (!empty($item)) {
        $items[] = $item;
    }
}
?>
 
 
 <section class="cta-sec items">
    <div class="container">
      <div class="cta pt-0 md:pt-[50px]  xl:pt-[66px] ">
        <div class="cta-text !text-start pt-0 xl:!pt-[82px]">
          <div class="competition-title xl:!leading-[65px] mb-[10px]"><?php echo wp_kses_post($title); ?>
          </div>

          <div class="flex flex-col gap-[8px] md:gap-[13px]">
  <?php foreach ($items as $item): ?>
            <div class="flex items-center gap-3">
              <div
                class="w-6 h-6 flex items-center justify-center rounded-full bg-[#E9680C] text-white text-[14px] leading-none shrink-0">
                <i class="ri-check-fill"></i>
              </div>
              <p class="text-black font-jost text-[16px] font-normal leading-normal tracking-[0.32px]">
              <?php echo esc_html($item); ?>
              </p>
            </div>
      <?php endforeach; ?>
            
          </div>
        </div>


        <div class="cta-image-left-overlay mt-0 xl:mt-[18px]">
              <img src="<?php echo esc_url($image); ?>" alt="items image">
        </div>
      </div>
    </div>
  </section>
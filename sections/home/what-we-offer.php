<?php

$slides = [
  [
    'title' => "Remodeling",
    'image' => "assets/images/service-1.png",
    'icon' => "assets/images/house.png",
    'bg' => "bg-gradient-to-b from-[#005CDC] to-[#0D3875]",
  ],
  [
    'title' => "Roofing",
    'image' => "assets/images/service-2.png",
    'icon' => "assets/icons/roofing.svg",
    'bg' => "bg-black",
  ],
  [
    'title' => "Custom Home",
    'image' => "assets/images/service-3.png",
    'icon' => "assets/images/house.png",
    'bg' => "bg-black",
  ]
];

?>

<div
  class="bg-[#F8F8F8] py-[50px] sm:py-[86px] flex flex-col items-center justify-center relative">
  <img
    src="assets/images/what-we-offer.png"
    alt="What We Offer"
    class="absolute bottom-0 right-0" />
  <p class="text-caption leading-[50px] text-[#565656]">What We Offer</p>
  <p class="text-heading">
    See What We're
    <span class="text-primary-500">Offering</span>
  </p>
  <p
    class="text-center text-[#6D6D6D] max-w-[855px] mx-auto leading-[30px] mt-3">
    Whether it’s repairing or replacing or remodeling your home or business,
    <span class="text-primary-500">Always Guaranteed Construction </span>is
    committed to ensuring the work needed is completed fast, efficiently.
  </p>
  <div class="swiper offerSlider max-w-[1440px] w-full mx-auto">
    <div class="swiper-wrapper">
      <?php for ($i = 0; $i < 3; $i++): ?>
        <?php foreach ($slides as $slide): ?>
          <div class="swiper-slide  max-h-[282px] rounded-[5px] overflow-hidden relative">
            <img src="<?= $slide['image']; ?>" alt="<?= $slide['title']; ?>" class="rounded-[5px]" />
            <div class="absolute bottom-0 bg-gradient-to-t  from-black from-0% to-transparent to-100% w-full">
              <div class='flex gap-[16px] p-[30px]'>
                <div class="<?= $slide['bg']; ?> outline  outline-white/70 outline-[7px] flex items-center justify-center aspect-square w-[57px] h-[57px] rounded-full p-[8px] ">
                  <img src="<?= $slide['icon']; ?>" alt="<?php echo $slide['title']; ?>" class='max-w-[30px] max-h-[30px] object-contain mx-auto aspect-square' />
                </div>
                <div class="flex flex-col items-start gap-1">
                  <p class="text-white font-viga leading-[30px] text-[20px] md:text-[24px]"><?= $slide['title'] ?></p>
                  <a href="#" class="text-primary-500">Read More</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
    <button class="swiper-navigation hover:bg-gray-50 z-10 left-0" onclick="slideBefore()">
      <img src="assets/icons/caret.svg" alt="Previous" />
    </button>
    <button class="swiper-navigation hover:bg-gray-50 z-10 right-0" onclick="slideAfter()">
      <img src="assets/icons/caret.svg" alt="Next" class="rotate-180" />
    </button>
  </div>
  <button class="primary-btn-2 w-[170px] h-[60px] z-10">View More</button>
</div>

<script>
  var swiper = new Swiper(".offerSlider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    speed: 2000,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 2,
      },

      1024: {
        slidesPerView: 3,
      },
    },
  });

  slideAfter = () => {
    swiper.slideNext();
  };

  slideBefore = () => {
    swiper.slidePrev();
  };
</script>
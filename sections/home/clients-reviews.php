<?php

$testimonials = [
    [
        "message" => 'After working with 2 different contractors "Always Guaranteed Construction" was the first that built like he was building his own home. The company name says it all it was the "Always Guaranteed Construction" I made.',
        "name" => "John Doe",
        "rating" => 5
    ],
    [
        "message" => 'After working with 2 different contractors "Always Guaranteed Construction" was the first that built like he was building his own home. The company name says it all it was the "Always Guaranteed Construction" I made.',
        "name" => "John Doe",
        "rating" => 3
    ],
    [
        "message" => 'After working with 2 different contractors "Always Guaranteed Construction" was the first that built like he was building his own home. The company name says it all it was the "Always Guaranteed Construction" I made.',
        "name" => "John Doe",
        "rating" => 4

    ]
]

?>

<section id="clients-reviews" class="bg-primary-500 py-[50px] md:py-[76px] px-[5px] flex flex-col gap-6 items-center justify-center">
    <p class="text-caption text-black">Client's Reviews</p>
    <p class="text-heading max-w-[511px] text-white text-center">What Our Customers Are Saying</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
        <path d="M26.25 39.0533L10.1517 55.1516L4.84834 49.8484L18.75 35.9467V33.75H3.75V7.5H26.25V39.0533Z" fill="black" />
        <path d="M33.75 33.75H48.75V35.9467L34.8483 49.8484L40.1516 55.1516L56.25 39.0533V7.5H33.75V33.75Z" fill="black" />
    </svg>
    <div class="swiper reviewSwiper max-w-[1200px] px-4  w-full mx-auto ">
        <div class="swiper-wrapper ">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="swiper-slide">
                    <div class=" flex flex-col items-center gap-6 px-3 max-w-[1030px] mx-auto">
                        <p class="text-white leading-[30px] text-[16px] md:text-[18px] text-center"><?= $testimonial['message'] ?></p>
                        <!-- <div class="flex items-center gap-2">
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <img src="assets/icons/star.svg" alt="star" class="w-[20px] h-[20px] <?= $i < $testimonial['rating'] ? 'text-primary-500' : 'text-white' ?>" />
                        <?php endfor; ?>
                    </div> -->
                        <p class="text-black text-[18px] md:text-[24px] font-viga "><?= $testimonial['name'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="swiper-navigation-outline border-black hover:bg-gray-500 left-0" onclick="prevSlide()">
            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="#000" viewBox="0 0 256 256">
                <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path>
            </svg>
        </button>
        <button class="swiper-navigation-outline border-black hover:bg-gray-500 right-0" onclick="nextSlide()">
            <svg class="rotate-180 w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="#000" viewBox="0 0 256 256">
                <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path>
            </svg>
        </button>
    </div>

    <button class="outline-btn w-[218px] h-[60px] z-10 text-white hover:bg-gray-50 hover:text-gray-900">Leave a Review</button>

</section>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".reviewSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 2000,
    });
    nextSlide = () => {
        swiper.slideNext();
    };

    prevSlide = () => {
        swiper.slidePrev();
    };
</script>
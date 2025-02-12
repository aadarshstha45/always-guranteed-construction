<?php

$works = [
    ['image' => 'assets/images/work1.png'],
    ['image' => 'assets/images/work2.png'],
    ['image' => 'assets/images/work3.png'],
    ['image' => 'assets/images/work4.png'],
    ['image' => 'assets/images/work5.png'],
]

?>

<section id="our-projects" class="opacity-0 -translate-y-20 transform transition-all duration-700 py-[50px] md:py-[76px] px-[5px]">
    <div class="flex flex-col gap-2 items-center justify-center w-full max-w-[1200px] mx-auto">
        <p class="text-caption">Our Projects</p>
        <p class="text-heading">Latest <span class="text-primary-500">Works</span></p>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-5">
            <?php foreach ($works as $work): ?>
                <div class="relative aspect-square overflow-hidden">
                    <img src="<?= $work['image'] ?>" alt="work" class="object-cover w-full h-full" />
                </div>
            <?php endforeach; ?>
            <div class="relative aspect-square overflow-hidden">
                <img src="assets/images/work6.png" alt="work" class="object-cover w-full h-full" />
                <a href="#">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4">
                        <p class="text-white text-[16px] leading-[75px] md:text-[20px] uppercase">View More</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
</section>
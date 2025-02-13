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

<div class="flex flex-col min-h-[60vh] pb-16">

    <?php
    $sectionTitle = "Services";
    include 'includes/banner.php';
    ?>
    <div
        id="services"
        class="py-10 flex flex-col gap-4 px-4 w-full max-w-[95dvw]  sm:max-w-[80dvw] lg:max-w-[70dvw] mx-auto opacity-0 transform -translate-y-10 transition-all duration-700">
        <p class="text-[20px] w-max mt-4  border-b-2 pb-2 border-b-gray-600">Services We Provide</p>

        <div class="grid grid-cols-1  min-[660px]:grid-cols-2 min-[1240px]:grid-cols-3 gap-4">
            <?php for ($i = 0; $i < 2; $i++): ?>
                <?php foreach ($slides as $slide): ?>
                    <div class="swiper-slide  max-h-[282px] rounded-[5px] overflow-hidden relative">
                        <img src="<?= $slide['image']; ?>" alt="<?= $slide['title']; ?>" class="rounded-[5px]" />
                        <div class="absolute bottom-0 bg-gradient-to-t  from-black from-0% to-transparent to-100% w-full">
                            <div class='flex items-center gap-[16px] p-[30px]'>
                                <div class="<?= $slide['bg']; ?> outline  outline-white/70 outline-[7px] flex items-center justify-center aspect-square w-[57px] h-[57px] rounded-full p-[8px] ">
                                    <img src="<?= $slide['icon']; ?>" alt="<?php echo $slide['title']; ?>" class='max-w-[30px] max-h-[30px] object-contain mx-auto aspect-square' />
                                </div>
                                <div class="flex flex-col items-start gap-1">
                                    <p class="text-white font-viga leading-[30px] text-[20px] md:text-[24px]"><?= $slide['title'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endfor; ?>
        </div>
    </div>
</div>
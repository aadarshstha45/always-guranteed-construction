<?php

$slides = [
    [
        'title' => "Remodeling",
        'image' => "assets/images/service-1.png",
        'icon' => "assets/images/house.png",

    ],
    [
        'title' => "Roofing",
        'image' => "assets/images/service-2.png",
        'icon' => "assets/icons/roofing.svg",

    ],
    [
        'title' => "Custom Home",
        'image' => "assets/images/service-3.png",
        'icon' => "assets/images/house.png",

    ],
    [
        'title' => "Dry Wall Service",
        'image' => "assets/images/service-4.png",
        'icon' => "assets/icons/drywall.svg",
    ],
    [
        'title' => "Windows/Doors/Tiles",
        'image' => "assets/images/service-5.png",
        'icon' => "assets/icons/window.svg",
    ],
    [
        'title' => "Painting",
        'image' => "assets/images/service-6.png",
        'icon' => "assets/icons/painting.svg",
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

        <div

            class="grid grid-cols-1  min-[660px]:grid-cols-2 min-[1240px]:grid-cols-3 gap-4">
            <?php foreach ($slides as $slide): ?>
                <div
                    id="service"
                    class="swiper-slide  max-h-[282px] rounded-[5px] overflow-hidden relative">
                    <img src="<?= $slide['image']; ?>" alt="<?= $slide['title']; ?>" class="rounded-[5px]" />
                    <div class="absolute bottom-0 bg-gradient-to-t  from-black from-0% to-transparent to-100% w-full">
                        <div class='flex items-center gap-[16px] p-[30px]'>
                            <div id="service-icon" class="bg-black from-[#005CDC] to-[#0D3875] outline  outline-white/70 outline-[7px] flex items-center justify-center aspect-square w-[57px] h-[57px] rounded-full p-[8px] ">
                                <img src="<?= $slide['icon']; ?>" alt="<?php echo $slide['title']; ?>" class='max-w-[30px] max-h-[30px] object-contain mx-auto aspect-square' />
                            </div>
                            <div class="flex flex-col items-start gap-1">
                                <p class="text-white font-viga leading-[30px] text-[20px] md:text-[24px]"><?= $slide['title'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
    const services = document.querySelectorAll('#services .swiper-slide');
    services.forEach(service => {
        service.addEventListener('mouseenter', () => {
            const serviceIcon = service.querySelector('#service-icon');
            serviceIcon.classList.add('bg-gradient-to-b');
            serviceIcon.classList.remove('bg-black');
        });

        service.addEventListener('mouseleave', () => {
            const serviceIcon = service.querySelector('#service-icon');
            serviceIcon.classList.remove('bg-gradient-to-b');
            serviceIcon.classList.add('bg-black');
        });
    });
</script>
<?php

$slides = [
    [
        'title' => "Home Improvement",
        'image' => "assets/images/service-1.png",
        'description' => "Our home improvement services cover everything from minor updates to full-scale renovations. We focus on enhancing comfort, functionality, and value, providing expert craftsmanship in every aspect of home improvement, including flooring, cabinetry, electrical, and plumbing updates. Whether you want to modernize your home or improve its efficiency, we have you covered."

    ],
    [
        'title' => "Roofing Services",
        'image' => "assets/images/service-2.png",
        'description' => "Your roof is your first line of defense against the elements. We provide expert roofing solutions, including installation, repair, and maintenance, using high-quality materials to ensure durability and longevity. Whether you need a new roof or repairs on an existing one, we guarantee top-tier workmanship and reliability. We specialize in various roofing materials, including shingles, metal, and flat roofing systems, ensuring protection and style for your property."

    ],
    [
        'title' => "Tiny House - Future Projects",
        'image' => "assets/images/service-3.png",
        'description' => "We are excited to expand into the tiny house movement, offering innovative, space-efficient, and sustainable living solutions. Our future projects aim to provide high-quality, custom-built tiny homes designed for comfort, affordability, and eco-friendliness. Stay tuned for upcoming developments in our tiny house offerings."

    ],
    [
        'title' => "Dry Wall Service",
        'image' => "assets/images/service-4.png",
        'description' => "Our drywall specialists provide seamless installation, repair, and finishing services to ensure smooth and durable walls for your home or business. We use high-quality materials and precise techniques to create a flawless finish. Whether it's a new build, a remodel, or patchwork repair, we handle every detail with care and efficiency."
    ],
    [
        'title' => "Windows, Doors & Tiles",
        'image' => "assets/images/service-5.png",
        'description' => "Enhance the aesthetics and energy efficiency of your space with our expert installation of high-quality windows and doors. Our team ensures proper sealing and fitting to improve insulation and security. Our tile installation services bring elegance and durability to your floors, walls, and backsplashes, ensuring a refined and polished finish that withstands daily wear and tear."
    ],
    [
        'title' => "Painting Service",
        'image' => "assets/images/service-6.png",
        'description' => "A fresh coat of paint can breathe new life into your property. Our painting services include interior and exterior painting, using high-quality paints and expert techniques to achieve flawless and long-lasting results. We ensure thorough surface preparation and precision application for a stunning and durable finish."
    ],
    [
        'title' => "Kitchen & Bath Remodeling",
        'image' => "assets/images/service-7.png",
        'description' => "Transform your kitchen and bathroom into modern, functional, and stylish spaces with our remodeling services. We work closely with you to design customized solutions that fit your taste and budget. From custom cabinetry and countertops to high-end fixtures and finishes, we create stunning, functional areas that enhance the comfort and value of your home."
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
        <p class="text-center mb-4 text-[15px] md:text-[17px]  leading-[30px]">
            At
            <span class="text-primary-500">Always Guaranteed Construction</span>, we take pride in delivering exceptional residential and commercial construction services. Our team of highly skilled professionals brings years of experience to every project, ensuring top-quality results and customer satisfaction. Whether you need a small renovation or a large-scale construction project, we have the expertise to bring your vision to life.
        </p>
        <div

            class="flex flex-col gap-12 mt-10">
            <?php foreach ($slides as $slide): ?>
                <div
                    id="service"
                    class="grid grid-cols-1 md:grid-cols-3 gap-12  items-center
                    border-b-[1px] border-[#E3E3E3] pb-12 ">
                    <div class="col-span-1">
                        <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" class="w-full mx-auto max-w-[490px] rounded-[5px]">
                    </div>
                    <div class="col-span-2 flex flex-col ">
                        <div>
                            <h3 class="font-viga text-[28px] sm:text-[32px] lg:text-[36px] 2xl:text-[40px]"><?php echo $slide['title']; ?></h3>
                            <p class="text-[#414141] text-[14px] sm:text-[16px] lg:text-[18px] font-roboto"><?php echo $slide['description']; ?></p>
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
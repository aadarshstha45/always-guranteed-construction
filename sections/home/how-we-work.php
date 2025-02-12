<?php

$data = [
    ['description' => 'Schedule an appointment', 'icon' => 'assets/icons/magnifying-glass.svg'],
    ['description' => 'Our highly trained technicians will replace or repair your projects', 'icon' => 'assets/icons/man.svg'],
    ['description' => 'You can stop thinking about your project', 'icon' => 'assets/icons/house.svg'],
];

?>

<section class="flex flex-col items-center justify-center gap-[10px] py-[50px] md:py-[115px] px-[10px] min-[450px]:px-[50px] min-[1300px]:px-[135px]">

    <p class="text-caption text-[#565656] text-center">How we work</p>
    <p class="text-heading text-center">How We
        <span class="text-primary-500">Work</span>
    </p>
    <p class="text-[16px] md:text-[18px] text-center max-w-[600px]">Our process is simple, yet thorough.</p>

    <!-- Adjust grid for responsiveness -->
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-10 mt-10 items-start">
        <?php foreach ($data as $index => $item) : ?>
            <div class="flex flex-col items-center gap-[20px] ">
                <div class="relative flex justify-center items-center w-[130px] h-[130px] rounded-[10px] bg-white shadow-[0px_5px_15px_0px_rgba(149,157,165,0.20)]">
                    <img src="<?= $item['icon'] ?>" alt="icon" class="w-[50px] h-[50px]">
                    <div class="flex items-center absolute w-[30px] h-[30px] rounded-full -top-3 -right-3 justify-center bg-primary-500 text-white">
                        <p class="text-[18px]  font-bold"><?= $index + 1 ?></p>
                    </div>
                </div>
                <p class="text-[18px] text-center max-w-[400px] mx-auto"><?= $item['description'] ?></p>

            </div>


            <?php if ($index === 0 || $index === 1) : ?>
                <!-- Keep the arrow in place, use margins to adjust positioning -->
                <div class="flex rotate-90 sm:rotate-0 h-[10px] sm:h-auto justify-center  sm:mt-[30px] md:mt-[40px]">
                    <img src="assets/icons/dashed-arrow.svg" alt="line" class="w-[180px]" />
                </div>
            <?php endif; ?>

        <?php endforeach; ?>
    </div>

</section>
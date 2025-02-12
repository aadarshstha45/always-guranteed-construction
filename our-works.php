<?php

$works = [
    ['image' => 'assets/images/work1.png'],
    ['image' => 'assets/images/work2.png'],
    ['image' => 'assets/images/work3.png'],
    ['image' => 'assets/images/work4.png'],
    ['image' => 'assets/images/work5.png'],
    ['image' => 'assets/images/work6.png'],
]

?>
<div class="flex flex-col">

    <?php
    $sectionTitle = "Services";
    include 'includes/banner.php';
    ?>
    <div class="py-10 min-h-[60vh] px-4 w-full max-w-[95dvw]  sm:max-w-[80dvw] lg:max-w-[70dvw] mx-auto">
        <p class="text-[20px] w-max mt-4  border-b-2 pb-2 border-b-gray-600">Projects We Have Done</p>
        <div id="gallery" class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 mt-5">
            <?php foreach ($works as $work): ?>
                <a class="relative aspect-square overflow-hidden" href="<?= $work['image'] ?>" data-fancybox>
                    <img src="<?= $work['image'] ?>" alt="work" class="object-cover w-full h-full" />
                </a>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<script>
    Fancybox.bind("#gallery a", {
        groupAll: true,
    });
</script>
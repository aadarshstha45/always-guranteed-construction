<?php

$numbers = [
  ['number' => '100%', 'text' => 'Happy Client'],
  ['number' => '200+', 'text' => 'Projects'],
  ['number' => '20K', 'text' => 'Fleets'],
];

?>

<section
  id="numbers"
  class="grid grid-cols-1 gap-[20px] min-[1200px]:gap-2 min-[1200px]:grid-cols-2 p-[10px] py-[40px] min-[370px]:p-[30px] lg:p-[136px] items-start min-[1200px]:items-center">
  <div
    id="numbers-content"
    class="scale-0 opacity-0 transform transition-all duration-1000 flex flex-col gap-2 w-full mx-auto max-w-[442px]">
    <p class="text-caption text-[#565656]">Look at the numbers</p>
    <p class="text-heading">
      Our <span class="text-primary-500 max-w-[400px]">Numbers</span> Speak for
      Themselves
    </p>
  </div>
  <div
    class="grid grid-cols-1 min-[450px]:grid-cols-2 min-[650px]:grid-cols-3 gap-4 numbers w-full max-w-max mx-auto">
    <?php foreach ($numbers as $number): ?>
      <div
        class="flex flex-col items-center justify-center max-w-[200px] min-w-[200px] min-[1200px]:min-w-[150px] w-full mx-auto h-[150px] rounded-[10px] shadow-lg">
        <p class="text-heading text-primary-500 number"
          data-number="<?= $number['number']; ?>"
          data-target="<?= $number['number']; ?>"
          id="count-<?= $number['text']; ?>"><?= $number['number']; ?></p>
        <p class="text-[20px] text-[#565656]">
          <?= $number['text']; ?>
        </p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
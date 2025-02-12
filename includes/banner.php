<div class="flex flex-col gap-2 bg-gray-800 text-white items-center justify-center py-12">
    <p class="text-center text-heading"><?= isset($sectionTitle) ? htmlspecialchars($sectionTitle) : "Default Title"; ?></p>
    <div class="flex items-center gap-1">
        <div class="w-[50px] h-[4px] bg-white rounded-full"></div>
        <div class="rounded-full bg-white w-[10px] h-[10px]"></div>
        <div class="w-[50px] h-[4px] bg-white rounded-full"></div>
    </div>
</div>
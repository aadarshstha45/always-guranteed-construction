<div class="flex flex-col">

    <?php
    $sectionTitle = "Reviews";
    include 'includes/banner.php';
    ?>
    <div
        id="reviews"
        class="opacity-0 transform -translate-y-10 transition-all duration-700 py-10 min-h-[60vh] px-4 w-full max-w-[95dvw]  md:max-w-[90dvw] lg:max-w-[85dvw] 2xl:max-w-[75dvw] mx-auto">
        <div class="grid grid-cols-1 min-[900px]:grid-cols-3 gap-5">
            <!-- Column 1 -->
            <div class="flex flex-col col-span-2 min-[900px]:col-span-1">
                <div class="flex px-5 py-4 items-center justify-center bg-primary-500 text-white">
                    <p class="text-[20px] font-medium uppercase">Write Your Review</p>
                </div>
                <div class="flex gap-4 flex-col p-5 bg-gray-100">
                    <input type="text" placeholder="Name *" class="input-text " required />
                    <input type="email" placeholder="Email *" class="input-text" required />
                    <input type="text" placeholder="Phone" class="input-text" />
                    <input type="text" placeholder="Address" class="input-text" />
                    <textarea placeholder="Your Review *" class="input-text min-h-[100px]" required></textarea>
                    <button class="submit-btn rounded-sm-important">Submit</button>
                </div>
            </div>
            <!-- Column 1 -->


            <!-- Column 2 -->

            <div class="flex flex-col col-span-2">
                <div class="flex px-5 py-4 items-center justify-center bg-primary-500 text-white">
                    <p class="text-[20px] font-medium uppercase">What Our Clients Say</p>
                </div>

                <!-- Column 2 -->
            </div>
        </div>
    </div>
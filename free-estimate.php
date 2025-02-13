<div class="flex flex-col">
    <?php
    $sectionTitle = "Free Estimate";
    include 'includes/banner.php';
    ?>
    <div
        id="services"
        class="py-10 flex flex-col gap-4 px-4 w-full max-w-[95dvw]  sm:max-w-[80dvw] lg:max-w-[70dvw] mx-auto opacity-0 transform -translate-y-10 transition-all duration-700">
        <p class="text-[20px] w-max mt-4  border-b-2 pb-2 border-b-gray-600">Fill the form for free estimate</p>

        <div class="bg-gray-100 rounded-md flex flex-col gap-4 p-4 ">
            <p class="py-2 px-4 rounded-[5px] bg-primary-500 text-white font-viga text-[16px]  sm:text-[20px] lg:text-[24px] ">Your Basic Information</p>
            <form id="estimate-form" class="grid gird-cols-1 min-[560px]:grid-cols-2  gap-4" method="POST" action="free-estimate-send.php">
                <input type="text" name="name" class="input-text col-span-2  min-[560px]:col-span-1" placeholder="Name: " required />
                <input type="email" name="email" class="input-text col-span-2  min-[560px]:col-span-1" placeholder="Email: " required />
                <input type="text" name="phone" class="input-text col-span-2  min-[560px]:col-span-1" placeholder="Phone: " required />
                <input type="text" name="address" class="input-text col-span-2  min-[560px]:col-span-1" placeholder="Address: " required />
                <textarea name="message" class="input-text col-span-2 min-h-[110px]" placeholder="Message: " required></textarea>
            </form>
            <button
                form="estimate-form"
                type="submit" class="submit-btn w-max">
                Send now
            </button>
        </div>
    </div>
<div class="flex flex-col gap-8 min-h-[60vh]">
    <?php
    $sectionTitle = "About Us";
    include 'includes/banner.php';
    ?>
    <div
        id="about-us"
        class="py-10 flex flex-col gap-4 px-4 w-full max-w-[95dvw]  sm:max-w-[80dvw] lg:max-w-[70dvw] mx-auto opacity-0 transform -translate-y-10 transition-all duration-700">
        <div
            class="container mx-auto p-4 max-w-[1440px] relative pb-10 mt-20">
            <img
                src="assets/images/bg-grid.png"
                alt="Our Roots"
                class="absolute -top-10 left-12" />
            <div class="grid grid-cols-1 min-[860px]:grid-cols-2 gap-8 relative">
                <!-- Grid 1 -->
                <div
                    id="about-grid-1"
                    class="relative">
                    <img
                        src="assets/images/about-us.png"
                        alt="Our Roots"
                        class="h-[450px] xl:h-[670px] max-h-670px w-full max-w-[500px] justify-self-end object-cover" />
                    <!-- card -->
                    <div
                        class="bg-gradient-to-b from-[#005CDC] to-[#003176] absolute -top-20 sm:-top-12 min-[1280px]:top-10 -left-3 sm:left-2 min-[1340px]:left-24 w-[200px] sm:w-[250px] p-[50px_42.47px_50px_42.67px] gap-[29px] flex flex-col items-center justify-center">
                        <p
                            class="border-y-2 text-white border-y-black text-[70px] leading-[92px] font-dmsans tracking-[3px] font-black">
                            2 1
                        </p>
                        <p
                            class="text-center tracking-[3.2px] leading-[34px] text-white uppercase text-[18px] font-bold font-sofia">
                            Years of Construction Done Right
                        </p>
                    </div>
                    <!-- card -->
                </div>

                <!-- Grid 1 -->

                <!-- Grid 2 -->
                <div
                    class="flex flex-col gap-4 justify-center h-full w-full md:p-4">
                    <p
                        class="text-heading text-[#2A2A2A] max-w-[450px] min-[860px]:max-w-[563px]">
                        Welcome to Always
                        <span class="text-primary-500">Guaranteed</span> Construction
                    </p>
                    <p
                        class="leading-[30px] text-[16px] lg:text-[18px] text-[#3C3B3B] text-justify max-w-[565px]">
                        Our team has been in Home Improvement for decades, understanding all
                        the ins and outs. We are also familiar with common reasons homeowners
                        decide to remodel their kitchens and bathrooms. Our goal is to help
                        you achieve the remodel of your dreams without breaking the bank. Our
                        entire process, from the initial consultation to the finishing
                        touches, is handled with a high level of professionalism.
                    </p>
                    <div
                        class="flex gap-4 flex-col sm:flex-row justify-between max-w-[565px]">
                        <img
                            src="assets/images/bbb-logo1.png"
                            alt="BBB Logo"
                            class="w-[200px] h-[90px]" />
                    </div>
                </div>
                <!-- Grid 2 -->
            </div>
        </div>
    </div>

</div>
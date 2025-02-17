<?php
$testimonials = [
    [
        "name" => "John D.",
        "role" => "Homeowner",
        "testimonial" => "We were absolutely thrilled with the work done by [Company Name]. The team was professional, timely, and exceeded our expectations. From the initial consultation to the final walkthrough, every detail was handled with care. Our new home addition is perfect, and we couldn't be happier!"
    ],
    [
        "name" => "Sarah T.",
        "role" => "Real Estate Developer",
        "testimonial" => "As a real estate developer, timing is everything. [Company Name] delivered our commercial project ahead of schedule without compromising on quality. Their team was highly organized, communicative, and dedicated to making sure everything was on track. I will definitely work with them again in the future."
    ],
    [
        "name" => "Michael W.",
        "role" => "Business Owner",
        "testimonial" => "[Company Name] did a fantastic job on our office renovation. The quality of craftsmanship is outstanding, and the project was completed exactly as we envisioned. I was impressed with how they handled the entire process—from design to execution—and the results speak for themselves."
    ],
    [
        "name" => "Emily R.",
        "role" => "Residential Client",
        "testimonial" => "The level of attention to detail [Company Name] put into our home remodel was incredible. They listened to all of our needs and concerns, and the finished product truly reflects our vision. We’ve received countless compliments from friends and family, and we’re so grateful for their hard work!"
    ],
    [
        "name" => "David P.",
        "role" => "Contractor",
        "testimonial" => "What sets [Company Name] apart is their clear communication and excellent customer service. As a contractor, I’ve worked with many different teams, but this one stands out for their professionalism and willingness to go the extra mile. They kept us updated at every step and made sure all of our requirements were met."
    ],
    [
        "name" => "Catherine L.",
        "role" => "Architect",
        "testimonial" => "Working with [Company Name] has been a pleasure. Their team is solution-driven, and they brought creative ideas to the table that enhanced our design vision. They collaborated well with us throughout the project and were proactive in overcoming any challenges that came up."
    ],
    [
        "name" => "Andrew S.",
        "role" => "Environmental Consultant",
        "testimonial" => "I was impressed with how [Company Name] integrates sustainable building practices into every project. From eco-friendly materials to energy-efficient designs, they’ve shown a genuine commitment to green building. It’s refreshing to see a construction company with such a forward-thinking approach."
    ]
];


?>
<div class="flex flex-col">
    <?php
    $sectionTitle = "Reviews";
    include 'includes/banner.php';
    ?>

    <div id="reviews"
        class="opacity-0 transform -translate-y-10 transition-all duration-700 py-10 min-h-[60vh] px-4 w-full max-w-[95dvw] md:max-w-[90dvw] lg:max-w-[85dvw] 2xl:max-w-[75dvw] mx-auto">
        <div class="grid grid-cols-1 min-[900px]:grid-cols-3 gap-5">
            <!-- Column 1 -->
            <div class="flex flex-col col-span-2 min-[900px]:col-span-1">
                <div class="flex px-5 py-4 items-center justify-center bg-primary-500 text-white">
                    <p class="text-[20px] font-medium uppercase">Write Your Review</p>
                </div>
                <form action="reviews-send.php" method='post' class="flex gap-4 flex-col p-5 bg-gray-100">
                    <input name="name" type="text" placeholder="Name *" class="input-text" required />
                    <input name="email" type="email" placeholder="Email *" class="input-text" required />
                    <input name="phone" type="text" placeholder="Phone" class="input-text" />
                    <input name="address" type="text" placeholder="Address" class="input-text" />
                    <textarea name="review" placeholder="Your Review *" class="input-text min-h-[100px]" required></textarea>

                    <button class="submit-btn rounded-sm-important">Submit</button>
                </form>
            </div>
            <!-- Column 1 -->

            <!-- Column 2 -->
            <div class="flex flex-col gap-4 col-span-2">
                <div class="flex flex-col gap-4 px-5 py-4 items-center justify-center bg-primary-500 text-white">
                    <p class="text-[20px] font-medium uppercase">What Our Clients Say</p>
                </div>

                <?php foreach ($testimonials as $index => $testimonial): ?>
                    <div class="border rounded-lg">
                        <button
                            id="accordion-<?= $index; ?>"
                            class="flex text-[16px] md:text-[18px] xl:text-[20px] font-medium  justify-between items-center w-full px-6 py-3 text-left bg-transparent hover:bg-gray-50 transition font-viga"
                            onclick="toggleAccordion(<?= $index; ?>)">
                            - <?= $testimonial['name']; ?>
                            <span class="toggle-icon" id="icon-<?= $index; ?>">+</span>
                        </button>
                        <div id="testimonial-<?= $index; ?>" class="max-h-0 overflow-hidden transition-all duration-300 px-6 text-gray-700 font-sofia">
                            <p class="py-3"><?= $testimonial['testimonial']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <!-- Column 2 -->
        </div>
    </div>
</div>

<script>
    function toggleAccordion(index) {
        const trigger = document.getElementById(`accordion-${index}`);
        const content = document.getElementById(`testimonial-${index}`);
        const icon = document.getElementById(`icon-${index}`);


        if (content.style.maxHeight) {
            trigger.classList.remove("bg-gray-900", "text-white");
            trigger.classList.add("hover:bg-gray-50", 'bg-transparent');
            content.style.maxHeight = null;
            icon.innerText = "+";
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            icon.innerText = "-";
            trigger.classList.add("bg-gray-900", "text-white");
            trigger.classList.remove("hover:bg-gray-50", 'bg-transparent');
        }
    }
</script>
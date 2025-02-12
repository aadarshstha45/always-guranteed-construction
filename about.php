<div class="flex flex-col">
    <?php
    $sectionTitle = "About Us";
    include 'includes/banner.php';
    ?>
    <div class="py-10 min-h-[60vh] px-4 w-full max-w-[95dvw] sm:max-w-[80dvw] lg:max-w-[70dvw] mx-auto">
        <!-- Animated Element -->
        <div id="about-us" class="flex flex-col gap-4 opacity-0 transform -translate-y-10 transition-all duration-700" id="services">
            <p class="text-heading border-b-2 pb-2 border-b-gray-600 w-max ">
                About Us
            </p>
            <p class="text-[20px] mt-4 ">
                About Us Coming Soon
            </p>
        </div>
        <!-- Animated Element -->

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-y-0");
                }
            });
        }, {
            threshold: 0.2
        });

        // Observe the elements
        observer.observe(document.getElementById("about-title"));
        observer.observe(document.getElementById("about-content"));
    });
</script>
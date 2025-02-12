<?php include("sections/home/hero-section.php"); ?>
<?php include_once("sections/home/about-us.php"); ?>
<?php include_once("sections/home/what-we-offer.php"); ?>
<?php include_once("sections/home/numbers.php"); ?>
<?php include_once("sections/home/get-in-touch.php"); ?>
<?php include_once("sections/home/how-we-work.php"); ?>
<?php include_once("sections/home/clients-reviews.php"); ?>
<?php include_once("sections/home/our-projects.php"); ?>




<script>
    document.addEventListener("DOMContentLoaded", () => {



        // translate y animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-y-[1px]");
                }
            });
        }, {
            threshold: 0.2
        });
        // Observe the elements

        observer.observe(document.getElementById("about-grid-1"));
        observer.observe(document.getElementById("get-in-touch"));
        observer.observe(document.getElementById("offer-header"));
        observer.observe(document.getElementById("clients-reviews-header"));
        observer.observe(document.getElementById("our-projects"));

        // translate y animation

        // scale animation
        const observer2 = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "scale-100");
                }
            });
        }, {
            threshold: 0.1
        });
        // Observe the elements
        observer2.observe(document.getElementById("about-grid-2"));
        observer2.observe(document.getElementById("offer-slider"));
        observer2.observe(document.getElementById("how-we-work"));
        observer2.observe(document.getElementById("numbers-content"));

        // scale animation


        // translate x animation
        const observer3 = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-x-[1px]");
                }
            });
        }, {
            threshold: 0.2
        });
        // Observe the elements
        observer3.observe(document.getElementById("hero-content"));

        // translate x animation

        // Counting Numbers Animation
        const countingAnimation = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const numberElement = entry.target;
                    const numberValue = numberElement.getAttribute("data-number");
                    const targetValue = numberValue.replace(/[^\d]/g, ""); // Remove non-numeric characters
                    const target = parseInt(targetValue, 10);
                    let current = 0;

                    // Check for suffix and handle accordingly
                    const suffix = numberValue.replace(/[0-9]/g, ""); // Get the non-numeric suffix (e.g., "%" or "K")

                    // Count to the target value
                    const interval = setInterval(() => {
                        // Update text content with proper formatting
                        if (suffix === '%') {
                            numberElement.textContent = `${current}%`; // For percentage
                        } else if (suffix === 'K') {
                            numberElement.textContent = `${current}K`; // For 'K' suffix (e.g., 20K)
                        } else if (suffix === '+') {
                            numberElement.textContent = `${current}+`; // For 'plus' suffix (e.g., 200+)
                        } else {
                            numberElement.textContent = `${current}`; // No suffix, just number
                        }

                        // Stop when the target is reached
                        if (current >= target) {
                            clearInterval(interval);
                        } else {
                            current += Math.ceil(target / 100); // Adjust speed of counting
                        }
                    }, 10); // Update speed in ms

                    observer.unobserve(numberElement);
                }
            });
        }, {
            threshold: 0.2
        });
        const numbers = document.querySelectorAll(".number");
        // Observe the elements

        numbers.forEach(number => countingAnimation.observe(number));
        // Counting Numbers Animation



    });
</script>
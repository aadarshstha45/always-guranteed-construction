<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Viewport for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Character encoding -->
  <meta charset="UTF-8">

  <!-- Title tag (important for SEO) -->
  <title>Your Construction Portfolio | Professional Construction Services</title>

  <!-- Meta description (appears in search engine results) -->
  <meta name="description" content="Explore our portfolio of top-notch construction projects, featuring residential, commercial, and industrial work. Contact us today for a consultation!">

  <!-- Keywords (important for SEO, but not as critical as it used to be) -->
  <meta name="keywords" content="construction portfolio, general contractor, construction services, residential construction, commercial construction, industrial construction, building contractor">

  <!-- Author tag (optional) -->
  <meta name="author" content="Your Company Name">

  <!-- Open Graph tags for social media sharing (Facebook, LinkedIn, etc.) -->
  <meta property="og:title" content="Your Construction Portfolio">
  <meta property="og:description" content="Explore our portfolio of top-notch construction projects. We specialize in residential, commercial, and industrial construction services.">
  <meta property="og:image" content="https://example.com/your-image.jpg">
  <meta property="og:url" content="https://example.com">
  <meta property="og:type" content="website">

  <!-- Twitter Card data for better appearance on Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Your Construction Portfolio">
  <meta name="twitter:description" content="Explore our portfolio of top-notch construction projects. We specialize in residential, commercial, and industrial construction services.">
  <meta name="twitter:image" content="https://example.com/your-image.jpg">
  <meta name="twitter:url" content="https://example.com">

  <title>Document</title>
  <script src="assets/js/jquery.js"></script>
  <link href="assets/css/tailwind.css" rel="stylesheet" />
  <link href="assets/css/styles.css" rel="stylesheet" />
  <link href="assets/css/fancybox.css" rel="stylesheet" />
  <script src="assets/swiper/swiper-bundle.min.js"></script>
  <link href="assets/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/fancybox.js"></script>
</head>

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
    const contact = document.getElementById("contact-us");
    const reviews = document.getElementById("reviews");
    const ourProjects = document.getElementById("our-projects");
    const services = document.getElementById("services");
    const aboutUs = document.getElementById("about-us");
    if (contact) {
      observer.observe(contact);
    }
    if (reviews) {
      observer.observe(reviews);
    }
    if (ourProjects) {
      observer.observe(ourProjects);
    }
    if (services) {
      observer.observe(services);
    }
    if (aboutUs) {
      observer.observe(aboutUs);
    }

  });
</script>

<body class="min-h-screen flex flex-col">
  <?php include_once("includes/navbar.php"); ?>
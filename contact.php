<?php
$contacts = [
    [
        'title' => 'Address',
        'content' => constant('address'),
        'href' => "#",
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M10 1.25C8.1773 1.25215 6.42987 1.97717 5.14102 3.26602C3.85218 4.55486 3.12716 6.3023 3.12501 8.125C3.12282 9.61452 3.60937 11.0636 4.51001 12.25C4.51001 12.25 4.69751 12.4969 4.72813 12.5325L10 18.75L15.2744 12.5294C15.3019 12.4963 15.49 12.25 15.49 12.25L15.4906 12.2481C16.3908 11.0623 16.8771 9.61383 16.875 8.125C16.8729 6.3023 16.1478 4.55486 14.859 3.26602C13.5701 1.97717 11.8227 1.25215 10 1.25ZM10 10.625C9.50555 10.625 9.02221 10.4784 8.61108 10.2037C8.19996 9.92897 7.87953 9.53852 7.69031 9.08171C7.50109 8.62489 7.45158 8.12223 7.54804 7.63727C7.64451 7.15232 7.88261 6.70686 8.23224 6.35723C8.58187 6.0076 9.02733 5.7695 9.51228 5.67304C9.99723 5.57657 10.4999 5.62608 10.9567 5.8153C11.4135 6.00452 11.804 6.32495 12.0787 6.73607C12.3534 7.1472 12.5 7.63055 12.5 8.125C12.4992 8.78779 12.2355 9.42319 11.7669 9.89185C11.2982 10.3605 10.6628 10.6242 10 10.625Z" fill="#005CDC"/>
                    </svg>'
    ],
    [
        'title' => 'Phone',
        'content' => constant('phone'),
        'href' => "tel:" . constant('phone'),
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M6.987 2.0661C7.42458 1.93417 7.89415 1.95609 8.31754 2.12821C8.74093 2.30033 9.0926 2.61227 9.314 3.0121L9.388 3.1611L10.05 4.6321C10.2509 5.07858 10.3161 5.57428 10.2375 6.05754C10.159 6.54079 9.94003 6.99028 9.608 7.3501L9.475 7.4821L8.432 8.4551C8.244 8.6331 8.385 9.3221 9.065 10.5001C9.677 11.5601 10.175 12.0551 10.42 12.0821H10.463L10.516 12.0721L12.566 11.4451C12.8415 11.3606 13.1355 11.3573 13.4129 11.4355C13.6903 11.5137 13.9392 11.6701 14.13 11.8861L14.221 12.0011L15.578 13.8811C15.8439 14.2496 15.9765 14.6977 15.9538 15.1515C15.931 15.6054 15.7544 16.038 15.453 16.3781L15.331 16.5041L14.789 17.0181C14.3023 17.479 13.6935 17.7905 13.0349 17.9155C12.3763 18.0404 11.6957 17.9737 11.074 17.7231C9.139 16.9431 7.381 15.1611 5.784 12.3951C4.184 9.6221 3.519 7.2051 3.816 5.1351C3.90587 4.50937 4.16354 3.91966 4.56164 3.4286C4.95973 2.93754 5.48339 2.56346 6.077 2.3461L6.27 2.2821L6.987 2.0661Z" fill="#005CDC"/>
                    </svg>'
    ],
    [
        'title' => 'Email',
        'content' => constant('email'),
        'href' => "mailto:" . constant('email'),
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                    <path d="M5.25 3.9375C4.55381 3.9375 3.88613 4.21406 3.39384 4.70634C2.90156 5.19863 2.625 5.86631 2.625 6.5625V6.82631L10.5 11.067L18.375 6.82763V6.5625C18.375 5.86631 18.0984 5.19863 17.6062 4.70634C17.1139 4.21406 16.4462 3.9375 15.75 3.9375H5.25ZM18.375 8.31731L10.8111 12.39C10.7155 12.4415 10.6086 12.4684 10.5 12.4684C10.3914 12.4684 10.2845 12.4415 10.1889 12.39L2.625 8.31731V14.4375C2.625 15.1337 2.90156 15.8014 3.39384 16.2937C3.88613 16.7859 4.55381 17.0625 5.25 17.0625H15.75C16.4462 17.0625 17.1139 16.7859 17.6062 16.2937C18.0984 15.8014 18.375 15.1337 18.375 14.4375V8.31731Z" fill="#005CDC"/>
                    </svg>'
    ],
];

?>
<div class="flex flex-col">
    <?php
    $sectionTitle = "Contact";
    include 'includes/banner.php';
    ?>
    <div
        id="contact-us"
        class="opacity-0 transform -translate-y-10 transition-all duration-700 py-10 min-h-[60vh] px-4 w-full max-w-[95dvw]  sm:max-w-[90dvw] lg:max-w-[80dvw] mx-auto">
        <div
            class="grid grid-cols-1 min-[1060px]:grid-cols-2 items-start gap-12 min-[1060px]:gap-4 relative">
            <div class="flex flex-col gap-4 max-w-[487px] ">
                <p class="text-caption text-primary-500 border-b-2 pb-2 border-b-primary-400 w-max">Get in Touch</p>
                <p class="text-heading ">
                    We'd love to <span class="text-primary-500">hear</span> from you!
                </p>
                <p
                    class="text-justify text-[16px] md:text-[18px] leading-[35px]">
                    Please fill out the form, and we will get back to you as soon as
                    possible during regular business hours to confirm your preferred dates &
                    times. Or contact us through:
                </p>

                <!-- Contact Details -->
                <?php foreach ($contacts as $index => $item) : ?>
                    <div class="flex items-start gap-4">
                        <div class="relative flex justify-center items-center min-w-[37px] min-h-[37px] rounded-[5px] bg-gray-700">
                            <?= $item['icon'] ?>
                        </div>
                        <div class="flex flex-col items-start gap-[1px] ">
                            <p class="text-[16px] font-viga"><?= $item['title'] ?>: </p>
                            <a href="<?= $item['href'] ?>" class="text-[16px] hover:underline"><?= $item['content'] ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Contact Details -->
            </div>
            <div
                class="bg-white flex flex-col gap-4 px-[20px] min-[400px]:px-[48px] w-full h-full  border-l-[4px] border-l-primary-500">
                <p class="text-caption text-primary-500 border-b-2 pb-2 border-b-primary-400 w-max">Contact Us</p>
                <form class="grid grid-cols-1 min-[570px]:grid-cols-2 gap-6">
                    <input
                        type="text"
                        class="input-text col-span-2 min-[570px]:col-span-1"
                        placeholder="Name: " />
                    <input
                        type="text"
                        class="input-text col-span-2 min-[570px]:col-span-1"
                        placeholder="Phone: " />
                    <input
                        type="text"
                        class="input-text col-span-2 min-[570px]:col-span-1"
                        placeholder="Email: " />

                    <input
                        type="text"
                        class="input-text col-span-2 min-[570px]:col-span-1"
                        placeholder="Address: " />
                    <textarea
                        class="input-text col-span-2 min-h-[110px]"
                        placeholder="Message: "></textarea>
                    <button
                        class="rounded-md bg-gradient-to-b from-[#168BFF] to-[#167ADD] text-white h-[40px] col-span-2 hover:from-[#167ADD] hover:to-[#168BFF] active:scale-[0.98] active:brightness-90 transition-all">
                        Send now
                    </button>
                </form>
            </div>
        </div>
        <div class="py-10 flex flex-col gap-4">
            <p class="text-caption text-primary-500 border-b-2 pb-2 border-b-primary-400 w-max">Location</p>
            <div class=" w-full h-[600px] border-2 border-gray-500 rounded-md overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.816572215438!2d85.29420807622283!3d27.722949176173504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa0763bf23ef81bff%3A0x96ec34c32fde92fd!2sCode%20Tara!5e0!3m2!1sen!2snp!4v1739346371457!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
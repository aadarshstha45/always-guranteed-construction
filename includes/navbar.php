<?php
$navItems = [
    ["name" => "Home", "link" => BASE_URL],
    ["name" => "About Us", "link" => "about"],
    ["name" => "Services", "link" => "services"],
    ["name" => "Our Work", "link" => "our-works"],
    ["name" => "Reviews", "link" => "reviews"],
    ["name" => "Contact Us", "link" => "contact"],
];

$pathname = $_SERVER['REQUEST_URI']; // Get current path


?>

<nav class="flex flex-col w-full">
    <!-- Top Bar -->
    <div class="hidden min-[650px]:flex w-full h-[40px]">
        <div class="bg-gradient-to-r from-[#005CDC] to-[#064091] text-white shadow-md w-[486px] min-w-[300px] lg:min-w-[380px] 2xl:min-w-[486px] flex items-center justify-center px-2 whitespace-nowrap">
            Always Guaranteed Construction
        </div>
        <div class="bg-[#000] text-white w-[75%] flex items-center justify-end sm:pr-[50px] lg:pr-[150px]">
            <p class="bg-gradient-to-r from-[#005CDC] to-[#064091] bg-clip-text text-transparent text-[15px] font-medium">
                E-mail:
                <a class="text-white hover:underline" href="mailto:<?= email ?>"> <?= email ?> </a>
            </p>
        </div>
    </div>

    <!-- Navbar -->
    <div class="w-full bg-white">
        <div class="flex items-center justify-between mx-auto max-w-[1800px] px-[10px] md:px-[20px] py-2">
            <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="logo" class="w-[200px] h-[80px] sm:w-[250px] sm:h-[100px] md:w-[314px] md:h-[134px]" />

            <!-- Button to Open Drawer -->
            <button onclick="openDrawer()" class="primary-btn flex min-[710px]:hidden">
                <img src="assets/icons/hamburger.svg" alt="menu" class="w-[30px] h-[30px]" />
            </button>

            <!-- Drawer Component -->
            <div id="drawer" class="fixed z-[14000] inset-0 bg-gray-500 bg-opacity-50 hidden transition-opacity duration-300 ease-in-out" onclick="closeDrawer()">
                <div class="relative z-[999999] w-full max-w-[400px] ml-auto h-full bg-white flex flex-col p-6 shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out right-0" onclick="event.stopPropagation()" id="drawer-content">
                    <div class="flex justify-end py-2">
                        <button onclick="closeDrawer()" class="hover:bg-gray-200 px-2 text-2xl  font-semibold">&times;</button>
                    </div>

                    <!-- Links -->
                    <div class="flex flex-col gap-6 nav-links">
                        <?php foreach ($navItems as $item): ?>
                            <a href="<?= $item['link']; ?>"
                                class="hover:text-[#005CDC] text-[20px]
                                   <?= ($pathname === $item['link'] || ($pathname !== '/' && strpos($pathname, $item['link']) !== false)) ? 'text-primary-500 font-medium' : 'text-black border-b-transparent'; ?>">
                                <?= $item['name']; ?>
                            </a>
                        <?php endforeach; ?>
                        <div class="flex flex-col gap-4 items-center">
                            <button class="primary-btn w-full">
                                <img src="<?= BASE_URL ?>/assets/icons/mobile.svg" alt="phone" class="w-[25px] h-[25px] mr-2" />
                                (618) 567-2106
                            </button>
                            <button class="secondary-btn w-full">
                                <img src="<?= BASE_URL ?>/assets/icons/notes.svg" alt="phone" class="w-[25px] h-[25px] mr-2" />
                                Free Estimate
                            </button>
                        </div>
                    </div>
                    <!-- Links -->

                    <div class="flex flex-col gap-4 absolute bottom-4 w-full">
                        <div class="bg-gradient-to-r from-[#005CDC] to-[#064091] text-white shadow-md w-full flex items-center justify-center p-2 whitespace-nowrap">
                            Always Guaranteed Construction
                        </div>
                        <div class="bg-[#000] text-white p-2 w-[full] flex items-center justify-center">
                            <p class="bg-gradient-to-r from-[#005CDC] to-[#064091] bg-clip-text text-transparent text-[15px] font-medium">
                                E-mail:
                                <a class="text-white hover:underline" href="mailto:<?= email ?>"> <?= email ?> </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Desktop Nav Items -->
            <div class="hidden min-[710px]:flex gap-4 items-center">
                <button class="primary-btn">
                    <img src="<?= BASE_URL ?>/assets/icons/mobile.svg" alt="phone" class="w-[25px] h-[25px] mr-2" />
                    (618) 567-2106
                </button>
                <button class="secondary-btn">
                    <img src="<?= BASE_URL ?>/assets/icons/notes.svg" alt="phone" class="w-[25px] h-[25px] mr-2" />
                    Free Estimate
                </button>
            </div>
        </div>
    </div>

    <!-- Desktop Nav Menu -->
    <div class="w-full bg-black text-white h-[50px] hidden min-[710px]:flex">
        <div class="flex items-center max-w-[1800px] pl-[10px] md:pl-[50px] lg:pl-[133px] h-full px-4" id="nav-menu">
            <ul class="flex gap-16 nav-links w-full">
                <?php foreach ($navItems as $item): ?>
                    <li>
                        <a href="<?= $item['link']; ?>"
                            class="hover:text-[#005CDC] text-[20px] min-[710px]:text-[15px] min-[710px]:text-white 
                           <?= ($pathname === $item['link'] || ($pathname !== '/' && strpos($pathname, $item['link']) !== false)) ? 'text-primary-500 font-medium' : 'text-black border-b-transparent'; ?>">
                            <?= $item['name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
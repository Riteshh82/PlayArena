<?php
$footerLinks = [
    [
        'title' => 'Company',
        'links' => [
            ['name' => 'About Us'],
            ['name' => 'Careers'],
            ['name' => 'Press'],
        ],
    ],
    [
        'title' => 'Support',
        'links' => [
            ['name' => 'Help Center'],
            ['name' => 'Contact Us'],
            ['name' => 'FAQs'],
        ],
    ],
    [
        'title' => 'Legal',
        'links' => [
            ['name' => 'Terms & Conditions'],
            ['name' => 'Privacy Policy'],
            ['name' => 'Cookies'],
        ],
    ],
];
?>

<link href="/public/custom.css" rel="stylesheet">
<link href="/public/style.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<section class="flex flex-col items-center py-8">
    <div class="flex flex-col md:flex-row w-full justify-between mb-8">
        <div class="flex-1 flex flex-col justify-start mr-10">
            <span class="text-4xl font-bold text-black">PlayArena</span>
            <p class="text-gray-600 mt-4 max-w-sm">
            Find your perfect turf with ease,  
            Play, compete, and create memories that please!</p>
        </div>

        <div class="flex flex-wrap md:flex-nowrap justify-between w-full">
            <?php foreach ($footerLinks as $link): ?>
                <div class="flex flex-col my-4 min-w-[150px]">
                    <h4 class="font-medium text-lg text-black"><?= $link['title'] ?></h4>
                    <ul class="list-none mt-4">
                        <?php foreach ($link['links'] as $item): ?>
                            <li class="font-normal text-base text-gray-600 hover:text-black cursor-pointer mb-4 last:mb-0">
                                <?= $item['name'] ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="w-full flex justify-between items-center flex-col md:flex-row pt-6 border-t border-gray-300">
        <p class="font-normal text-lg text-center text-black">
            &copy; 2024 PlayArena. All Rights Reserved.
        </p>
        <div class="flex flex-row mt-6 md:mt-0">
            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="mr-6">
                <i class="fa fa-instagram w-5 h-5 text-gray-600 cursor-pointer"></i>
            </a>
            <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer" class="mr-6">
                <i class="fa fa-youtube w-5 h-5 text-gray-600 cursor-pointer"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" class="mr-6">
                <i class="fa fa-linkedin w-5 h-5 text-gray-600 cursor-pointer"></i>
            </a>
            <a href="https://www.x.com" target="_blank" rel="noopener noreferrer">
                <i class="fa fa-twitter w-5 h-5 text-gray-600 cursor-pointer"></i>
            </a>
        </div>
    </div>
</section>

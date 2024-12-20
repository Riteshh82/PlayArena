<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer - PlayArena</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .icon {
            width: 21px;
            height: 21px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .icon:hover {
            transform: scale(1.2) rotate(360deg);
        }

        .icon:active {
            transform: scale(0.9);
        }

        .footer-link:hover {
            scale: 1.05;
        }

        .footer-link:active {
            scale: 0.95;
        }
    </style>
</head>
<body class="bg-gray-100">

<section class=" text-white bg-gradient-to-r" style="background: linear-gradient(to right, #000000, #434343); flex flex-col items-center">
    <div class="flex flex-col md:flex-row w-full mb-8">
        <div class="flex-1 flex flex-col justify-start mr-10 m-10 p-14">
            <span class="text-4xl font-bold">PlayArena</span>
            <p class="text-dimblack mt-4 max-w-[310px]">
            Find your perfect turf with ease,  
            Play, compete, and create memories that please!</p>
        </div>
        <div class="flex-[1.5] w-full flex flex-row justify-between flex-wrap mt-10 md:mt-0">
            <?php
            $footerLinks = [
                [
                    'title' => 'Company',
                    'links' => [
                        ['name' => 'About Us', 'url' => 'www.ritesh.com'],
                        ['name' => 'Careers', 'url' => '/careers'],
                        ['name' => 'Contact', 'url' => '/contact']
                    ]
                ],
                [
                    'title' => 'Community',
                    'links' => [
                        ['name' => 'Terms & Conditions'],
                        ['name' => 'Privacy Policy'],
                        ['name' => 'Newsletters
']
                    ]
                ],
                [
                    'title' => 'Help',
                    'links' => [
                        ['name' => 'FAQ'],
                        ['name' => 'Support'],
                        ['name' => 'Privacy Policy']
                    ]
                ]
            ];

            foreach ($footerLinks as $link) {
                echo '<div class="flex flex-col ss:my-0 my-4 min-w-[150px] m-10 pt-20">';
                echo '<h4 class="font-poppins font-medium text-[18px] leading-[27px] text-white">' . $link['title'] . '</h4>';
                echo '<ul class="list-none mt-4">';
                foreach ($link['links'] as $item) {
                    echo '<li class="font-poppins font-normal text-[16px] leading-[24px] text-dimblack hover:text-white cursor-pointer footer-link mb-4">';
                    echo $item['name'];
                    echo '</li>';
                }
                echo '</ul>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="w-full flex justify-between items-center md:flex-row flex-col pt-6 border-t-[1px] p-10 border-t-[#9d9ca3]">
        <p class="font-poppins font-normal text-center text-[18px] leading-[27px] text-white">
            &#169; 2024 PlayArena. All Rights Reserved.
        </p>
        <div class="flex flex-row md:mt-0 mt-6">
            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="mr-6">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="icon">
            </a>
            <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer" class="mr-6">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png" alt="YouTube" class="icon">
            </a>
            <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" class="mr-6">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/LinkedIn_logo_initials.png" alt="LinkedIn" class="icon">
            </a>
            <a href="https://www.x.com" target="_blank" rel="noopener noreferrer">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/X_logo_%282020%29.svg" alt="X Twitter" class="icon">
            </a>
        </div>
    </div>
</section>

</body>
</html>

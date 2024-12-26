<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.0/ScrollTrigger.min.js"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="absolute top-0 left-0 right-0 z-10">
        <div class="container mx-auto px-6 py-4">
            <?php include 'src/navbar.php'; ?>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-left bg-cover bg-center" style="background-image: url('public/img/hero.jpeg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-left pl-10 sm:pl-32 md:pl-32 text-white">
            <h1 id="hero-title" class="text-4xl md:text-6xl font-extrabold leading-tight opacity-0">
                YOUR<br>NEAREST<br><span class="bg-gradient-to-r from-[#1d976c] to-[#93f9b9] bg-clip-text text-transparent">SPORTS COMMUNITY</span>
            </h1>
            <p id="hero-subtitle" class="mt-4 text-lg md:text-xl font-semibold opacity-0">
                <b>IS JUST A TAP AWAY</b>
            </p>
            <a id="hero-button" href="/src/appoinments.php" class="mt-8 inline-block px-8 py-3 bg-gradient-to-r from-[#1d976c] to-[#93f9b9] hover:bg-green-600 text-white text-lg font-bold rounded-full shadow-md transition duration-300 opacity-0">
                To Book Turf
            </a>
        </div>
    </section>

    <script>
        // Initialize GSAP
        window.addEventListener('DOMContentLoaded', () => {
            const timeline = gsap.timeline();

            // Animate title
            timeline.fromTo(
                '#hero-title', {
                    opacity: 0,
                    y: 50
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out'
                }
            );

            // Animate subtitle
            timeline.fromTo(
                '#hero-subtitle', {
                    opacity: 0,
                    y: 50
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out'
                },
                '-=0.5' // Overlap animations
            );

            // Animate button
            timeline.fromTo(
                '#hero-button', {
                    opacity: 0,
                    scale: 0.8
                }, {
                    opacity: 1,
                    scale: 1,
                    duration: 1,
                    ease: 'power3.out'
                },
                '-=0.5'
            );
        });
    </script>

</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Simple form validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = "Please fill all the fields 😒";
    } else {
        // Send email using EmailJS or PHP mail() function (EmailJS integration not shown in PHP)
        $to = "your-email@example.com"; // Replace with your email
        $subject = "Contact Us Message from $name";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $success = "Thank you so much! 😊";
        } else {
            $error = "An error occurred. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <section id="Contactus">
        <div class="max-w-6xl mx-auto py-12 mt-4 mb-16 px-5 flex lg:items-center flex-col lg:flex-row lg:gap-16 gap-8">
            
            <div class="max-w-[300px]">
                <h2 class="text-4xl font-bold">Contact Us</h2>
                <p class="py-5 text-lg">We’d love your feedback, ideas, or anything else you’d like to share! Let us know!</p>
            </div>
            
            <form action="contactus.php" method="POST" class="w-full lg:w-[600px] py-10 grid grid-cols-1 md:grid-cols-2 gap-5">
                <?php if (isset($error)): ?>
                    <div class="text-red-600 mb-4"><?php echo $error; ?></div>
                <?php elseif (isset($success)): ?>
                    <div class="text-green-600 mb-4"><?php echo $success; ?></div>
                <?php endif; ?>

                <input type="text" name="name" placeholder="Your name" class="bg-black text-white p-4 rounded-md" value="<?php echo isset($name) ? $name : ''; ?>" required>
                <input type="email" name="email" placeholder="Your email" class="bg-black text-white p-4 rounded-md" value="<?php echo isset($email) ? $email : ''; ?>" required>
                <textarea name="message" placeholder="Message" class="bg-black text-white p-4 rounded-md h-40 sm:col-span-2" required><?php echo isset($message) ? $message : ''; ?></textarea>
                
                <button type="submit" class="bg-black hover:bg-gray-800 text-white h-[45px] flex items-center justify-center gap-2 transition-all rounded-md">
                    <span>Send</span>
                </button>
            </form>
        </div>
    </section>
</body>
</html>

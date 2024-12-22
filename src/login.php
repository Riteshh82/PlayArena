<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Popup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Modal Structure -->
    <div id="loginModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-xl w-1/3 p-8 shadow-lg relative">
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.293 6.293a1 1 0 011.414 0L12 9.586l4.293-4.293a1 1 0 111.414 1.414L13.414 11l4.293 4.293a1 1 0 11-1.414 1.414L12 12.414l-4.293 4.293a1 1 0 11-1.414-1.414L10.586 11 6.293 6.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>

            <!-- Login Form -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Sign In to<br>My Application</h1>
            <form action="process_login.php" method="POST">
                <div class="mb-4">
                    <input type="text" name="email_phone" placeholder="Enter email or Phone number"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                </div>
                <div class="mb-4 relative">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                </div>
                <div class="mb-4">
                    <a href="#" class="text-indigo-600 text-sm">Forgot password?</a>
                </div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">Sign In</button>
            </form>
        </div>
    </div>

    <script>
        // Open Modal function
        window.onload = function() {
            document.getElementById('loginModal').classList.remove('hidden');
        };

        // Close Modal function
        function closeModal() {
            document.getElementById('loginModal').classList.add('hidden');
        }
    </script>
</body>
</html>

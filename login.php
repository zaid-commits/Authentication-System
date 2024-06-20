<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
</head>

<body class="font-inter bg-gray-200 min-h-screen flex flex-col justify-center items-center">
    <video autoplay loop muted class="fixed top-0 left-0 min-w-full min-h-full w-auto h-auto object-cover z-0">
        <source src="backgroundvideo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container bg-white p-8 rounded-lg shadow-md max-w-md w-full mx-4 md:mx-auto mb-8 z-10 mt-16">
        <div class="form-container text-center">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Login</h2>
            <form id="loginForm" action="authenticate.php" method="post">
                <div class="form-group relative mb-4">
                    <i class="fas fa-user absolute top-1/2 left-4 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="text" id="username" name="username" placeholder="Username"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="form-group relative mb-6">
                    <i class="fas fa-lock absolute top-1/2 left-4 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300">Login</button>
            </form>
            <p class="mt-4">Don't have an account? <a href="register.php" class="text-blue-500 hover:underline">Register</a></p>
        </div>
    </div>
    <footer class="mt-auto bg-gray-800 text-white py-4 w-full">
        <div class="contact-links flex justify-center items-center">
            <a href="https://discord.gg/your-server-link" target="_blank"
                class="text-white text-3xl mx-2 hover:text-blue-500 transition-colors duration-300"><i
                    class="fab fa-discord"></i></a>
            <a href="https://github.com/your-username" target="_blank"
                class="text-white text-3xl mx-2 hover:text-blue-500 transition-colors duration-300"><i
                    class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/your-username" target="_blank"
                class="text-white text-3xl mx-2 hover:text-blue-500 transition-colors duration-300"><i
                    class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/your-username" target="_blank"
                class="text-white text-3xl mx-2 hover:text-blue-500 transition-colors duration-300"><i
                    class="fab fa-linkedin"></i></a>
        </div>
    </footer>
</body>

</html>

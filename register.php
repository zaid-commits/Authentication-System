<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f8f8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-bottom: 40px;
        }

        .form-container {
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #aaa;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        button[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 20px;
            font-size: 14px;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: auto;
            padding: 20px;
            background-color: #333;
            color: #fff;
            text-align: center;
            width: 100%;
        }

        .contact-links a {
            color: #fff;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .contact-links a:hover {
            color: #007bff;
        }

        /* Responsive styles */
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>xcvx

<body>
    <div class="container">
        <div class="form-container">
            <h2>Register</h2>
            <form id="registerForm" action="register.php" method="post">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
    <footer>
        <div class="contact-links">
            <a href="https://discord.gg/your-server-link" target="_blank"><i class="fab fa-discord"></i></a>
            <a href="https://github.com/your-username" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/your-username" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/your-username" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>
</body>

</html>

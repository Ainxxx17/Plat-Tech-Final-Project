<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hateza Travel and Tours | Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'DM Sans', sans-serif;
        }
        
        body {
            background: url('indexbg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .login-container {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(5px);
        }
        
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo img {
            width: 90px;
            height: auto;
        }
        
        .login-form h2 {
            color: #0d6efd;
            margin-bottom: 20px;
            text-align: center;
            font-size: 28px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        .form-group input:focus {
            border-color: #0d6efd;
            outline: none;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
        }
        
        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #0a0a0a;;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: block;
            text-align: center;
            text-decoration: none;
        }
        
        .login-btn:hover {
            background-color: #0d6efd;;
        }
        
        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }
        
        .forgot-password a {
            color: #0d6efd;
            text-decoration: none;
            font-size: 14px;
        }
        
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="logo1.png" alt="Hateza Travel Logo">
        </div>
        
        <div class="login-form">
            <h2>Welcome Back</h2>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Enter your email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>
            
            <a href="home.php" class="login-btn">Login</a>
            
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
        </div>
    </div>

    <script>
        // Simple client-side validation before redirecting
        document.querySelector('.login-btn').addEventListener('click', function(e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                e.preventDefault();
                alert('Please fill in both email and password fields');
            }
            // If fields are filled, the link will proceed to home.php
        });
    </script>
</body>
</html>
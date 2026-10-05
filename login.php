<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f2f2f2;
        }

        .login-container {
            width: 350px;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .input-box label {
            display: block;
            margin-bottom: 7px;
            color: #555;
        }

        .input-box input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .input-box input:focus {
            border-color: #4CAF50;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn:hover {
            background: #45a049;
        }

        .register {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .register a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <h2>Login</h2>

        <form>
            <div class="input-box">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter your username" required>
            </div>

            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="login-btn">
                Login
            </button>
        </form>

        <div class="register">
            Don't have an account?
            <a href="#">Register</a>
        </div>

    </div>

</body>
</html>
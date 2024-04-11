<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowFemme - Sign Up</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #07bca3; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background-color: whitesmoke; 
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
            text-align: center;
            width: 300px; 
            position: relative; 
        }

        h2 {
            color: #07bca3;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc; 
            border-radius: 25px;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #ff69b4; 
        }

        button {
            background-color: #07bca3; 
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #05a793; 
        }

        p {
            margin-top: 15px;
        }

        a {
            color:  #07bca3;  
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Create an Account</h2>
        <form id="signup-form" action="signUp_backend.php" method="post">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Log in</a></p>
    </div>
</body>
</html>
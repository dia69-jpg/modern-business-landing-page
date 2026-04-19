<?php
session_start();

if ($_POST) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "AYAD" && $pass == "ayadio123") {
        $_SESSION['admin'] = true;
        header("Location: admin.php");
    } else {
        $error = "Wrong login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        background: linear-gradient(135deg, #6B73FF, #8286d4);
        font-family: 'Arial', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .login-container {
        background: rgba(255, 255, 255, 0.95);
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        text-align: center;
        width: 300px;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    input {
        width: 100%;
        padding: 12px 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        font-size: 14px;
    }

    input:focus {
        border-color: #8286d4;
        box-shadow: 0 0 5px #6B73FF;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #8286d4;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s;
    }

    button:hover {
        background-color: #6B73FF;
    }

    .error {
        color: red;
        margin-bottom: 10px;
    }
</style>
</head>
<body>
<div class="login-container">
    <h2>Admin Login</h2>
    <?php if(isset($error)) { echo "<div class='error'>$error</div>"; } ?>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; padding: 50px;">

    <h2 style="color: #007bff;">Signup</h2>
    
    <form action="loginPage.php" method="post" style="max-width: 400px; margin: 0 auto;">
        <div style="margin-bottom: 15px;">
            <input type="text" name="username" placeholder="Username" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" required>
        </div>
        <div style="margin-bottom: 15px;">
            <input type="email" name="email" placeholder="Email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" required>
        </div>
        <div style="margin-bottom: 15px;">
            <input type="password" name="password" placeholder="Password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" required>
        </div>
        <div style="margin-bottom: 15px;">
            <input type="password" name="confirm_password" placeholder="Confirm Password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" required>
        </div>
        <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Signup</button>
    </form>

</body>
</html>

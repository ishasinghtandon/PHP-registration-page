<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form action="register_process.php" method="post">
            <label>Name:</label>
            <input type="text" name="name" required><br>

            <label>Email:</label>
            <input type="email" name="email" required><br>

            <label>Password:</label>
            <input type="password" name="password" required><br>

            <label>Address:</label>
            <input type="text" name="address" required><br>

            <label>Phone:</label>
            <input type="text" name="phone" required><br>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

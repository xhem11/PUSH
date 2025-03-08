<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new users</title>
</head>
<body>
    
    <form action="add.php" method="POST">
        <input type="text" name="name" placeholder="Name..."><br><br>
        <input type="text" name="surname" placeholder="Surname..."><br><br>
        <input type="email" name="email" placeholder="Email..."><br><br>
        <input type="submit" name="submit" placeholder="Add new user"><br><br>
    </form>

    <h2><a href="dashboard.php">Go to Dashboard</a></h2>

</body>
</html>
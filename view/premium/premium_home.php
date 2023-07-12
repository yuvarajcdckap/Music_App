<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['user'])) : ?>
        <p>Hello! <?php echo $_SESSION['user'] ?></p>
    <?php endif; ?>
    <h1>welcome back premium users</h1>
    <a href="/view/logout.php">Log out</a>
</body>

</html>
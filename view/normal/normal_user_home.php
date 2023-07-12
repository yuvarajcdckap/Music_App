<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .songImg {
            height: 100px;
        }

        p {
            color: green;
        }
        a{
            color: white;
            text-decoration: none;
            background-color: red;
            padding: 5px;
            border-radius: 5px;
            height: 35px;
            width: 100px;
        }
    </style>
</head>

<body>
    <?php if (isset($_SESSION['user'])) : ?>
        <p>Hello! <?php echo $_SESSION['user'] ?></p>
    <?php endif; ?>

    <?php if (isset($_SESSION['user'])) : ?>
        <a href="/view/logout.php">Log out</a>
    <?php endif; ?>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Song Name</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allSongs as $key => $song) : ?>
                <tr>
                    <td><?php echo $song->id ?></td>
                    <td><?php echo $song->name ?></td>
                    <td><img src="<?php echo $song->image_path ?>" class="songImg"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
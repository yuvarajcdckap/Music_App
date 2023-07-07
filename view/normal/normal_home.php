<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .songImg{
            height: 100px;
        }
    </style>
</head>
<body>
    <table class="table table-striped table-dark">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Song Name</th>
        <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($allSongs as $key => $song):?>
        <tr>
            <td><?php echo $song->id?></td>
            <td><?php echo $song->name ?></td>
            <td ><img src="<?php echo $song->image_path ?>" class="songImg"></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <style>
        body{
            margin:0;
            padding:0;
            background: blue;
        }
        .container{
            display: flex;
            gap: 10px;
        }
        table, th, td, tr {
            border: 1px solid black;
        } 
        table {
        border-collapse: collapse;
        }


        .userDetails {
            display: flex;
            gap: 20px;
        }
        .addSection{
            display: flex;
            gap: 20px;
        }
        .addSong{
           display: none;
        }
        .addArtist{
            display: none;
        }

        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="addSection">
            <div class="songAdd">
                <div>
                        <button name="submit" class="addsong">Add new songs</button>
                </div>
                <div class="addSong">
                    <form action="/addSongs" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Add New Song</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="song Name" name="song_name">
                            <input type="number" name="adminId" class="form-control" id="formGroupExampleInput" value="<?php echo $adminId; ?>"  hidden />
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Song Path</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="song source" name="src">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">song Image</label>
                            <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="song image" name="image">
                        </div>
                        <button type="submit">submit</submit>
                    </form>
                </div>
            </div>


            <div class="artistAdd">
                <div>
                        <button  name="submit" class="addartist">Add new artist</button>
                </div>
                <div class="addArtist">

                    <form action="/addArtist" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Artist name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Artist name" name='artistName'>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Artist image</label>
                            <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="Artist image" name="images" multiple="multiple">
                        </div>
                        <input type="number" name="adminId" class="form-control" id="formGroupExampleInput" value="<?php echo $adminId; ?>"  hidden />
                        <button type="submit">submit</submit>
                    </form>
                </div>
            </div>
        </div>

        <div class="userDetails">
            <div>
                <table>
                    <tr>
                        <th>
                            <h3>Premium users</h3>
                        </th>
                    </tr>
                    <?php foreach ($allUsers as $key => $user) : ?>
                        <?php if ($user->is_admin == 0 && $user->is_premium == 1) : ?>
                            <tr>
                                <td><?php echo $user->user_name; ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </table>
            </div>
            <div>
                <table>
                    <tr>
                        <th>
                            <h3>Normal users</h3>
                        </th>
                    </tr>
                    <?php foreach ($allUsers as $key => $user) : ?>
                        <?php if ($user->is_admin == 0 && $user->is_premium == 0) : ?>
                            <tr>
                                <td><?php echo $user->user_name; ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <script src="view/admin/admin.js"></script>
</body>

</html>
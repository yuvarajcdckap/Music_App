<?php

require 'sql/connection.php';


class projectModel extends DB
{
    //check the user exist or not in our database//

    public function login($data)
    {
        $userName = $data['user_name'];
        $password = $data['password'];

        if ($userName && $password) {
            $sql = $this->db->query("SELECT * FROM users WHERE user_name = '$userName' AND password = '$password'");
            $user = $sql->fetchAll(PDO::FETCH_OBJ);
            if(count($user)){
                return $user;
            }
        } 
        else {
            $_SESSION['invaild details'] = 'invaild details';
            require "login.php";
        }
    
    }

    //here we can fetch the normal and premium user for show in the admin page //
    public function getAllUsers()
    {
        $sql = $this->db->query("SELECT * FROM users");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    //insert a song details into the song table//

    public function addSongs($data, $files)
    {
        $song_name = $data['song_name'];
        $adminId = $data['adminId'];
        $song_path = $data['src'];
        $artistId = $data['artistId'];

        $imagePath = "songImages/" . $files['image']['name'];
        move_uploaded_file($files["image"]["tmp_name"], $imagePath);
        $this->db->query("INSERT INTO songs_table (name,admin_id,artist_id,song_path,image_path) VALUES ('$song_name','$adminId','$artistId','$song_path','$imagePath')");
        echo"song successfully uploaded";
        header("view/admin/admin_home.php");
    }

    //insert a artist details into the artist table//

    public function addArtist($data, $files)
    {
        $artist_name = $data['artistName'];
        $adminId = $data['adminId'];

        $imagePath = "artistImage/" . $files['images']['name'];
        $tmpPath = $files["images"]["tmp_name"];
        move_uploaded_file($tmpPath, $imagePath);
        $this->db->query("INSERT INTO artist_table (name,admin_id,image_path) VALUES ('$artist_name','$adminId','$imagePath')");
    }
    //here we fetch all the songs
    public function getAllSongs()
    {
        $stmt = $this->db->query("SELECT * FROM songs_table");
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return  $data;
    }
    public function getAllArtist(){
        $stmt = $this->db->query("SELECT * FROM `artist_table`");
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}

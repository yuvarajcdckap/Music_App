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
            return $sql->fetchAll(PDO::FETCH_OBJ);
            
        }
        else{
            $_SESSION['invaild details'] = 'invaild details';
            require "/";
        }
    
    }

    //here we can fetch the normal and premium user for show in the admin page //
    public function getAllUsers(){
        $sql = $this->db->query("SELECT * FROM users");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    //insert a song details into the song table//

    public function addSongs($data,$files){
        $song_name = $data['song_name'];
        $adminId = $data['adminId'];
        $song_path = $data['src'];

        $imagePath = "songImages/".$files['image']['name'];
        move_uploaded_file($files["image"]["tmp_name"],$imagePath);
        $this->db->query("INSERT INTO songs_table (name,admin_id,song_path,image_path) VALUES ('$song_name','$adminId','$song_path','$imagePath')");

    }

        //insert a artist details into the artist table//

    public function addArtist($data,$files){
        $artist_name = $data['artistName'];
        $adminId = $data['adminId'];

        $imagePath = "artistImage/".$files['images']['name'];
        $tmpPath = $files["images"]["tmp_name"];
        move_uploaded_file($tmpPath,$imagePath);
        $this->db->query("INSERT INTO artist_table (name,admin_id,image_path) VALUES ('$artist_name','$adminId','$imagePath')");
    }
       
    public function getAllSongs(){
        $stmt = $this->db->query("SELECT * FROM songs_table");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

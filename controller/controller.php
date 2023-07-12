<?php

require 'model/model.php';
class projectController
{
    private $projectModel;

    public function __construct()
    {
        $this->projectModel = new projectModel();
    }

    public function view()
    {
        require 'login.php';
    }

    public function login()
    {
        $data = $this->projectModel->login($_POST);
                 
            $userName = $data[0]->user_name;
            // $userId = $data[0]->id;
            $_SESSION['user'] = $userName;
        if($data){
            //this condition for normal user login
            if($data[0]->is_premium == 0 && $data[0]->is_admin == 0){
            $allSongs = $this->projectModel->getAllSongs();
            $allArtist = $this->projectModel->getAllArtist();
                // print_r($allArtist[0]->name);
            require 'view/normal/normal_user_home.php';
            }
            //this condition for admin login
            else if($data[0]->is_admin == 1){
                
               $adminId = $data[0]->id;
               $allUsers = $this->projectModel->getAllUsers();
               $allSongs = $this->projectModel->getAllSongs();
               $allArtist = $this->projectModel->getAllArtist();
 
               require "view/admin/admin_home.php";
            }
            //this condition for premium user login
            else if($data[0]->is_premium == 1){
                require "view/premium/premium_home.php";
            }
            else{
                header( "view/logout.php");
            }
        }
    }


   public function addSongs(){
        $this->projectModel->addSongs($_POST,$_FILES);

   }
   public function addArtist(){
    $this->projectModel->addArtist($_POST,$_FILES);
   }

   public function normalUserLogin(){
    $allSongs = $this->projectModel->getAllSongs();

    require "view/normal/normal_user_home.php";
   }
}

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
        if($data){
            if($data[0]->is_premium == 0 && $data[0]->is_admin == 0){
            $allSongs = $this->projectModel->getAllSongs();
            require 'view/normal/normal_home.php';
            }
            else if($data[0]->is_admin == 1){
               $allUsers = $this->projectModel->getAllUsers();
               $adminId = $data[0]->id;
               require "view/admin/admin_home.php";
            }
            else if($data[0]->is_premium == 1){
                require "view/premium/premiun_home.php";
            }
            else{
                header("location:/");
            }
        }
    }

   public function addSongs(){
        $this->projectModel->addSongs($_POST,$_FILES);
   }
   public function addArtist(){
    $this->projectModel->addArtist($_POST,$_FILES);
   }
}

<?php

require_once "AppController.php";
require_once "Repository//UserRepository.php";
require_once "Repository//RecipieRepository.php";


class ProfileController extends AppController{

    public function show(){
        
        $repo1 = new UserRepository();

        $repo = new RecipieRepository();
        
        $arr = array();

        $images = $repo->getAllImage();
        
        for($i = 0; $i < 3; $i++){

            $random = rand(0, count($images) - 1);

            array_push($arr, $images[$random]);

        }

        if($this->isGet());{
        
            $rec = $repo1->getUser($_GET['email']);           

            $this->render('profile', ['rec' => $rec, 'images' => $arr]);

        }

        

    }

}

?>
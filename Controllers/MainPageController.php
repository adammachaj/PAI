<?php

require_once "AppController.php";
require_once "Repository//RecipieRepository.php";


class MainPageController extends AppController{

    public function show(){

        $repo = new RecipieRepository();
        
        $arr = array();

        $images = $repo->getAllImage();
        
        for($i = 0; $i < 6; $i++){

            $random = rand(0, count($images) - 1);

            array_push($arr, $images[$random]);

        }

        $this->render('main_panel', ['images' => $arr]);        
    }

}

?>
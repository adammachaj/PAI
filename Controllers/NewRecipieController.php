<?php

require_once "AppController.php";

class NewRecipieController extends AppController{

    public function show(){

        $this->render('new_recipie');

    }

    public function upload(){

        if($this->isPost())
        {
            $path = basename($_POST['image_path']);
            $repo = new RecipieRepository;
            $repo->save($_POST['desc'], $path, $_POST['recipie_name'], $_POST['id']);
        }

        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}?page=main_page");
        return;
    }



}

?>
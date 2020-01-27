<?php

require_once "AppController.php";

class RecipieController extends AppController{

    public function show(){

        $repo = new RecipieRepository();

        if($this->isGet());{
        
            
            $rec = $repo->getRecipie($_GET['id']);           

            $this->render('recipie', ['rec' => $rec]);

        }

    }

}

?>
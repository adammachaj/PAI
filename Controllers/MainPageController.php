<?php

require_once "AppController.php";

class MainPageController extends AppController{

    public function show(){

        $this->render('main_panel');

    }

}

?>
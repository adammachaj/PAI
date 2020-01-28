<?php 
require_once "AppController.php";
require_once "Repository\UserRepository.php";
require_once "Models\User.php";

class SecurityController extends AppController {

    public function login()
    {
        if ($this->isPost()) {
            $email = $_POST['email'];
            $repo = new UserRepository;
            $user = $repo->getUser($email);
            $password = $_POST['password'];
            
            // die(var_dump($user));

            if($user == NULL){

                $repo->save($email, "Name", $password, 2);
                $user = $repo->getUser($email);

            }

            if ($user->getEmail() !== $email) {
                $this->render('index', ['messages' => ['User with this email not exist!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('index', ['messages' => ['Wrong password!']]);
                return;
            }

            $_SESSION["id"] = $user->getID();
            $_SESSION["role"] = $user->getRole();
            $_SESSION["email"] = $user->getEmail();

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=main_page");
            return;
        }



        $this->render("index");
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('index', ['messages' => ['You have been successfully logged out!']]);
    }
}
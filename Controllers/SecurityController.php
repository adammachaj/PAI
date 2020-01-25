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

            if ($user->getEmail() !== $email) {
                $this->render('login', ['messages' => ['User with this email not exist!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

            $_SESSION["id"] = $user->getEmail();
            $_SESSION["role"] = $user->getRole();

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=main_page");
            return;
        }

        $this->render("index");
    }
}
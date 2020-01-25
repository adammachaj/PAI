<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//User.php';



class UserRepository extends Repository {

    public function getUser(string $email): ?User 
    {

        // die(var_dump($this->database->connect()));

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['nickname'],
            $user['user_id'],
            $this->getRole($user['Role_ID'])
        );
    }

    public function getUsers(): array {
        // $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE email != :email;
        ');
        $stmt->bindParam(':email', $_SESSION['id'], PDO::PARAM_STR);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    private function getRole(int $id){
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM role WHERE Role_ID = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $role = $stmt->fetch(PDO::FETCH_ASSOC);  
        
        return $role['Type'];
    }
}
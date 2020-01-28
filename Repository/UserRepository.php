<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//User.php';



class UserRepository extends Repository {

    public function getUser(string $email): ?User 
    {

        $pdo = $this->database->connect();

        try{
                // die(var_dump($this->database->connect()));
                
                $pdo->beginTransaction();

                $stmt = $pdo->prepare('
                    SELECT * FROM user WHERE email = :email
                ');
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->execute();

                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if($user == false) {
                    return null;
                }

                $pdo->commit();

                return new User(
                    $user['email'],
                    $user['password'],
                    $user['nickname'],
                    $user['User_ID'],
                    $this->getRole($user['Role_ID'])
                );
            }

        //tranzakcje
        
        catch(Exception $e){

            $pdo->rollback();

        }
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

    public function save(string $email, string $nickname, string $password, int $roleid){

        $pdo = $this->database->connect();

        $stmt = $pdo->prepare('
            insert into user (email, nickname, password, Role_ID) values(:email, :nickname, :password, :roleid)
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':nickname', $nickname, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':roleid', $roleid, PDO::PARAM_INT);
        $stmt->execute();

        
    }
}
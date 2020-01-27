<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//Recipie.php';


class RecipieRepository extends Repository {

    public function getRecipie(int $id): ?Recipie
    {

        $pdo = $this->database->connect();
            

            $stmt = $pdo->prepare('
                SELECT * FROM recipie WHERE Recipie_ID = :id
            ');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $recipie = $stmt->fetch(PDO::FETCH_ASSOC);

            if($recipie == false) {
                return null;
            }

            return new Recipie(
                $recipie['Recipie_ID'],
                $recipie['image'],
                $recipie['favourites'],
                $recipie['description'],
                $recipie['recipie_name']
            );



    }

    public function getAllImage(){

        $pdo = $this->database->connect();

        $stmt = $pdo->prepare('
            SELECT Recipie_ID, image FROM recipie
        ');
        $stmt->execute();

        $recipie = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $recipie;

    }

    public function save(string $description, string $image, string $name, int $id){

        $pdo = $this->database->connect();

        $stmt = $pdo->prepare('
            insert into recipie (description, image, User_ID, recipie_name) values(:description, :image, :id,  :name)
        ');

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);

        $stmt->execute();

        
    }

}

?>
<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//Repository.php';


class RecipieRepository extends Repository {

    public function getRecipie(int $id): ?Recipie
    {

        $pdo = $this->database->connect();


        try{
            // die(var_dump($this->database->connect()));
            
            $pdo->beginTransaction();

            $stmt = $pdo->prepare('
                SELECT * FROM recipie WHERE Recipie_ID = :id
            ');
            $stmt->bindParam(':Recipie_ID', $id, PDO::PARAM_STR);
            $stmt->execute();

            $recipie = $stmt->fetch(PDO::FETCH_ASSOC);

            if($recipie == false) {
                return null;
            }

            $pdo->commit();

            return new User(
                $recipie['Recipie_ID'],
                $recipie['image'],
                $recipie['description'],
                $recipie['favourites'],
            );
        }

        //tranzakcje

        catch(Exception $e){

            $pdo->rollback();

        }
}

}

?>
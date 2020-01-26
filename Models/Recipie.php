<?php

class Recipie{

    private $image;
    private $id;
    private $description;
    private $favourites;

    public function __construct(string $image, int $favourites, string $description, int $id)
    {
        $this->image = $image;
        $this->if = $id;
        $this->favourites = $favourites;
        $this->description = $description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getFavourites(): int
    {
        return $this->favourites;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

}

?>
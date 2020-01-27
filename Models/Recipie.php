<?php

class Recipie{

    private $id;
    private $image;
    private $description;
    private $favourites;
    private $name;

    public function __construct(int $id, string $image, int $favourites, string $description, string $name)
    {
        $this->id = $id;
        $this->image = $image;
        $this->favourites = $favourites;
        $this->description = $description;
        $this->name = $name;

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

    public function getName(): string
    {
        return $this->name;
    }

}

?>
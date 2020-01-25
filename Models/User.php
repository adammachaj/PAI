<?php

class User{

    private $email;
    private $id;
    private $password;
    private $nickname;
    private $role;

    public function __construct(
        string $email,
        string $password,
        string $nickname,
        int $id = null,
        string $role = null
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->nickname = $nickname;
        $this->id = $id;
        $this->role = $role;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function getRole(): string
    {
        return $this->role;
    }

    public function getName(): string
    {
        return $this->nickname;
    }

    public function setRole(string $role)
    {
        $this->role = $role;
    }

}

?>
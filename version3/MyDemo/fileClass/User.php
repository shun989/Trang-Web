<?php

class User
{

    private int $id;
    private string $userName;
    private string $password;

    public function __construct(
        string $userName,
        string $password
    )
    {
        $this->userName = $userName;
        $this->password = $password;

    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

}
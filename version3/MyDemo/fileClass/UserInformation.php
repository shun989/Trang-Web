<?php


class UserInformation
{
    private int $id;
    private string $name;
    private string $dob;
    private string $address;
    private string $email;
    private string $phone;
    private string $idCard;

    public function __construct($name,$dob,$address,$email,$phone,$idCard)
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->idCard = $idCard;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getDob(): string
    {
        return $this->dob;
    }

    public function setDob($dob): void
    {
        $this->dob = $dob;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function getIdCard(): string
    {
        return $this->idCard;
    }

    public function setIdCard($idCard): void
    {
        $this->idCard = $idCard;
    }


}
<?php


class UserManager
{
    protected string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    function loadDataFile()
    {
        $dataFile = file_get_contents($this->filePath);
        return json_decode($dataFile);
    }

    function getAll(): array
    {
        $data = $this->loadDataFile();
        $users = [];
        foreach ($data as $item) {
            $user = new User(
                $item->userName,
                $item->password
            );
            $user->setId($item->id);
            array_push($users, $user);
        }

        return $users;
    }

    function add($data)
    {
        $dataFile = $this->loadDataFile();
        $lastUser = $dataFile[count($dataFile) - 1];

        $data["id"] = $lastUser->id + 1;

        array_push($dataFile, $data);
        $this->saveDataToFile($dataFile);
    }

    function saveDataToFile($data)
    {

        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }


    public function getUserLogIn($userName, $password){
        $data = $this->loadDataFile();

                $data->userName = $userName;
                $data->password = $password;

    }

}
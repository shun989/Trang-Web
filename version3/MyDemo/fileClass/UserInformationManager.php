<?php


class UserInformationManager
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function loadDataFile()
    {
        $dataFile = file_get_contents($this->filePath);
        return json_decode($dataFile);
    }

    public function getAll(): array
    {
        $data = $this->loadDataFile();
        $usersInformation = [];
        foreach ($data as $item) {
            $userInformation = new UserInformation(
                $item->name,
                $item->dob,
                $item->address,
                $item->email,
                $item->phone,
                $item->idCard
            );
            $userInformation->setId($item->id);
            array_push($usersInformation, $userInformation);
        }

        return $usersInformation;
    }

    public function add($data)
    {
        $dataFile = $this->loadDataFile();
        $lastUser = $dataFile[count($dataFile) - 1];
        $data["id"] = $lastUser->id + 1;
        array_push($dataFile, $data);
        $this->saveDataToFile($dataFile);
    }

    public function saveDataToFile($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }

    public function remove($index)
    {
        $dataFile = $this->loadDataFile();
        array_splice($dataFile, $index, 1);
        $this->saveDataToFile($dataFile);
    }

    public function getUserInformationById($id)
    {
        $data = $this->loadDataFile();
        foreach ($data as $item) {
            if ($id == $_GET["id"]) {
                $userInformation = new UserInformation(
                    $item->name,
                    $item->dob,
                    $item->address,
                    $item->email,
                    $item->phone,
                    $item->idCard);
                $userInformation->setId($item->id);
                return $userInformation;
            }
        }
    }
}
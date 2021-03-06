<?php


class UserManager
{
    protected string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function loadDataFile()
    {
        $dataFile = file_get_contents($this->filePath);
        return json_decode($dataFile);
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

    public function checkAdd($acc)
    {
        $user = $this->loadDataFile();
        foreach ($user as $item){
            if ($acc == $item->userName){
                return false;
            }
        }
        return true;
    }

    public function checkUser($name, $pass)
    {
        $data = $this->loadDataFile();
        foreach ($data as $item) {
            if ($name == $item->userName) {
                if ($pass == $item->password) {
                    $_SESSION["userName"] = $item->userName;
                        return true;
                } else {
                    return "Sai mật khẩu !";
                }
            }
        }
        return "Tài khoản không chính xác !";
    }

}
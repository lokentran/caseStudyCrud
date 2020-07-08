<?php

class UserManager {
    protected $pathFile;

    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    function getDataToFile() {
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson, true);
    }

    function saveDataToFile($array) {
        $dataJson = json_encode($array);
        file_put_contents($this->pathFile,$dataJson);
    }

    function add($user) {
        $data = $this->getDataToFile();
        $arr = [
            'id' => $user->getId(),
            'name'=> $user->getName(),
            'address' => $user->getAddress()
        ];
        array_push($data,$arr);
        $this->saveDataToFile($data);
    }

    public function getAll() {
        $data = $this->getDataToFile();
        $arr = [];
        foreach ($data as $item) {
            $user = new User($item['id'], $item['name'], $item['address']);
            array_push($arr, $user);
        }

        return $arr;
    }
}


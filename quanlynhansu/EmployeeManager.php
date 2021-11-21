<?php
class EmployeeManager {

    public function __construct()
    {
    }

    public function add($data){
        $dat= $this->loadData();
        array_push($dat,$data);
        $this->save($dat);
    }
    public static function save($data){
        $dat=json_encode($data);
        file_put_contents('data.json',$dat);
    }

    public static function loadData(){
        $data=file_get_contents('data.json');
        return json_decode($data,true);
    }

}
?>

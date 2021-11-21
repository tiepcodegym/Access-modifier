<?php
include_once 'user.php';
function saveData($data){
    $dataJson=json_encode($data);
    file_put_contents('data.json',$dataJson);
}
function loadData(){
    $dataOut=file_get_contents('data.json');
    return json_decode($dataOut,true);
}
function addUser($user){
    $data=loadData();
    array_push($data,$user);
    saveData($data);
}
function convertUser(){
    $data = loadData();
    $user= [];
    foreach ($data as $item){
        $user = new user($item['role'],$item['name'],$item['email']);
    }
}
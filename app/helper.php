<?php
function get(){

    $PDO = DB::connection('sqlite')->getPdo();
    $stmt = $PDO->prepare("SELECT * FROM s1 where id=?");
    $stmt->execute([9]);
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res;
}

function insert($array){
    // var_dump($array);
    // die();
    $PDO = DB::connection('sqlite')->getPdo();
    $sql = "INSERT INTO s1 (name, email, password) VALUES (?,?,?)";
    $stmt= $PDO->prepare($sql);
    // string implode($separator, $array);
    // implode(" ",$arr);

    $succ = $stmt->execute($array);
         if($succ)
         {
            return "true";
         }
         else
         {
            return "false";
         }
    }

function get_data(){
    $PDO = DB::connection('sqlite')->getPdo();
    $stmt = $PDO->prepare("SELECT * FROM s1");
    $stmt->execute([]);
    $res1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($res1);
}
<?php

function insert($array){
    $PDO = DB::connection('sqlite')->getPdo();
    $sql = "INSERT INTO helpModel (name,firstname,lastname, email, password) VALUES (?,?,?,?,?)";
    $stmt= $PDO->prepare($sql);

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

    function show(){
        $Pdo = DB::connection('sqlite')->getPdo();
        $stmt = $Pdo->prepare("select * from helpModel");
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($res);
        return $res;
    }


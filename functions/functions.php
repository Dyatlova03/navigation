<?php
  
    $mysqli = false;
    function connectDB(){
        global $mysqli;
        $mysqli = new mysqli("localhost", "root", "", "navigatorbase");
        $mysqli->query("SET NAMES 'utf8mb4'");
    }

    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }

    function getBlocks($limit){
        global $mysqli;
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        connectDB();
        $result = $mysqli->query("SELECT * FROM `block` LIMIT $limit");
        closeDB();
        return resultToArray ($result);
    }
    
  function resultToArray ($result){
        $array = array();
        while (($row = $result->fetch_assoc()) != false){
            $array[] = $row;
        }
        return $array;
    }
?>
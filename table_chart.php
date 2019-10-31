<?php
    //ตั้งค่าการเชื่อมต่อฐานข้อมูล
    $database_host             = 'localhost';
    $database_username         = 'root	';
    $database_password         = 'pbiservice';
    $database_name             = 'linac';
 
    $mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);
//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
    $mysqli->set_charset("utf8");
 
//กรณีมี Error เกิดขึ้น
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
        //เรียกข้อมูลจาก ตาราง pmtest 
        $get_data = $mysqli->query("SELECT * FROM pmtest");
        
        while($data = $get_data->fetch_assoc()){
            
            $result[] = $data;
        }
    echo 'connected' ;
?>
<?php

session_start();  
require_once("db_connected.php"); 

$mb = !empty($mb) ? "'$mb'" : "NULL";
$gun = $_POST['gun'];
$datepm = $_POST['datepm'];


    $sql_insert = "INSERT INTO pmtest (DatePM,MotorBrush,Gun) VALUES ('$datepm', $mb, $gun)";

    //รูปแบบการแสดงผลของภาษา php
    /*echo $datepm ;
    echo $mb;
    echo $gun; */
    print json_encode($datepm);
    printf ("\n %s %s \n", $mb, $gun);

    $result02 = $mysqli->query($sql_insert);
        if (!$result02){
            echo "<br>Insert Fail !!!!!<br>";
        }else{
            echo "<br>Insert Success /////<br>";
        }

/* close connection */
$mysqli->close();

echo "<hr>";
echo "<a href='rvh_linac03.php'>กลับไปหน้า PM Checklist</a>";
?>
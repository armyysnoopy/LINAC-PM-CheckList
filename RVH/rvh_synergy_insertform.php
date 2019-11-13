<?php
session_start();  
require_once("rvh_connectdb.php"); 

$adj_gantry_angle = !empty($adj_gantry_angle) ? "'$adj_gantry_angle'" : "NULL";

$datepm = $_POST['datepm'];
$gantry_angle_zero = $_POST['gantry_angle_zero'];
$gantry_angle = $_POST['gantry_angle'];
$gantry_motor = $_POST['gantry_motor'];
$gantry_pot = $_POST['gantry_pot'];
$gantry_clean = $_POST['gantry_clean'];

$datepm = $_POST['datepm'];
$gantry_angle_zero = $_POST['gantry_angle_zero'];
$gantry_angle = $_POST['gantry_angle'];
$datepm = $_POST['datepm'];
$gantry_angle_zero = $_POST['gantry_angle_zero'];
$gantry_angle = $_POST['gantry_angle'];



    $sql_insert = "INSERT INTO test_table_adj (datepm,gantry_angle_zero,gantry_angle) VALUES ('$datepm', '$gantry_angle_zero', '$gantry_angle')";

    //รูปแบบการแสดงผลของภาษา php
    /*echo $datepm ;
    echo $mb;
    echo $gun; */
    print json_encode($datepm);
    printf ("\n %s %s \n", $gantry_angle_zero, $gantry_angle);
    $result02 = $mysqli->query($sql_insert);
        if (!$result02){
            echo "<br>Insert Fail X<br>";
        }else{
            echo "<br>Insert Successful ! <br>";
        }

/* close connection */
$mysqli->close();
echo "<hr>";
echo "<a href='rvh_synergy_pm.php'>กลับไปหน้า PM Checklist</a>";
?>
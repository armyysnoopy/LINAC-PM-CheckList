<?php
//ตั้งค่าการเชื่อมต่อฐานข้อมูล
    $database_host             = 'localhost';
    $database_username         = 'root';
    $database_password         = ''; //set password at privileges on phpmyadmin
    $database_name             = 'rvh';
    $data ;
    $mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);
//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
    $mysqli->set_charset("utf8");
 
//กรณีมี Error เกิดขึ้น
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    
//เรียกข้อมูลจาก ตาราง synergy_151792 
    $get_data = $mysqli->query("SELECT * FROM synergy_151792 WHERE date_pm = '2019-11-02'");
        while($data = $get_data->fetch_assoc()){
            $result[] = $data;
        }
          
    //print json_encode($result[0]);    
    //printf ("%s %s \n", $data["Input_to_stabilizer_L1"], $data["Input_to_stabilizer_L2"]);
        
/* close connection */
    $mysqli->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Synergy RVH | Service Engineer</title>
        <link rel="stylesheet" href="_css/html5structure.css" type="text/css">
        <meta charset="utf-8">
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            table tr:nth-child(even) {
                background-color: #eee;
            }
            table tr:nth-child(odd) {
                background-color: #fff;
            }
            table th {
                background-color: darkblue;
                color: white;
            }
          </style>
    </head>
    <body>
    <table style="width:100%" align="center">
        <caption><h5>PM CHECKLIST : Synergy RVH</h5></caption>
    <!-- Title  -->  
        <tr align="center">
            <th>Catalogue</th>
            <th>Description</th>
            <th>Specification</th>
            <th>Measured</th>
            <th>Investigate/Adjustment</th>
            <th>Result</th>
        </tr>         
    <!-- Gantry -->  
        <tr>
        <td rowspan="2" style="text-align:center"><a href="rvh_synergy_gantry.php" target="_blank">Gantry</td>
            <td>Gantry angle zero</td>
            <td>น้อยกว่าเท่ากับ 1.0 องศา</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gantry_angle_zero'];
                        }
                    ?></td>
            <td></td>          
            <td>Result</td> 
        </tr>
        <tr>
            <td>Gantry angle</td>
            <td>Gantry angle at 0, 90, 180, 270</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gantry_angle'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
    <!-- Collimator head -->    
        <tr>
            <td rowspan="7" style="text-align:center"><a href="rvh_synergy_collimator.php" target="_blank">Collimator head</td>
            <td>Collimator angle</td>
            <td>1.0 องศา</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['collimator_angle'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2" >Crosswire screen</td>
            <td>1.0 องศา (SSD 100)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['crosswire_screen_ssd'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2mm (on floor)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['crosswire_screen_floor'];
                        }
                    ?></td>
            <td></td>  
            <td></td>     
        </tr>
        <tr>
            <td>Distance meter</td>
            <td>1mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['distance_meter'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Laser ที่ Isocenter</td>
            <td>1mm (Optional check with ball bearing)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['laser_isocenter'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Field size</td>
            <td>2mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['field_size'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan ="2"><a href="rvh_synergy_cameracond.php" target="_blank">The Camera Cond (i2217, P101 CCV) for MLCi & Beam Modulator only *Not for Agility Head*</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['camera_cond'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
    <!-- Precise Table -->
        <tr>
            <td rowspan="5" style="text-align:center"><a href="rvh_synergy_table.php" target="_blank">Precise Table</td>
            <td>Table height readout error</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_height'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Table lateral readout error</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_lateral'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Table long readout error</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_long'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Check Table Isocentric</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['check_tb_isocentric'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Motor Brush</td>
            <td>4 mm (Recommend to replace)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['motor_brush'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
    <!-- Dielectric Gas System -->
        <tr>
            <td style="text-align:center"><a href="rvh_synergy_dielectricgas.php" target="_blank">Dielectric Gas System</td>
            <td>Pressure system SF6 check</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['pressure_sys_sf6'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
    <!-- Main Supply -->
        <tr>
            <td rowspan="6" style="text-align:center">Main Supply</td>
            <td rowspan="3"><a href="rvh_synergy_ip_stblz.php" target="_blank">Input to Stabilizer</a></td>
            <td rowspan="3">Functional</td>
            <td>L1 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['ip_stabilizer_l1'];
                        }
                    ?>  Vac</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>L2 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['ip_stabilizer_l2'];
                        }
                    ?>  Vac</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>L3 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['ip_stabilizer_l3'];
                        }
                    ?>   Vac</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="3" ><a href="rvh_synergy_op_stblz.php" target="_blank">Output to Stabilizer</td>
            <td rowspan="3">Functional</td>
            <td>L1 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['op_stabilizer_l1'];
                        }
                    ?>  Vac</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>L2 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['op_stabilizer_l2'];
                        }
                    ?>  Vac</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>L3 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['op_stabilizer_l3'];
                        }
                    ?>   Vac</td>
            <td></td>
            <td></td>
        </tr>
    <!-- Thyratron Check -->
        <tr>
            <td rowspan="5" style="text-align:center"><a href="rvh_synergy_thyratron.php" target="_blank">Thyratron Check</td>
            <td>Replenisher</td>
            <td>Hydrogen Heater voltage (5.2 to 5.8 Vac)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_replenisher'];
                        }
                    ?> Vac</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Heater</td>
            <td>Cathode heater voltage (6.0 to 6.6 Vac)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_heater'];
                        }
                    ?> Vac</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Grid1</td>
            <td>Grid1 voltage (16.5 to 19.5 Vdc)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_grid1'];
                        }
                    ?> Vdc</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2">Grid2</td>
            <td rowspan="2">Grid2 bias voltage (-120 to -135 Vdc)(-400 Hz)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_grid2_vdc'];
                        }
                    ?> Vdc</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_grid2_hz'];
                        }
                    ?> Hz</td>
            <td></td>
            <td></td>
        </tr>
    <!-- Gun I Mon 6MV-->
        <tr>
            <td style="text-align:center"><a href="rvh_synergy_gun.php" target="_blank">Gun I Mon 6MV</td>
            <td>(i217, p4)</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gun_i_mon'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
    <!-- Chiller -->
        <tr>
            <td rowspan="2" style="text-align:center"><a href="rvh_synergy_chiller.php" target="_blank">Chiller</td>
            <td rowspan="2">Pressure water</td>
            <td rowspan="2">Functional</td>
            <td>Input <?php
                    foreach($result as $result_tb){
                            echo $result_tb['chiller_ps_water_ip'];
                        }
                    ?> Bar</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Output <?php
                    foreach($result as $result_tb){
                            echo $result_tb['chiller_ps_water_op'];
                        }
                    ?> Bar</td>
            <td></td>
            <td></td>
        </tr>
    <!-- iView -->
        <tr>
            <td rowspan="2" style="text-align:center"><a href="rvh_synergy_iview.php" target="_blank">iView</td>
            <td>Imaging and Treatment coordinate coincidence</td>
            <td>1mm (KV Flex map)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['iview_kv_flex_map'];
                        }
                    ?>mm</td>
            <td>ex. Run ball bearing</td>
            <td></td>
        </tr>
        <tr>
            <td>Image Scalling (HorizMMPixel)</td>
            <td>1mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['iview_image_scaling'];
                        }
                    ?>mm</td>
            <td>ex. Recalibrate image scalling</td>
            <td></td>
        </tr>
    <!-- XVI -->
        <tr>
            <td style="text-align:center"><a href="rvh_synergy_xvi.php" target="_blank">XVI</td>
            <td>Imaging and Treatment coordinate isocenter</td>
            <td>1mm (with image registration)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['xvi_image_registration'];
                        }
                    ?></td>
            <td></td>
            <td></td>
        </tr>
    <!-- Linac Hour -->
        <tr>
            <td rowspan="2" style="text-align:center"><a href="rvh_synergy_linachour.php" target="_blank">Linac Hour</td>
            <td rowspan="2">(LT i275, p4)(HT i276, p4)</td>
            <td rowspan="2">Baseline</td>
            <td>LT <?php
                    foreach($result as $result_tb){
                            echo $result_tb['linac_hour_lt'];
                        }
                    ?> </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>HT <?php
                    foreach($result as $result_tb){
                            echo $result_tb['linac_hour_ht'];
                        }
                    ?> </td>
            <td></td>
            <td></td>
        </tr>
        </table>
    </body>
</html>
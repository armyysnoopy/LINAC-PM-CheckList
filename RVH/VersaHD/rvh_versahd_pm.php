<?php
    require 'rvh_versahd_connectdb.php';
    //เรียกข้อมูลจาก ตาราง versahd_4678 
    $get_data = $mysqli->query("SELECT * FROM versahd_4678 WHERE date_pm = '2019-11-15'");
        while($data = $get_data->fetch_assoc()){
            $result[] = $data;
        }
    /* close connection */
    $mysqli->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>VersaHD RVH | Service Engineer</title>
        <!-- <link rel="stylesheet" href="_css/html5structure.css" type="text/css"> -->
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
    <!-- Select Date PM Checklist -->
        <form name='form_rvh_versahd' method='post' action='rvh_versahd_insertform.php'>
        <table style="width:100%" align="center">
        <caption><h3>PM CHECKLIST : VersaHD RVH</h3></caption>
        <caption><h5>Select Date PM Checklist . . . <input type='date' id='date_pm' name='date_pm'></h5></caption>
    <!-- Title  -->  
        <tr align="center">
            <th>Catalogue</th>
            <th>Description</th>
            <th>Specification</th>
            <th>Last Measured</th>
            <th>Measured</th>
            <th>Investigate/Adjustment</th>
        </tr>         
    <!-- Gantry -->  
        <tr>
            <td rowspan="5" style="text-align:center"><a href="rvh_versahd_gantry.php" target="_blank">(1) Gantry</td>
            <td>Gantry angle zero</td>
            <td>น้อยกว่าเท่ากับ 1.0 องศา</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gantry_angle_zero'];
                        }
                    ?></td>
            <td><input type='text' name="gantry_angle_zero"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Gantry angle</td>
            <td>Gantry angle at 0, 90, 180, 270</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gantry_angle'];
                        }
                    ?></td>
            <td><input type='text' name="gantry_angle"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบการทำงาน Motor และสายพาน</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gantry_motor'];
                        }
                    ?></td>
            <td><input type='text' name="gantry_motor"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสภาพ POT. และ Timing Belt</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gantry_pot'];
                        }
                    ?></td>
            <td><input type='text' name="gantry_pot"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ทำความสะอาด/ปรับแต่ง</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gantry_clean'];
                        }
                    ?></td>
            <td><input type='text' name="gantry_clean"/></td>          
            <td></td>        </tr>
    <!-- Collimator head -->    
        <tr>
            <td rowspan="10" style="text-align:center"><a href="rvh_versahd_collimator.php" target="_blank">(2) Collimator head</td>
            <td>Collimator angle</td>
            <td>1.0 องศา</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['collimator_angle'];
                        }
                    ?></td>
            <td><input type='text' name="collimator_angle"/></td>          
            <td></td>        </tr>
        <tr>
            <td rowspan="2" >Crosswire screen</td>
            <td>1.0 องศา (SSD 100)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['crosswire_screen_ssd'];
                        }
                    ?></td>
            <td><input type='text' name="crosswire_screen_ssd"/></td>          
            <td></td>        </tr>
        <tr>
            <td>2mm (on floor)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['crosswire_screen_floor'];
                        }
                    ?></td>
            <td><input type='text' name="crosswire_screen_floor"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Distance meter</td>
            <td>1mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['distance_meter'];
                        }
                    ?></td>
            <td><input type='text' name="distance_meter"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Laser ที่ Isocenter</td>
            <td>1mm (Optional check with ball bearing)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['laser_isocenter'];
                        }
                    ?></td>
            <td><input type='text' name="laser_isocenter"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบการทำงาน Wedge และหล่อลื่น</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['collimator_wedge'];
                        }
                    ?></td>
            <td><input type='text' name="collimator_wedge"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบการเคลื่อนที่ชิ้นส่วนของกลไก</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['collimator_movement'];
                        }
                    ?></td>
            <td><input type='text' name="collimator_movement"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Field size</td>
            <td>น้อยกว่าเท่ากับ 2mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['field_size'];
                        }
                    ?></td>
            <td><input type='text' name="field_size"/></td>          
            <td></td>        </tr>
        <tr>
            <td colspan ="2"><a href="rvh_versahd_cameracond.php" target="_blank">The Camera Cond (i2217, P101 CCV) for MLCi & Beam Modulator only *Not for Agility Head*</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['camera_cond'];
                        }
                    ?></td>
            <td><input type='text' name="camera_cond"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Leaves run cycle test</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['collimator_leaves'];
                        }
                    ?></td>
            <td><input type='text' name="collimator_leaves"/></td>          
            <td></td>        </tr>
    <!-- Precise Table -->
        <tr>
            <td rowspan="9" style="text-align:center"><a href="rvh_versahd_table.php" target="_blank">(3) Precise Table</td>
            <td>Table height readout error</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_height'];
                        }
                    ?></td>
            <td><input type='text' name="tb_height"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Table lateral readout error</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_lateral'];
                        }
                    ?></td>
            <td><input type='text' name="tb_lateral"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Table long readout error</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_long'];
                        }
                    ?></td>
            <td><input type='text' name="tb_long"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Check Table Isocentric</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['check_tb_isocentric'];
                        }
                    ?></td>
            <td><input type='text' name="check_tb_isocentric"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบสภาพ Mechanics</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_mech'];
                        }
                    ?></td>
            <td><input type='text' name="tb_mech"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบ COntrol Panel</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_ctrl_panel'];
                        }
                    ?></td>
            <td><input type='text' name="tb_ctrl_panel"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบ Button, POT.</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_pot'];
                        }
                    ?></td>
            <td><input type='text' name="tb_pot"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Motor Brush</td>
            <td>4 mm (Recommend to replace)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['motor_brush'];
                        }
                    ?></td>
            <td><input type='text' name="motor_brush"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ทำความสะอาด และอัดจารบี</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['tb_clean'];
                        }
                    ?></td>
            <td><input type='text' name="tb_clean"/></td>          
            <td></td>        </tr>
    <!-- Hand Held Controller -->
        <tr>
            <td rowspan='3' style="text-align:center">(4) Hand Held Controller</td>
            <td>Function check button and Potentiometers</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['hh_func_check'];
                        }
                    ?></td>
            <td><input type='text' name="hh_func_check"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบสภาพของสายไฟ</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['hh_cable'];
                        }
                    ?></td>
            <td><input type='text' name="hh_cable"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ทำความสะอาด และปรับแต่ง</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['hh_clean'];
                        }
                    ?></td>
            <td><input type='text' name="hh_clean"/></td>          
            <td></td>        </tr>
    <!-- Accessory check -->
        <tr>
            <td rowspan='2' style="text-align:center">(5) Accessory check</td>
            <td>Applicator code</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['acc_applicator'];
                        }
                    ?></td>
            <td><input type='text' name="acc_applicator"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Shadow tray code</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['acc_shadow_tray'];
                        }
                    ?></td>
            <td><input type='text' name="acc_shadow_tray"/></td>          
            <td></td>        </tr>
    <!-- Dielectric Gas System -->
        <tr>
            <td rowspan='2' style="text-align:center"><a href="rvh_versahd_dielectricgas.php" target="_blank">(6) Dielectric Gas System</td>
            <td>Pressure system SF6 check</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['pressure_sys_sf6'];
                        }
                    ?></td>
            <td><input type='text' name="pressure_sys_sf6"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Discharge และ Refill Gas</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['discharge_refillgas'];
                        }
                    ?></td>
            <td><input type='text' name="discharge_refillgas"/></td>          
            <td></td>        </tr>
    <!-- Turbo Pump -->
        <tr>
            <td style="text-align:center">(7) Turbo Pump</td>
            <td>ตรวจสอบระดับน้ำมันหล่อลื่น</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['turbo_pump'];
                        }
                    ?></td>
            <td><input type='text' name="turbo_pump"/></td>          
            <td></td>        </tr>
    <!-- Main Supply -->
        <tr>
            <td rowspan="6" style="text-align:center">(8) Main Supply</td>
            <td rowspan="3"><a href="rvh_versahd_ip_stblz.php" target="_blank">Input to Stabilizer</a></td>
            <td rowspan="3">Functional</td>
            <td>L1 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['ip_stabilizer_l1'];
                        }
                    ?>  Vac</td>
            <td><input type='text' name="ip_stabilizer_l1"/></td>          
            <td></td>        </tr>
        <tr>
            <td>L2 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['ip_stabilizer_l2'];
                        }
                    ?>  Vac</td>
            <td><input type='text' name="ip_stabilizer_l2"/></td>          
            <td></td>        </tr>
        <tr>
            <td>L3 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['ip_stabilizer_l3'];
                        }
                    ?>   Vac</td>
            <td><input type='text' name="ip_stabilizer_l3"/></td>          
            <td></td>        </tr>
        <tr>
            <td rowspan="3" ><a href="rvh_versahd_op_stblz.php" target="_blank">Output to Stabilizer</td>
            <td rowspan="3">Functional</td>
            <td>L1 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['op_stabilizer_l1'];
                        }
                    ?>  Vac</td>
            <td><input type='text' name="op_stabilizer_l1"/></td>          
            <td></td>        </tr>
        <tr>
            <td>L2 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['op_stabilizer_l2'];
                        }
                    ?>  Vac</td>
            <td><input type='text' name="op_stabilizer_l2"/></td>          
            <td></td>        </tr>
        <tr>
            <td>L3 = <?php
                    foreach($result as $result_tb){
                            echo $result_tb['op_stabilizer_l3'];
                        }
                    ?>   Vac</td>
            <td><input type='text' name="op_stabilizer_l3"/></td>          
            <td></td>        </tr>
    <!-- Thyratron Check -->
        <tr>
            <td rowspan="5" style="text-align:center"><a href="rvh_versahd_thyratron.php" target="_blank">(9) Thyratron Check</td>
            <td>Replenisher</td>
            <td>Hydrogen Heater voltage<br>(5.2 to 5.8 Vac)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_replenisher'];
                        }
                    ?> Vac</td>
            <td><input type='text' name="thyratron_replenisher"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Heater</td>
            <td>Cathode heater voltage<br>(6.0 to 6.6 Vac)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_heater'];
                        }
                    ?> Vac</td>
            <td><input type='text' name="thyratron_heater"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Grid1</td>
            <td>Grid1 voltage<br>(16.5 to 19.5 Vdc)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_grid1'];
                        }
                    ?> Vdc</td>
            <td><input type='text' name="thyratron_grid1"/></td>          
            <td></td>        </tr>
        <tr>
            <td rowspan="2">Grid2</td>
            <td rowspan="2">Grid2 bias voltage<br>(-120 to -135 Vdc)(-400 Hz)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_grid2_vdc'];
                        }
                    ?> Vdc</td>
            <td><input type='text' name="thyratron_grid2_vdc"/></td>          
            <td></td>        </tr>
        <tr>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['thyratron_grid2_hz'];
                        }
                    ?> Hz</td>
            <td><input type='text' name="thyratron_grid2_hz"/></td>          
            <td></td>        </tr>
    <!-- Gun I Mon 6MV-->
        <tr>
            <td style="text-align:center"><a href="rvh_versahd_gun.php" target="_blank">(10) Gun I Mon 6MV</td>
            <td>(i217, p4)</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['gun_i_mon'];
                        }
                    ?></td>
            <td><input type='text' name="gun_i_mon"/></td>          
            <td></td>        </tr>
    <!-- LCS/TCC MCC Control System -->
        <tr>
            <td rowspan="4" style="text-align:center">(11) LCS/TCC <br> MCC Control System</td>
            <td>Self test</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['mcc_self_test'];
                        }
                ?></td>
            <td><input type='text' name="mcc_self_test"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Cooling fan</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['mcc_cooling_fan'];
                        }
                ?></td>
            <td><input type='text' name="mcc_cooling_fan"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Checked and backup SQL</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['mcc_check_backup'];
                        }
                ?></td>
            <td><input type='text' name="mcc_check_backup"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ทำความสะอาด และปรับแต่ง</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['mcc_clean'];
                        }
                ?></td>
            <td><input type='text' name="mcc_clean"/></td>          
            <td></td>        </tr>
    <!-- Chiller -->
        <tr>
            <td rowspan="6" style="text-align:center"><a href="rvh_versahd_chiller.php" target="_blank">(12) Chiller</td>
            <td rowspan="2">Pressure water</td>
            <td rowspan="2">Functional</td>
            <td>Input <?php
                    foreach($result as $result_tb){
                            echo $result_tb['chiller_ps_water_ip'];
                        }
                    ?> Bar</td>
            <td><input type='text' name="chiller_ps_water_ip"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Output <?php
                    foreach($result as $result_tb){
                            echo $result_tb['chiller_ps_water_op'];
                        }
                    ?> Bar</td>
            <td><input type='text' name="chiller_ps_water_op"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบ Temp</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['chiller_temp'];
                        }
                    ?> 'C</td>
            <td><input type='text' name="chiller_temp"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบระดับน้ำ</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['chiller_level'];
                        }
                    ?></td>
            <td><input type='text' name="chiller_level"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ตรวจสอบสภาพท่อส่งน้ำ</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['chiller_pipe'];
                        }
                    ?></td>
            <td><input type='text' name="chiller_pipe"/></td>          
            <td></td>        </tr>
        <tr>
            <td>ทำความสะอาด และปรับแต่ง</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['chiller_clean'];
                        }
                    ?></td>
            <td><input type='text' name="chiller_clean"/></td>          
            <td></td>        </tr>
    <!-- iView -->
        <tr>
            <td rowspan="5" style="text-align:center"><a href="rvh_versahd_iview.php" target="_blank">(13) iView</td>
            <td>Collision interlocks/Touchguard</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['iview_col_interlocks'];
                        }
                    ?></td>
            <td><input type='text' name="iview_col_interlocks"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Touchguard check interlock</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['iview_touchguard'];
                        }
                    ?></td>
            <td><input type='text' name="iview_touchguard"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Imaging and Treatment coordinate coincidence</td>
            <td>1 mm<br>(KV Flex map)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['iview_kv_flex_map'];
                        }
                    ?> mm</td>
            <td><input type='text' name="iview_kv_flex_map"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Image Scalling<br>(HorizMMPixel)</td>
            <td>1 mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['iview_image_scaling'];
                        }
                    ?> mm</td>
            <td><input type='text' name="iview_image_scaling"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Image quality resolution</td>
            <td>Baseline</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['iview_image_qlt_rslt'];
                        }
                    ?></td>
            <td><input type='text' name="iview_image_qlt_rslt"/></td>          
            <td></td>        </tr>
    <!-- XVI -->
        <tr>
            <td rowspan="4" style="text-align:center"><a href="rvh_versahd_xvi.php" target="_blank">(14) XVI</td>
            <td>Collision interlocks/Touchguard</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['xvi_col_interlocks'];
                        }
                    ?></td>
            <td><input type='text' name="xvi_col_interlocks"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Touchguard check interlock</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['xvi_touchguard'];
                        }
                    ?></td>
            <td><input type='text' name="xvi_touchguard"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Imaging and Treatment coordinate isocenter</td>
            <td>1 mm<br>(with image registration)</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['xvi_image_registration'];
                        }
                    ?></td>
            <td><input type='text' name="xvi_image_registration"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Collimator and Filter</td>
            <td>Check Filter All</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['xvi_col_filter'];
                        }
                    ?></td>
            <td><input type='text' name="xvi_col_filter"/></td>          
            <td></td>        </tr>
    <!-- HexaPOD -->
        <tr>
            <td rowspan="4" style="text-align:center">(15) HexaPOD</td>
            <td>Connection overall</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['hexapod_connection'];
                        }
                    ?></td>
            <td><input type='text' name="hexapod_connection"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Interlock check</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['hexapod_interlock'];
                        }
                    ?></td>
            <td><input type='text' name="hexapod_interlock"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Correlation check</td>
            <td>Functional</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['hexapod_correlation'];
                        }
                    ?></td>
            <td><input type='text' name="hexapod_correlation"/></td>          
            <td></td>        </tr>
        <tr>
            <td>Treament couch isocenter</td>
            <td>น้อยกว่าเท่ากับ 1mm</td>
            <td><?php
                    foreach($result as $result_tb){
                            echo $result_tb['hexapod_treatment'];
                        }
                    ?></td>
            <td><input type='text' name="hexapod_treatment"/></td>          
            <td></td>        </tr>
    <!-- Linac Hour -->
        <tr>
            <td rowspan="2" style="text-align:center"><a href="rvh_versahd_linachour.php" target="_blank">(16) Linac Hour</td>
            <td rowspan="2">(LT i275, p4)(HT i276, p4)</td>
            <td rowspan="2">Baseline</td>
            <td>LT <?php
                    foreach($result as $result_tb){
                            echo $result_tb['linac_hour_lt'];
                        }
                    ?> </td>
            <td><input type='text' name="linac_hour_lt"/></td>          
            <td></td>        </tr>
        <tr>
            <td>HT <?php
                    foreach($result as $result_tb){
                            echo $result_tb['linac_hour_ht'];
                        }
                    ?> </td>
            <td><input type='text' name="linac_hour_ht"/></td>          
            <td></td>        </tr>
    <!-- Miscellaneous -->
        <tr>
            <td style="text-align:center">(17) Miscellaneous</td>
            <td colspan="2"><?php
                foreach($result as $result_tb){ 
                        echo $result_tb['date_pm'];
                        echo " : <br>"; 
                        echo $result_tb['miscellaneous'];
                }
            ?> </td>
            <td colspan='3'><textarea row='5' cols='50' name="miscellaneous"></textarea></td>          
        </tr>
        </table>
        <input type='submit' value='Save' name='all_submit' />
        </form>
    </body>
</html>
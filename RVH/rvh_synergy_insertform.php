<?php
session_start();  
require_once("rvh_connectdb.php"); 

$motor_brush = !empty($motor_brush) ? "'$motor_brush'" : "NULL";

$date_pm = $_POST['date_pm'];
$gantry_angle_zero = $_POST['gantry_angle_zero'];
$gantry_angle = $_POST['gantry_angle'];
$gantry_motor = $_POST['gantry_motor'];
$gantry_pot = $_POST['gantry_pot'];
$gantry_clean = $_POST['gantry_clean'];

$collimator_angle = $_POST['collimator_angle'];
$crosswire_screen_ssd = $_POST['crosswire_screen_ssd'];
$crosswire_screen_floor = $_POST['crosswire_screen_floor'];
$distance_meter = $_POST['distance_meter'];
$laser_isocenter = $_POST['laser_isocenter'];
$collimator_wedge = $_POST['collimator_wedge'];
$collimator_movement = $_POST['collimator_movement'];
$field_size = $_POST['field_size'];
$camera_cond = $_POST['camera_cond'];
$collimator_leaves = $_POST['collimator_leaves'];

$tb_height = $_POST['tb_height'];
$tb_lateral = $_POST['tb_lateral'];
$tb_long = $_POST['tb_long'];
$check_tb_isocentric = $_POST['check_tb_isocentric'];
$tb_mech = $_POST['tb_mech'];
$tb_ctrl_panel = $_POST['tb_ctrl_panel'];
$tb_pot = $_POST['tb_pot'];
$motor_brush = $_POST['motor_brush'];
$tb_clean = $_POST['tb_clean'];

$hh_func_check = $_POST['hh_func_check'];
$hh_cable = $_POST['hh_cable'];
$hh_clean = $_POST['hh_clean'];

$acc_applicator = $_POST['acc_applicator'];
$acc_shadow_tray = $_POST['acc_shadow_tray'];

$pressure_sys_sf6 = $_POST['pressure_sys_sf6'];
$discharge_refillgas = $_POST['discharge_refillgas'];

$turbo_pump = $_POST['turbo_pump'];

$ip_stabilizer_l1 = $_POST['ip_stabilizer_l1'];
$ip_stabilizer_l2 = $_POST['ip_stabilizer_l2'];
$ip_stabilizer_l3 = $_POST['ip_stabilizer_l3'];
$op_stabilizer_l1 = $_POST['op_stabilizer_l1'];
$op_stabilizer_l2 = $_POST['op_stabilizer_l2'];
$op_stabilizer_l3 = $_POST['op_stabilizer_l3'];

$thyratron_replenisher = $_POST['thyratron_replenisher'];
$thyratron_heater = $_POST['thyratron_heater'];
$thyratron_grid1 = $_POST['thyratron_grid1'];
$thyratron_grid2_vdc = $_POST['thyratron_grid2_vdc'];
$thyratron_grid2_hz = $_POST['thyratron_grid2_hz'];

$gun_i_mon = $_POST['gun_i_mon'];

$mcc_self_test = $_POST['mcc_self_test'];
$mcc_cooling_fan = $_POST['mcc_cooling_fan'];
$mcc_check_backup = $_POST['mcc_check_backup'];
$mcc_clean = $_POST['mcc_clean'];

$chiller_ps_water_ip = $_POST['chiller_ps_water_ip'];
$chiller_ps_water_op = $_POST['chiller_ps_water_op'];
$chiller_temp = $_POST['chiller_temp'];
$chiller_level = $_POST['chiller_level'];
$chiller_pipe = $_POST['chiller_pipe'];
$chiller_clean = $_POST['chiller_clean'];

$iview_col_interlocks = $_POST['iview_col_interlocks'];
$iview_touchguard = $_POST['iview_touchguard'];
$iview_kv_flex_map = $_POST['iview_kv_flex_map'];
$iview_image_scaling = $_POST['iview_image_scaling'];
$iview_image_qlt_rslt = $_POST['iview_image_qlt_rslt'];

$xvi_col_interlocks = $_POST['xvi_col_interlocks'];
$xvi_touchguard = $_POST['xvi_touchguard'];
$xvi_image_registration = $_POST['xvi_image_registration'];
$xvi_col_filter = $_POST['xvi_col_filter'];

$hexapod_connection = $_POST['hexapod_connection'];
$hexapod_interlock = $_POST['hexapod_interlock'];
$hexapod_correlation = $_POST['hexapod_correlation'];
$hexapod_treatment = $_POST['hexapod_treatment'];

$linac_hour_lt = $_POST['linac_hour_lt'];
$linac_hour_ht = $_POST['linac_hour_ht'];

$miscellaneous = $_POST['miscellaneous'];

    $sql_insert = "INSERT INTO synergy_151792 (date_pm,gantry_angle_zero,gantry_angle,gantry_motor,gantry_pot,gantry_clean,collimator_angle,crosswire_screen_ssd,crosswire_screen_floor,distance_meter,laser_isocenter,collimator_wedge,collimator_movement,field_size,camera_cond,collimator_leaves,tb_height,tb_lateral,tb_long,check_tb_isocentric,tb_mech,tb_ctrl_panel,tb_pot,motor_brush,tb_clean,hh_func_check,hh_cable,hh_clean,acc_applicator,acc_shadow_tray,pressure_sys_sf6,discharge_refillgas,turbo_pump,ip_stabilizer_l1,ip_stabilizer_l2,ip_stabilizer_l3,op_stabilizer_l1,op_stabilizer_l2,op_stabilizer_l3,thyratron_replenisher,thyratron_heater,thyratron_grid1,thyratron_grid2_vdc,thyratron_grid2_hz,gun_i_mon,mcc_self_test,mcc_cooling_fan,mcc_check_backup,mcc_clean,chiller_ps_water_ip,chiller_ps_water_op,chiller_temp,chiller_level,chiller_pipe,chiller_clean,iview_col_interlocks,iview_touchguard,iview_kv_flex_map,iview_image_scaling,iview_image_qlt_rslt,xvi_col_interlocks,xvi_touchguard,xvi_image_registration,xvi_col_filter,hexapod_connection,hexapod_interlock,hexapod_correlation,hexapod_treatment,linac_hour_lt,linac_hour_ht,miscellaneous) VALUES ('$date_pm', '$gantry_angle_zero', '$gantry_angle','$gantry_motor','$gantry_pot','$gantry_clean','$collimator_angle','$crosswire_screen_ssd','$crosswire_screen_floor','$distance_meter','$laser_isocenter','$collimator_wedge','$collimator_movement','$field_size','$camera_cond','$collimator_leaves','$tb_height','$tb_lateral','$tb_long','$check_tb_isocentric','$tb_mech','$tb_ctrl_panel','$tb_pot','$motor_brush','$tb_clean','$hh_func_check','$hh_cable','$hh_clean','$acc_applicator','$acc_shadow_tray','$pressure_sys_sf6','$discharge_refillgas','$turbo_pump','$ip_stabilizer_l1','$ip_stabilizer_l2','$ip_stabilizer_l3','$op_stabilizer_l1','$op_stabilizer_l2','$op_stabilizer_l3','$thyratron_replenisher','$thyratron_heater','$thyratron_grid1','$thyratron_grid2_vdc','$thyratron_grid2_hz','$gun_i_mon','$mcc_self_test','$mcc_cooling_fan','$mcc_check_backup','$mcc_clean','$chiller_ps_water_ip','$chiller_ps_water_op','$chiller_temp','$chiller_level','$chiller_pipe','$chiller_clean','$iview_col_interlocks','$iview_touchguard','$iview_kv_flex_map','$iview_image_scaling','$iview_image_qlt_rslt','$xvi_col_interlocks','$xvi_touchguard','$xvi_image_registration','$xvi_col_filter','$hexapod_connection','$hexapod_interlock','$hexapod_correlation','$hexapod_treatment','$linac_hour_lt','$linac_hour_ht','$miscellaneous')";

    print json_encode($date_pm);
    printf ("\n %s %s \n", $miscellaneous, $date_pm);
$result02 = $mysqli->query($sql_insert);
        if (!$result02){
            echo "<br>Insert Fail X<br>";
        }else{
            echo "<br>Insert Successful ! <br>";
        }

$mysqli->close();
echo "<hr>";
echo "<a href='rvh_synergy_pm.php'>กลับไปหน้า PM Checklist</a>";
?>
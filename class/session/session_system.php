<?php 
    if(!isset($_SESSION)){ 
        session_start(); 
    }
    
    $log_01 = $_SESSION['log_01'];
    $log_02 = $_SESSION['log_02'];
    $log_03 = $_SESSION['log_03'];

    $usu_01 = $_SESSION['usu_01'];
    $usu_02 = $_SESSION['usu_02'];
    $usu_03 = $_SESSION['usu_03'];
    $usu_04 = $_SESSION['usu_04'];
    $usu_05 = $_SESSION['usu_05'];
    $usu_06 = $_SESSION['usu_06'];
    $usu_07 = $_SESSION['usu_07'];
    $usu_08 = $_SESSION['usu_08'];
    $usu_09 = $_SESSION['usu_09'];
    $usu_10 = $_SESSION['usu_10'];
    $usu_11 = $_SESSION['usu_11'];
    $usu_12 = $_SESSION['usu_12'];
    $usu_13 = $_SESSION['usu_13'];
    $usu_14 = $_SESSION['usu_14'];

    $expire = $_SESSION['expire'];

    $val_03 = $_SERVER['REMOTE_ADDR'];
    
    if ($expire < time()) {
        header('Location: ../../class/session/session_logout.php');
    } else {
        if (isset($log_01) && isset($log_03) && isset($val_03)) {
            setlocale(LC_MONETARY, 'es_PY');

            $_SESSION['expire'] = time() + 3600;

            $urlAct             = $_SERVER['REQUEST_URI'];
            $urlAnt             = substr($_SERVER['HTTP_REFERER'], 39);
            $urlPat             = strtoupper(substr(substr($_SERVER['SCRIPT_FILENAME'], 48), 0, -4));
        } else {
            header('Location: ../../class/session/session_logout.php');
        }
    }
?>
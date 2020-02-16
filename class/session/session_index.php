<?php
    if(!isset($_SESSION)){ 
        session_start(); 
    }

    $val_00     = 0;
    $val_01     = '';
    $val_02     = '';
    $val_02_1   = '';
    
    if(isset($_POST['val_01'])){
        $val_00     = 1;
        $val_01     = strtoupper($_POST['val_01']);
        $val_02     = $_POST['val_02'];
        $val_02_1   = getContrasenha($val_01, $val_02);
    }

    $val_03         = $_SERVER['REMOTE_ADDR'];

    $dataJSON       = json_encode(
        array(
            'usuario_var01' => $val_01,
            'usuario_var02' => $val_02_1,
            'usuario_var03' => $val_03,
            'usuario_var04'	=> $_SERVER['HTTP_HOST'],
            'usuario_var05'	=> $_SERVER['HTTP_USER_AGENT'],
            'usuario_var06'	=> $_SERVER['HTTP_REFERER'],
            'usuario_var07'	=> date('Y-m-d H:i:s'),
            'usuario_var08'	=> 4
        ));

    if ($val_00 == 1) {
        $resultJSON     = post_curl('login', $dataJSON);
        $resultJSON     = json_decode($resultJSON, true);
    } else {
        $resultJSON     = post_curl('login/ip', $dataJSON);
        $resultJSON     = json_decode($resultJSON, true);
    }
    
    if ($resultJSON['code'] === 200) {
        $_SESSION['log_01']     = $resultJSON['data']['login_usuario'];
        $_SESSION['log_02']     = NULL;
        $_SESSION['log_03'] 	= $val_03;

        if (isset($resultJSON['data']['login_foto'])) {
            $_SESSION['usu_01']     = trim($resultJSON['data']['login_foto']);
        } else {
            $_SESSION['usu_01']     = '../assets/images/users/default.png';
        }
        
        $_SESSION['usu_02']     = $resultJSON['data']['login_funcionario_codigo'];
        $_SESSION['usu_03'] 	= $resultJSON['data']['login_funcionario_nombre'];
        $_SESSION['usu_04'] 	= $resultJSON['data']['login_cargo_nombre'];
        $_SESSION['usu_05'] 	= $resultJSON['data']['login_gerencia_nombre'];
        $_SESSION['usu_06'] 	= $resultJSON['data']['login_email'];
        $_SESSION['usu_07'] 	= $resultJSON['data']['login_cargo_codigo'];
        $_SESSION['usu_08'] 	= $resultJSON['data']['login_gerencia_codigo'];
        $_SESSION['usu_09'] 	= $resultJSON['data']['login_departamento_codigo'];
        $_SESSION['usu_10'] 	= $resultJSON['data']['login_unidad_codigo'];
        $_SESSION['usu_11'] 	= $resultJSON['data']['login_supervision_codigo'];
        $_SESSION['usu_12'] 	= $resultJSON['data']['login_departamento_nombre'];
        $_SESSION['usu_13'] 	= $resultJSON['data']['login_unidad_nombre'];
        $_SESSION['usu_14'] 	= $resultJSON['data']['login_supervision_nombre'];

        $_SESSION['expire']     = time() + 3600;

        $banLogeo               = true;
    } else {
        $val_01                 = NULL;
        $val_02                 = NULL;
        $val_03                 = NULL;

        $data01                 = 'assets/img/user/photo.png';
        $data02	                = 'VUELVE A LOGEARTE :(';

        $banLogeo               = false;

        unset($_SESSION['log_01']);
        unset($_SESSION['log_02']);
        unset($_SESSION['log_03']);
        
        unset($_SESSION['usu_01']);
        unset($_SESSION['usu_02']);
        unset($_SESSION['usu_03']);
        unset($_SESSION['usu_04']);
        unset($_SESSION['usu_05']);
        unset($_SESSION['usu_06']);
        unset($_SESSION['usu_07']);
        unset($_SESSION['usu_08']);
        unset($_SESSION['usu_09']);
        unset($_SESSION['usu_10']);
        unset($_SESSION['usu_11']);
        unset($_SESSION['usu_12']);
        unset($_SESSION['usu_13']);
        unset($_SESSION['usu_14']);
    
        unset($_SESSION['expire']);
    
        session_unset();
        session_destroy();
    }
?>
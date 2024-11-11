<?php
    session_start();
    ob_start();
    //require_once 'classes.php';
    $requesturi = strstr(str_replace(strstr($_SERVER['REQUEST_URI'],'?'), '',$_SERVER['REQUEST_URI']),'/');
    $urlinitial = explode("/",$requesturi);
    $a = array();
    $url = array();
    $today = gmdate('Y-m-d');
    $er = array();
    foreach($urlinitial  as $k => $v){
        if($v == ''){
            $a[] = strtolower($urlinitial[$k]);
            unset($urlinitial[$k]);
            continue;
        }
        if($v == 'catalystsymposium' and isset($urlinitial[1])){
            if($urlinitial[1] == 'catalystsymposium'){
                unset($urlinitial[$k]);
                continue;
            }
            
        }
        $url[] = strtolower($urlinitial[$k]);
        $a[] = strtolower($urlinitial[$k]);
    }
    $no_a =  count($a);
    if($no_a<=2){
       $dot = ''; 
    }
        else{
            $x_a = $no_a-2;
            $dot_r = array();
            for($i = 1; $i<=$x_a; $i++){
                 $dot_r[] = '../';
            }
            $dot = join('',$dot_r);
        }
    require_once 'components/head.php';
    require_once 'components/menu.php';
    require_once 'pages/home.php';  
    require_once 'components/footer.php';
    require_once 'components/base.php';
?>
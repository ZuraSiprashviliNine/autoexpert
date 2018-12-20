<?php
    $language = $_SESSION['language'];
    $keywords = getKeywords($language, $conn);
    $_keywords = [
        'base'=> [],
        'keywords'=>[]
    ];
    
    foreach($keywords as $keyword){
        $_k = array_values($keyword);
        array_push($_keywords['base'], $_k[0]);
        if(!$_k[1]){
            array_push($_keywords['keywords'], $_k[0]);
        }else{
            array_push($_keywords['keywords'], $_k[1]);
        }
    }

    $keywords = $_keywords;

    function translate($string){
        $keywords = $GLOBALS['keywords'];
        for($i = 0; $i < count($keywords['base']); $i++){
            if(strtolower($keywords['base'][$i]) == strtolower($string)){
                return $keywords['keywords'][$i];
            }
        }
        return $string;
    }

    function valute($data, $name){
        // $to = null;
        // $txt = '';
        // switch($_SESSION['language']){
        //     case 'en': {
        //         $to = 'USD';
        //         $txt = '$';
        //         break;
        //     }
        //     case 'geo': {
        //         $to = 'GEL';
        //         $txt = 'ლარი';
        //         break;
        //     }
        //     case 'ru': {
        //         $to = 'RUB';
        //         $txt = 'rub';
        //         break;
        //     }
        // }
        // $url = 'https://free.currencyconverterapi.com/api/v6/convert?q=GEL_'.$to.'&compact=y';
        // $price = file_get_contents($url);
        // $price = json_decode($price);
        // $price = (array)($price);
        // $price = array_values($price)[0];
        // $str = (int)($price->val) * (int)($data) . ' ';
        // if($name){
        //     $str .=  $txt;
        // }
        return $data;
        return $str;
    }

    if(isset($_SESSION['auth'])){
        require_once 'dashboard.php';
    }else{
        require_once 'login.php';
    }

<?php
    if($_SESSION){
        if(!$_SESSION['language']){
            $_SESSION['language'] = 'geo';
        }
    }else{
        $_SESSION['language'] = 'geo';
    }
?>
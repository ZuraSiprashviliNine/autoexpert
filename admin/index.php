<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "Abcd345h";
    $dbname = "autoexp";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else{
        function getKeywords($language, $conn){
            if($language == 'en'){
                $langsql = "select en from languages";
                
                $langResult = $conn->query($langsql);
    
                $language = [];
                
                while($row = $langResult->fetch_assoc()){
                    array_push($language, $row);
                }
            }else{
                $langsql = "select en, ".$language." from languages";
    
                $langResult = $conn->query($langsql);
    
                $language = [];
                
                while($row = $langResult->fetch_assoc()){
                    array_push($language, $row);
                }
            }
    
            return $language;
        }

        if($_SESSION){
            if(!$_SESSION['language']){
                $_SESSION['language'] = 'geo';
            }
        }else{
            $_SESSION['language'] = 'geo';
        }

        if(isset($_GET['language'])){
            switch($_GET['language']){
                case 'en': 
                case 'geo':
                case 'ru': {
                    $_SESSION['language'] = $_GET['language'];
                    break;
                }
            }
            // header('Location: /');
        }
        echo $_SERVER['REQUEST_METHOD'];

        
        require_once 'start.php';
    }?>
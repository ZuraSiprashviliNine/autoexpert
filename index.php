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
        require_once('session/control.php');
        require_once('resources/sql.php');

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
        require_once('start.php');
    }?>
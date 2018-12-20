
<?php

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

    function getResellers($conn){
        $sql = 'select * from resellers';
        $result = $conn->query($sql);

        $resellers = [];
        while($row = $result->fetch_assoc()){
            array_push($resellers, $row);
        }
        return $resellers;
    }

    function getServices($conn){
        $sql = 'select * from services';
        $result = $conn->query($sql);

        $services = [];
        while($row = $result->fetch_assoc()){
            array_push($services, $row);
        }

        return $services;
    }

    function getChecks($conn){
        $sql = 'select * from checks';
        $result = $conn->query($sql);

        $checks = [];
        while($row = $result->fetch_assoc()){
            array_push($checks, $row);
        }

        return $checks;
    }

    function getAbout($conn){
        $sql = 'select * from about';
        $result = $conn->query($sql);

        $about = [];
        while($row = $result->fetch_assoc()){
            array_push($about, $row);
        }

        $file = fopen("resources/about.json", "r") or die("Unable to open file!");
        $aboutData = fread($file ,filesize("resources/about.json"));
        fclose($file);

        return [
            'info'=> (array)json_decode($aboutData)->info,
            'items'=>$about
        ];
    }

    function getCheckVisual($conn){
        $sql = 'select * from check_visual';
        $result = $conn->query($sql);

        $checks = [];
        while($row = $result->fetch_assoc()){
            array_push($checks, $row);
        }

        return $checks;
    }

    function getSections(){
        $file = fopen("resources/sections.json", "r") or die("Unable to open file!");
        $sections = fread($file ,filesize("resources/sections.json"));
        fclose($file);

        return (array)(json_decode($sections));
    }

    function getCommon(){
        $file = fopen("resources/site.json", "r") or die("Unable to open file!");
        $site = fread($file ,filesize("resources/site.json"));
        fclose($file);

        return (json_decode($site));
    }

    function getSocials(){
        $file = fopen("resources/socials.json", "r") or die("Unable to open file!");
        $socials = fread($file ,filesize("resources/socials.json"));
        fclose($file);

        return (array)(json_decode($socials));
    }

    function getNavigation($conn){
        $navsql = "select * from navigation";
        $navResult = $conn->query($navsql);

        $navs = [];
        while($row = $navResult->fetch_assoc()){
            array_push($navs, $row);
        }

        return $navs;
    }
?>
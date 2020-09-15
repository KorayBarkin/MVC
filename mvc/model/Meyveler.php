<?php

class Meyveler {
    public function ilkMeyveAl(){
        $db = file_get_contents("database/meyveler.json");
        $parsed = json_decode($db);
        return $parsed[0];
    }
    
        public function TumMeyveleriAl(){
        $db = file_get_contents("database/meyveler.json");
        $parsed = json_decode($db);
        return $parsed;
    }
    
        public function SonMeyveyiAl(){
        $db = file_get_contents("database/meyveler.json");
        $parsed = json_decode($db);
        return $parsed[array_key_last($parsed)];
    }
}

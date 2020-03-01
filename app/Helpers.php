<?php

namespace App;

class Helpers
{
    public static function orari(){
        return [
            "06:00",
            "07:00",
            "08:00",
            "09:00",
            "10:00",
            "11:00",
            "12:00",
            "13:00",
            "14:00",
            "15:00",
            "16:00",
            "17:00",
            "18:00",
            "19:00",
            "20:00",
            "21:00",
            "22:00",
            "23:00",
            "24:00"
        ];
}

    public static function giorni(){
        return [
            "lunedi"=>"Lunedì",
            "martedi"=>"Martedì",
            "mercoledi"=>"Mercoledì",
            "giovedi"=>"Giovedì",
            "venerdi"=>"Venerdì",
            "sabato"=>"Sabato",
            "domenica"=>"Domenica"
        ];
    }

    public static function arrayExcept(array $array, String $apertura, String $chiusura){
        $offset = $length = null;
        for ($i = 0; $i < count($array); $i++){
            if ($array[$i] == $apertura){
                $offset = $i;
            }
            if ($array[$i]==$chiusura){
                $length = $i;
            }
            if ($offset != 0 and $length != 0){
                break;
            }
        }
        if ($offset != null and $length != null and $offset <= $length){
            return array_slice($array, $offset, ($length - $offset));
        } else {
            return false;
        }

    }

}

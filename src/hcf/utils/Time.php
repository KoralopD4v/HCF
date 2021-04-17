<?php

namespace HCF\utils;

class Time {

    public static function IntToString(int $time){
        return gmdate("m:s", $time);
    }


    public static function IntToFullString(int $time){
        return gmdate("h:m:s", $time);
    }
}

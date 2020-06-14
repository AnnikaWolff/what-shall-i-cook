<?php

namespace App\Helpers;

class Random {
    
    /**
    * Return random content of config 'random' by given key
    */
    public static function text(string $configKey): string
    {
        $texts = config('random.'.$configKey);
        
        return $texts[rand(1,count($texts)) - 1];    
    }
}
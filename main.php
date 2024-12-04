<?php
//Your Settings can be read here: settings::read('myArray/settingName') = $settingValue;
//Your Settings can be saved here: settings::set('myArray/settingName',$settingValue,$overwrite = true/false);
class fizzbuzz{
    public static function command($line):void{
        $max = 100;
        $multiples = array(3=>"Fizz",5=>"Buzz");
        for($x = 1; $x <= $max; $x++){
            $string = "";
            foreach($multiples as $mnum => $mname){
                if(($x % $mnum) === 0){
                    $string .= $mname;
                }
            }
            if($string === ""){
                $string = (string) $x;
            }
            echo $string . "\n";
        }
    }
    //public static function init():void{}//Run at startup
}
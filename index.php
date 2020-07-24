<?php

class abc{
    private static function hello(){
        echo 'this is static method !';
    }

    public static function __callStatic($method,$args){
        return 'static method can not use '.$method;
        
    }

}

echo abc::hello();

?>

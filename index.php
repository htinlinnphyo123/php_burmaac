<?php

    class GreaterThanTwenty extends Exception{
     public function message(){
        echo 'it is greater than twenty false';
     }   
    }

    $x = 24;

    try{
        if($x>20){
            throw new GreaterThanTwenty('X cannot be greater than 20');
        }else{
            echo $x;
        }
    }catch(GreaterThanTwenty $err){
        var_dump($err);
    }


?>
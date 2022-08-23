<?php 

// Múltiplas exceptions

class MyE extends Exception {

}

class MyE2 extends Exception {
    
}

class Car
{
    public function drive($m=1)
    {
        try{
            if($m == 10){
                throw new MyE("Error");
            }
            if($m == 9){
                throw new MyE2("Error E2");
            }
            echo "Driving..";
        }catch(MyE | MyE2 $e){
            echo "Error while driving...";
        }
        
    }
}

$car = new Car;
$car->drive(9);
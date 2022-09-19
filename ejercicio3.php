<?php
$pares=false;


    echo "true <br>";
    $rango=rand(1,99);
    for($i=0; $i<$rango; $i++){
        if($pares == true){
            echo $pares;
        if(($i%2) == 0){
          echo  $i ."\n";
        }
        }else{
            echo $i . "\n";
        }
    

    
}
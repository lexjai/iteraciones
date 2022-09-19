<?php
$rango=rand(1,99);
for($i=0; $i<$rango; $i++){
    
        if($_GET["estado"] == TRUE){
        if( ($i%2) == 0){
            echo  $i ."\n";
        }
        }else{
        echo $i . "\n";
    }
}
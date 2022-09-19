<?php
$f=FALSE;
for($i=2 ; $i<=$_GET["num"];$i++ ){
  
    if($_GET["num"]%$i != 0 && ($i%2)!=0){
        $f=TRUE;
        echo $i;
        
    }   
   
}

if($f==FALSE){
    
    echo "es primo";
    
}



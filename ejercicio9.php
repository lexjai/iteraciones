<?php
$f=FALSE;
for($i=2 ; $i<$_GET["num"]&& $f== FALSE;$i++ ){
    if($_GET["num"]%$i == 0){   
        $f=TRUE;
        echo "no es primo";
    }   
}

if($f==FALSE){
    
        echo "es primo";
    
}


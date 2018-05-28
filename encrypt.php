<?php

$file = fopen("test.csv","r");

while(! feof($file))
  {
  	print_r(fgetcsv($file,10000,"\n")) ;
       
  	   // echo nl2br($line[6] + "        " + $line[1] +"\n") ;  
  }

fclose($file);
?>
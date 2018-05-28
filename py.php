<?php
/* Displays user information and some useful messages */
$file = fopen("test.csv","r");
$data = array();
while(! feof($file))
  {
    $data=fgetcsv($file);
    echo base64_encode(implode(",",$data));
    echo "\n";
  }

fclose($file);

?>

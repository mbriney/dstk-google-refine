<?php

$address = $_GET['address'];

$json = file_get_contents('http://www.datasciencetoolkit.org/street2coordinates/'.urlencode($address));
echo str_replace($address,'result',$json);

?>
<?php

$archivo = fopen("archivos/emails.txt","a") or die ("Error");
$email=$_REQUEST['email'];
fwrite($archivo,$email);
fwrite($archivo,"\n");


 ?>

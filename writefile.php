<?php

$name = $_REQUEST['name'];
$which = $_REQUEST['which'];
$guest = $_REQUEST['guest'];

$file = fopen("submit.txt", "a");
fwrite($file, "$name");
fwrite($file, "$which");
fwrite($file, "$guest");
fwrite($file, "============");
fclose($file);
?>

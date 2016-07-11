<?php 
$okext = array("gif", "jpg", "jpeg", "png"); 
$dir = 'main_pic'; 
if ($handle = opendir($dir)) { 
while (false !== ($file = readdir($handle))) { 
$ext = pathinfo($file); 
$ext = $ext["extension"]; 
if ($file != "." && $file != ".." && in_array($ext, $okext)) { 
$imfiles[] = $file; 
} 
} 
closedir($handle); 
} 

$id = rand(0, count($imfiles)-1); 
header('Content-Disposition: inline;'); 
readfile($dir."/".trim($imfiles[$id])); 
?> 
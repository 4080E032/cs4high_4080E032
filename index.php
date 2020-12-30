<!DOCTYPE html>
<html>
<head>
<title="text page">
<meta charset="UTF-8">
<meta http-equiv="refresh" content="20">
<style>


body {background-color:white;} //背景顏色調整


</style>
</head>
<body>

<?php
$myfile = fopen("/home/userz/Desktop/TEXT", "r") or die("Unknown Files!");
echo fread($myfile,filesize("/home/userz/Desktop/TEXT"));
fclose($myfile);
?>

</body>
</html>

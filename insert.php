<?php
mb_internal_encoding("UTF8");

$pdo = new PDO("mysql:dbname=lesson01; host=localhost;","root","root");

$pdo->exec("insert into 4each_keijiban(Handlename,Title,Comments)values('".$_POST[Handlename]."','".$_POST[Title]."','".$_POST[Comments]."');");

header("Location:http://localhost/4each_keijiban/index.php");

?>
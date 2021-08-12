<?php

try{

$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
$db=new PDO('mysql:host=localhost;dbname=dimensionning','root','');
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);//mettre le nom des champs en majuscule
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//mettre le nom des champs en majuscule


}
catch(PDOexception $e){


	die('Erreur:'.$e->getMessage());
					}

?>
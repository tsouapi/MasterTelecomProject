<?php
session_start();
$name=$_POST['username'];
$pass=$_POST['password'];

require('../connectdb.php');
try {

$insert='SELECT name,surname,password,id_statut FROM utilisateur='.$name;
$req=$db->query($insert);
$requette= $req->fetch();
 $insert2='SELECT statut_user,statut_user FROM statut WHERE id_statut='.$requette['id_statut'];
$req2=$db->query($insert2);
$requette2= $req2->fetch();
 
 if(isset($requette['name']))
 {
 	if($requette['password']==$pass)
 	{
 		
 		$_SESSION['name']= $requette['name'];
 		$_SESSION['surname']= $requette['surname'];
 		$_SESSION['statut']=$requette2['statut_user'];
 		header('location: ../home.php');
 		break;

 	}

 }
 
 
 	header('location: ../index.php');
 }
  catch (PDOException $e) {
  echo "Echec : ".$e->getMessage();
}
   


?>
<?php 


function lte($Bearer, $Time , $Duty, $BLER){

$resultat = ($Bearer*$Time*$Duty)*(1/(1-$BLER));

return $resultat;

}

function splite1($f, $mimo , $cpri){

$resultat = ($f*$mimo*$cpri)*(10/8);

return $resultat;

}

function splite2($rbsc, $rb , $ant, $iq){

$resultat = ($rbsc*$rb*$ant*$iq);

return $resultat;

}

function lteS(&$tab){
	


$resultat =array_sum($tab)*(1/3600);

return $resultat;

}

function lted($tab, $Peak){
	


$resultat = ($tab*(1+$Peak))/1024;

return $resultat;

}

function lteend($t, $Traffic, $BHSA){
	


$resultat = $t*$Traffic*$BHSA;

return $resultat;

}

$note[]=1;
$note[]=2;
//echo "".lteend($note[1],1,4);
 ?>
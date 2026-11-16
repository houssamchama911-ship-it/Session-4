<?php
$montant=650;


if($montant>=500 && $montant<=999){
 $remise=5;
}elseif($montant>=1000 && $montant<=1999){
    $remise=10;
    
}elseif($montant>2000){
    $remise=15;

}else{
    $remise=0;

}$resulta=$montant*$remise/100;
$resultafinal=$montant-$resulta;
echo $resultafinal?>
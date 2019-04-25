<?php

print "Digite sua primeira nota\n";
$n1 = (int) fgets(STDIN);

print "Digite sua segunda nota\n";
$n2 = (int) fgets(STDIN);

$media = ($n1+$n2)/2;


if($media ==10){
    print "Aprovado com distinção.\n";
}
elseif ($media <7) {
    print "Reprovado.\n";
}
elseif ($media >=7) {
    print "Aprovado.\n";
}
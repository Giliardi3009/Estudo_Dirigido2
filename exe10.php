<?php

print "Digite o valor de A: \n";
$A = (float) fgets(STDIN);

if ($A == "0"){
    print "Equação não é do segundo grau.";
}

else{
print "Digite o valor de B: \n";
$B = (float) fgets(STDIN);

print "Digite o valor de C: \n";
$C = (float) fgets(STDIN);

$delta = pow($B,2)-4*$A*$C;

print "Valor de delta é $delta \n";

$x1 = (-1*($B)+ sqrt($delta))/2*$A;

print "Valor do x1 é $x1 \n";

$x2 = (-1*($B)- sqrt($delta))/2*$A;

print "Valor do x2 é $x2 \n";
}

if ($delta<0){
    print "A equação não possui raizes reais";
}

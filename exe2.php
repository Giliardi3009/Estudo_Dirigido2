<?php

    print "Digite um número:\n";
    $n1 = (int) fgets(STDIN);

    if($n1>=0){
        print "O número é positivo.\n";
    }
    else {
        print "O número é negativo.\n";
    }
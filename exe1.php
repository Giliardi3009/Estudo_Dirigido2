<?php

    print "Digite o primeiro número:\n";
    $n1 = (int) fgets(STDIN);

    print "Digite o segundo número: \n";
    $n2 = (int) fgets(STDIN);

    if($n1>$n2){
        print "$n1 \n";
    }
    else {
        print "$n2 \n";
    }
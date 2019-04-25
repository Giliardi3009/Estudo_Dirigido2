<?php

    print "Digite o primeiro número:\n";
    $n1 = (int) fgets(STDIN);

    print "Digite o segundo número: \n";
    $n2 = (int) fgets(STDIN);

    print "Digite o terceiro número: \n";
    $n3 = (int) fgets(STDIN);

    if($n1 > $n2 and $n1 > $n3 and $n2 > $n3) {
        print "$n1 é o maior e $n3 é o menor.\n";
    }
    elseif ($n1 > $n2 and $n1 > $n3 and $n3 > $n2) {
        print "$n1 é o maior e $n2 é o menor.\n";
    }
    elseif ($n2 > $n1 and $n2 > $n3 and $n3 > $n1) {
        print "$n2 é o maior e $n1 é o menor.\n";
    }
    elseif ($n2 > $n1 and $n2 > $n3 and $n1 > $n3) {
        print "$n2 é o maior e $n3 é o menor.\n";
    }
    elseif ($n3 > $n1 and $n3 > $n2 and $n2 > $n1) {
        print "$n3 é o maior e $n1 é o menor.\n";
    }
    elseif ($n3 > $n1 and $n3 > $n2 and $n1 > $n2) {
        print "$n3 é o maior e $n2 é o menor.\n";
    }
    
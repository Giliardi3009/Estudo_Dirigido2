<?php

    print "Digite o primeiro preço:\n";
    $n1 = (int) fgets(STDIN);

    print "Digite o segundo preço: \n";
    $n2 = (int) fgets(STDIN);

    print "Digite o terceiro preço: \n";
    $n3 = (int) fgets(STDIN);

    if($n1 < $n2 and $n1 < $n3) {
        print "$n1 é o mais barato.\n";
    }
    elseif ($n2 < $n1 and $n2 < $n3) {
        print "$n2 é o mais barato.\n";
    }
    else {
        print "$n3 é o mais barato.\n";
    }
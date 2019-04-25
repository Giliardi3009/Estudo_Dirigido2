<?php

    print "Digite o primeiro número: ";
    $n1 = (int)fgets(STDIN);

    print "Digite o segundo número: ";
    $n2 = (int)fgets(STDIN);

    print "Digite o terceiro número: ";
    $n3 = (int)fgets(STDIN);

    print "Digite o quarto número: ";
    $n4 = (int)fgets(STDIN);

    print "Digite o quinto número: ";
    $n5 = (int)fgets(STDIN);

    if($n1>$n2 and $n1>$n3 and $n1>$n4 and $n1>$n5){
        print "$n1 é o maior número";
    }elseif ($n2>$n1 and $n2>$n3 and $n2>$n4 and $n2>$n5){
        print "$n2 é o maior número";
    }elseif ($n3>$n1 and $n3>$n2 and $n3>$n4 and $n3>$n5){
        print "$n3 é o maior número";
    }elseif ($n4>$n1 and $n4>$n2 and $n4>$n3 and $n4>$n5){
        print "$n4 é o maior número";
    }elseif ($n5>$n1 and $n5>$n2 and $n5>$n3 and $n5>$n4){
        print "$n5 é o maior número";
    }
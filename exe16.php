<?php

    print "Digite sua primeira nota ";
    $n1 = (int) fgets(STDIN);

    print "Digite sua segunda nota ";
    $n2 = (int) fgets(STDIN);

    print "Digite sua terceira nota ";
    $n3 = (int) fgets(STDIN);

    print "Digite sua quarta nota ";
    $n4 = (int) fgets(STDIN);

    print "Digite sua quinta nota ";
    $n5 = (int) fgets(STDIN);

    $soma = $n1+$n2+$n3+$n4+$n5;
    $media = $soma/5;

    print "Sua soma é $soma";
    print "Sua média é $media";
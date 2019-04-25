<?php

    print "Digite f ou m:\n";
    $sexo = (string) fgetc(STDIN);


    if($sexo == 'f'){
        print "Tu és uma rapariga.\n";
    }
    elseif ($sexo == 'm') {
        print "Tu és um puto.\n";
    }
    else {
        print "Tu és estranho.\n";
    }
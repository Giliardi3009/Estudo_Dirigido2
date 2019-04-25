<?php

    print "Digite o número para base da sua potência: ";
    $base = (float) fgets(STDIN);

    print "Digite o número para o expoente da sua potência: ";
    $expoente = (float) fgets(STDIN);

    $resultado = $base**$expoente;

    print "Resultado é $resultado";

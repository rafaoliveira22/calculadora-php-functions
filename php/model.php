<?php

    // FILTRAR OS INPUTS NUM1 E NUM2 E OPCAO ------------------------
    $num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_INT);
    $num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_INT);
    $opcao = filter_input(INPUT_POST, 'opcao', FILTER_SANITIZE_STRING);
    $result;

    // O RESULTADO SERA EXIBIDO DE ACORDO COM A OPERACAO ESCOLHIDA
    if (!$num1 || !$num2 || !$opcao){
        $result = null;
    } else {
        if( $opcao == '+'){
            $soma = soma($num1, $num2);
            $result = $num1 . ' + ' . $num2 . ' = ' . $soma;
        }
    
        if( $opcao == '-'){
            $subtracao = subtracao($num1, $num2);
            $result = $num1 . ' - ' . $num2 . ' = ' . $subtracao;
        }
    
        if( $opcao == '/'){
            $divisao = divisao($num1, $num2);
            $result = $num1 . ' / ' . $num2 . ' = ' . $divisao;
        }
    
        if( $opcao == '*'){
            $multiplicacao = multiplicacao($num1, $num2);
            $result = $num1 . ' * ' . $num2 . ' = ' . $multiplicacao;
        }
    }



    //FUNÇÕES -- SOMA -- SUBTRAÇÃO -- MULTIPLICAÇÃO -- DIVISÃO -------

    function soma($num1, $num2){
        $soma = $num1 + $num2;
        return $soma;
    }

    function subtracao($num1, $num2){
        $subtracao = $num1 - $num2;
        return $subtracao;
    }

    function multiplicacao($num1, $num2){
        $multiplicacao = $num1 * $num2;
        return $multiplicacao;
    }

    function divisao($num1, $num2){
        $divisao = $num1 / $num2;
        $result = $num1 . ' / ' . $num2 . ' = ' . $divisao;

        return $divisao;
    }

?>
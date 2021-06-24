<?php
    include 'php/model.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display&display=swap" rel="stylesheet">

    <title>PHP | Calculadora </title>
</head>

<body>
    
    <div class="main">
        <form method="POST" class="form-calculadora">


            <h2>CALCULADORA</h2>
            <!-- RESULTADO DO CÁLCULO-->
            <output class="result">
                <?=$result?>
            </output>


            <!-- RECEBER OS NÚMERO PARA CÁLCULO num1//num2-->
            <label><strong>1° NÚMERO</strong></label>
            <input type="number" class="input-numeros" name="num1" value="<?=$num1?>" placeholder="Digite aqui...">
                
            <label><strong>2° NÚMERO</strong></label>
            <input type="number" class="input-numeros" name="num2" value="<?=$num2?>" placeholder="Digite aqui...">

            <!-- OPÇÕES DE OPERAÇÃO  + - / * -->
            <section class="operacoes">
                <p class="title-operacoes"><strong>Operação de Cálculo</strong></p>
                    
                <label>
                    <input type="radio" name="opcao" value="+" />
                        + 
                </label>

                <label>
                    <input type="radio" name="opcao" value="-" />
                        - 
                </label>

                <label>
                    <input type="radio" name="opcao" value="/" />
                        /
                </label>

                <label>
                    <input type="radio" name="opcao" value="*" />
                        *
                </label>
            </section>

            <!-- BOTAO PARA CALCULAR -->
            <button type="submit" class="calcular"> 
                CALCULAR
            </button>
        </form>
    </div>

</body>
</html>
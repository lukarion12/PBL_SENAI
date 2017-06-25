<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <title> Atividades - Revisão PHP </title>
</head>
<body>
    <h1> Atividades de Revisão PHP </h1>
    
<?php

    /* **************************** ATIVIDADE 01 **************************** */

    echo "<h3> Atividade 01 </h3>";
    echo "<h4> Escopo de Variaveis </h4>";

    $a = 13;
    $b = 10;
    
    echo $a."<br><br>"; // VALOR 13 OK
    echo $b."<br><br>"; // VALOR 10 OK
    
    echo ($a + $b)."<br><br>"; // VALOR 23 OK
    
    function saudarmundo (){ 
        global $b;
        
        echo $b."<br><br>"; // VALOR 10 OK
        
        $a = 4;
        $b = 12;
        
        echo ($a + $b)."<br><br>"; // VALOR 16 OK 
    }
    
    saudarmundo();
    echo $a."<br><br>"; // VALOR 13 OK
    echo $b."<br><br>"; // VALOR 12 OK
    echo ($a + $b)."<br><br>"; // VALOR 25 OK

    /* **************************** ATIVIDADE 02 **************************** */

    echo "<h3> Atividade 02 </h3>";
    echo "<h4> Escopo de Variaveis </h4>";

    $a = 13;
    $b = 10;
    
    echo $a."<br><br>"; // VALOR 13 OK
    echo $b."<br><br>"; // VALOR 10 OK
    
    echo ($a + $b)."<br><br>"; // VALOR 23 OK
    
    function saudarmundo2 (){ 
        global $a, $b;
        
        echo $b."<br><br>"; // VALOR 10 
        
        $a = 4;
        $b = 12;
        
        echo ($a + $b)."<br><br>"; // VALOR 23
    }
    
    saudarmundo2();
    echo $a."<br><br>"; // VALOR 4
    echo $b."<br><br>"; // VALOR 12
    echo ($a + $b)."<br><br>"; // VALOR 16

    /* **************************** ATIVIDADE 03 **************************** */

    echo "<h3> Atividade 03 </h3>";
    
    echo "<h4> Operadores Artiméticos </h4>";
    echo (4 * 5)."<br>";   // VALOR 20
    echo (10 / 2)."<br>";  // VALOR 5
    echo (2 + 5)."<br>";   // VALOR 7
    echo (10 - 2)."<br>";  // VALOR 8
    
    echo (10 % 3)."<br>";  // VALOR 1
    //echo (2 ** 3)."<br>";  // VALOR 8
    
    echo "<h4> Operadores Lógicos </h4>";
    
    echo ((true and true) ? "true" : "false")."<br>";  // VALOR verdadeiro
    echo ((false and true) ? "true" : "false")."<br>"; // VALOR falso
    echo ((true or false) ? "true" : "false")."<br>";  // VALOR verdadeiro 
    echo ((false or false) ? "true" : "false")."<br>"; // VALOR falso
    echo ((false xor true) ? "true" : "false")."<br>"; // VALOR verdadeiro
    echo ((true xor true) ? "true" : "false")."<br>";  // VALOR falso
    echo ((true == true) ? "true" : "false")."<br>";   // VALOR verdadeiro
    echo ((true == false) ? "true" : "false")."<br>";  // VALOR falso
    echo ((true != true) ? "true" : "false")."<br>";   // VALOR falso
    echo ((true != false) ? "true" : "false")."<br>";  // VALOR verdadeiro
    echo ((!true) ? "true" : "false")."<br>";          // VALOR falso
    echo ((!false) ? "true" : "false")."<br>";         // VALOR verdadeiro
    echo ((!!true) ? "true" : "false")."<br>";         // VALOR verdadeiro
    
    // OBS.: valores maiores que 1 são considerados 'true', 0 é igual a 'false'
    
    echo ((true === true) ? "true" : "false")."<br>";  // VALOR verdadeiro 1
    echo ((true === 1) ? "true" : "false")."<br>";     // VALOR falso
    echo ((true !== false) ? "true" : "false")."<br>"; // VALOR verdadeiro 1
    // FALAR COM O PROFESSOR
    echo ((true !== 1) ? "true" : "false")."<br>";     // VALOR verdadeiro 1
    
    echo "<h4> Comparadores Aritméticos </h4>";
    echo ((2 > 2) ? "true" : "false")."<br>";  // VALOR falso
    echo ((2 > 3) ? "true" : "false")."<br>";  // VALOR falso
    echo ((2 > 1) ? "true" : "false")."<br>";  // VALOR verdadeiro
    echo ((2 >= 2) ? "true" : "false")."<br>"; // VALOR verdadeiro
    echo ((2 >= 3) ? "true" : "false")."<br>"; // VALOR falso
    echo ((2 >= 1) ? "true" : "false")."<br>"; // VALOR verdadeiro
    echo ((2 < 1) ? "true" : "false")."<br>";  // VALOR falso
    echo ((2 < 2) ? "true" : "false")."<br>";  // VALOR falso
    echo ((2 < 3) ? "true" : "false")."<br>";  // VALOR verdadeiro
    echo ((2 <= 1) ? "true" : "false")."<br>"; // VALOR falso
    echo ((2 <= 2) ? "true" : "false")."<br>"; // VALOR verdadeiro
    echo ((2 <= 3) ? "true" : "false")."<br>"; // VALOR verdadeiro
    
    $i = 0;
    
    echo "<h4> Funções de Incremnto </h4>";
    
    echo ($i++)."<br>"; // VALOR 0
    echo (++$i)."<br>"; // VALOR 2
    echo ($i++ + 2)."<br>"; // VALOR 4
    echo (++$i + 3)."<br>"; // VALOR 7
    
    $j = 0;
    
    echo ($j--)."<br>"; // VALOR 0
    echo (--$j)."<br>"; // VALOR -2
    echo ($j-- + 2)."<br>"; // VALOR 0
    echo (--$j + 3)."<br>"; // VALOR -1
    
    echo "<h4> Operações com String </h4>";
    
    $str1 = "Lucas";
    $str2 = "Silva";
    
    echo ($str1 . $str2)."<br>"; // VALOR LucasSilva
    echo ($str1 . " " . $str2)."<br>"; // VALOR Lucas Silva 
    
    $str1 = $str1 . " " . $str2; 
    
    echo ($str1)."<br>"; // VALOR Lucas Silva
    echo ($str2)."<br>"; // VALOR Silva

    /* **************************** ATIVIDADE 04 **************************** */

    echo "<h3> Atividade 04 </h3>";
    echo "<h4> Laços Condicionais </h4>";
    
    /* Formula de Baskhara */
    /* Imprime resultado se foi possível ou não */
    $a = 1;
    $b = 2;
    $c = 3;
    
    /* PHP Raiz quadrada sqrt(valor) e.g. sqrt(4) */
    /* PHP Potência quadrada pow(valor, expoente) e.g. pow(4, 2) */
    
    function baskhara ($a, $b, $c){
        if ($a == 0) {  
            echo "a equação não é do segundo grau<br>";
        } else {
            $delta = (pow(-$b,2) - 4 * ($a * $c));
            if ($delta < 0) {
                echo "a equação não possui nenhuma raiz real<br>";
            } else {
                $x1 = (-($b) + (sqrt($delta)))/(2 * $a);
                $x2 = (-($b) - (sqrt($delta)))/(2 * $a);
                echo "a equação possui as seguintes raizes: <br>";
                echo "valor de x1: ".$x1."<br>";
                echo "valor de x2: ".$x2."<br>";  
            }
        } 
    }
    baskhara(0,3,4);
    baskhara(-9,3,4);
    baskhara(2,0,-45);
    baskhara($a, $b, $c);
    baskhara($a, 10, $b);
?>
</body>
</html>
<?php
/*
Dado cinco inteiros positivos, encontre os valores mínimos e máximos que podem ser calculados somando exatamente quatro dos cinco inteiros. Em seguida, imprima os valores mínimos e máximos respectivos como uma única linha de dois segmentos longos separados por espaço.

Formato de entrada

Uma única linha de cinco inteiros separados por espaço.

Restrições

    Cada número inteiro está no intervalo inclusivo.

Formato de saída

Imprima dois inteiros longos separados por espaço, indicando os valores mínimos e máximos respectivos que podem ser calculados somando exatamente quatro dos cinco inteiros. (A saída pode ser maior do que 32 bits inteiro).

Entrada de amostra

1 2 3 4 5

Saída de amostra

10 14

Explicação

Nossos números iniciais são,,, e. Podemos calcular as seguintes somas usando quatro dos cinco inteiros:

    Se somarmos tudo, exceto, nossa soma é.
    Se somarmos tudo, exceto, nossa soma é.
    Se somarmos tudo, exceto, nossa soma é.
    Se somarmos tudo, exceto, nossa soma é.
    Se somarmos tudo, exceto, nossa soma é.

Como você pode ver, a soma mínima e a soma máxima é. Assim, imprimimos essas somas mínimas e máximas como dois inteiros separados por espaço em uma nova linha.

Dicas: Cuidado com o estouro de números inteiros! Use Integer de 64 bits.

Precisa de ajuda para começar? Experimente o problema do Solve Me First
*/

$handle = fopen ("php://stdin", "r");
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);

echo sprintf("%d %d", array_sum($arr)-max($arr), array_sum($arr)-min($arr));


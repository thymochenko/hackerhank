<?php
        
/* 
 * 
 * Dada uma série de números inteiros, calcula qual fração de seus elementos é positiva,
 *  qual fração de seus elementos é negativa e qual  fração de seus elementos são zero, 
 * respectivamente. Imprima o valor decimal de cada fração em uma nova linha.

Nota: Este desafio apresenta problemas de precisão. Os casos de teste são dimensionados para seis
 *  casas decimais, embora as respostas com erro absoluto de até sejam aceitáveis.

Formato de entrada

6
-4 3 -9 0 4 1  
 * 
A primeira linha contém um número inteiro, denotando o tamanho da matriz.
A segunda linha contém números inteiros separados por espaço que descrevem uma matriz de números.

Formato de saída
 * 
0.500000
0.333333
0.166667
 * 
Você deve imprimir as seguintes linhas:

     Um decimal representando a fração de números positivos na matriz em comparação com seu tamanho.
     Um decimal representando a fração de números negativos na matriz em comparação com o tamanho.
     Um decimal representando a fração de zero na matriz em comparação com seu tamanho.

Entrada de amostra
 * 
public class Solution {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int size = scanner.nextInt();
        
        int[] a = new int[size];
        
        double fractionPositive = 0;
        double fractionZero = 0;
        double fractionNegative = 0;
        
        for (int i = 0; i < size; i++){
            a[i] = scanner.nextInt();
            if (a[i] > 0) fractionPositive += 1;
            else if (a[i] == 0) fractionZero += 1;
            else if (a[i] < 0) fractionNegative += 1;
        }
        
        System.out.println(fractionPositive/size);
        System.out.println(fractionNegative/size);
        System.out.println(fractionZero/size);

 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
$decima1 = 0;
$decima2 = 0;
$decimal3 = 0;

for($i=0; $i <$n;$i++){
    if($arr[$i] > 0){
        $decimal1 = + 1;
    }elseif($arr[$i] < 1){
        $decimal2 = + 1;
    }
    elseif($arr[$i] == 0){
        $decimal3  = + 1;
    }
}

echo (float)round($decimal1/$n .  "\n ";
echo (float)$decimal2/$n .  "\n ";
echo (float)$decimal3/$n .   "\n ";

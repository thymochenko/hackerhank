		
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
	*/
	import java.util.*;

	public class exercicio5 {

	    public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		double numInputs = scan.nextDouble();
		int posInputs = 0;
		int negInputs = 0;
		int zeroInputs = 0;

		for(int i = 0; i < numInputs; i++){
		    int tmp = scan.nextInt();
		    
		    if (tmp > 0){
		        posInputs++;
		    }
		    else if(tmp < 0){
		        negInputs++;
		    }
		    else{
		        zeroInputs++;
		    }
		}
		scan.close();
		
		// Print result:
		System.out.println(posInputs / numInputs);
		System.out.println(negInputs / numInputs);
		System.out.println(zeroInputs / numInputs);
	    }
	}

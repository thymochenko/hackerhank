import java.util.*;
/*https://www.hackerrank.com/challenges/staircase/problem*/
	public class exercicio6 {
	
        public static void main(String[] args) {
            Scanner in = new Scanner(System.in);
            int n = in.nextInt();
            char [] arreglo = new char [n];
            Arrays.fill(arreglo, ' ');
            int i = 0;
            for (i = 1; i <= n; i++){
            arreglo[n-i] = '#';
            System.out.println(arreglo);
        }

}
	}



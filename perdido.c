#include <stdio.h>
#include <stdlib.h>

int tamanho;
int *vetor;


int pecaPerdida(int vetor[]);
void ordena(int vetor[]);

int main()
{
	int i, x;
	 
	scanf("%d", &tamanho);
	vetor = (int *)malloc(tamanho * sizeof(int));
	
	for(i = 0; i < tamanho - 1; i++){
    	scanf("%d ", &x);
    	vetor[i] = x;
	}
	
	ordena(vetor);
	
	/*for(i=0; i<tamanho-1;i++){
		printf("\nVetor %d: %d", i, vetor[i]);
	}*/
	
	printf("%d\n", pecaPerdida(vetor));
}


void ordena(int v[])
{
  int i, j, valorAtual;
   for( j=0; j<tamanho-1; j++ )
   {
      valorAtual = v[j];
      i = j-1;
      while(i >= 0 && v[i] > valorAtual)
      {
        v[i+1] = v[i];
        i--;
      }
      v[i+1] = valorAtual;
   }
}

int pecaPerdida(int vetor[]){
	int peca, i;
	
	if(vetor[0] != 1){
		return 1;
	}
	if(vetor[tamanho-2] != tamanho){
		return tamanho;
	}
	for(i=0; i<tamanho-2;i++){
		if(vetor[i+1] != vetor[i]+1){
			return vetor[i]+1;
		}
	}
}

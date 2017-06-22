#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#define TAM 20000

unsigned long vetor[TAM];
int  numero, linha = 2;

double piramide(int n);
double probabilidade(unsigned long caminhos);

int main()
{
	scanf("%d", &numero);
	printf("%.2f", piramide(numero));	
}

double piramide(int n)
{
	int i, first = TAM - 2;
	vetor[first] = 1;
	
	while(linha <= n)
	{
		vetor[first-1] = 1;
		for(i = first; i < TAM-1; i++)
		{
			if(vetor[i] == 0)
			{
				vetor[i] = vetor[i-1] + vetor[i+1];
				vetor[i-1] = 0;
			}
		}
		if((linha%2) != 0)
		{
			vetor[TAM-1] = vetor[TAM-2] * 2;
			vetor[TAM-2] = 0;
		}
		linha++;
		first--;
		
	}
	printf("\ncaminhos: %d\n", vetor[TAM-1]);
	return probabilidade(vetor[TAM-1]);
}
  
double probabilidade(unsigned long caminhos)
{
	double resultado;
	int i;
	//double n = pow(0.5, (numero-1));
	resultado = caminhos/2;
	//printf("\ncaminhos: %d\n", caminhos);
	for(i=0; i<numero-2;i++)
	{
		resultado = resultado/2;
	}
	//resultado = caminhos*n;
	resultado *= 100;
	//printf("\nresultado: %.2lf\n", resultado);
	return resultado;
}




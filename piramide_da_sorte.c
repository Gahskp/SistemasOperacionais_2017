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
	printf("%.2lf", piramide(numero));	
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
	return probabilidade(vetor[TAM-1]);
}

double probabilidade(unsigned long caminhos)
{
	double resultado;
	double n = pow(2, (numero-1));
	printf("\ncaminhos: %lu\n", caminhos);
	printf("\npotencia: %f\n", n);
	resultado = caminhos/n;
	resultado *= 100;
	printf("\nresultado: %.2f\n", resultado);
	return resultado;
}




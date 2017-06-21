#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#define TAM 20000

int vetor[TAM], numero, linha = 2;

double piramide(int n);
double probabilidade(int caminhos);

int main()
{
	printf("%e", pow(2,1000));
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
	return probabilidade(vetor[TAM-1]);
}

double probabilidade(int caminhos)
{
	double resultado;
	numero -= 1; 
	resultado = caminhos / pow(2, numero);
	resultado *= 100;
	return resultado;
}




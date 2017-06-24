#include <stdio.h>
#include <stdlib.h>
#define TAM 1001

int pinos, altura, vetor[TAM], movimentos = 0, vetor_pronto[TAM], pino_ok = 0;
int tamanho_vetor, meio_vetor;

void procura_pronto(int v[]);
int min_movimentos(int alt, int v[]);
void ordena(int v[]);

int main()
{
  int i;
  scanf("%d %d", &pinos, &altura);
  for(int i = 0; i < pinos; i++){
    printf("loop4");
    scanf("%d", &vetor[i]);
  }
  tamanho_vetor = pinos;
  printf("%d", min_movimentos(altura, vetor));
}

void procura_pronto(int v[])
{
  int i, j;
  meio_vetor = 0;
  for(i=0; i<tamanho_vetor; i++)
  {
    printf("looop2");
    if(vetor[i] < altura){
      meio_vetor = i;
    }
    if(vetor[i] == altura){
      vetor[i] = 0;
      vetor_pronto[pino_ok] = vetor[i];
      pino_ok++;
      for(j=i; j<pinos-1; j)
      {
        vetor[j] = vetor[j+1];
      }
    }
  }
}

void ordena(int v[])
{
  int i, j, valorAtual;
   for( j=0; j < pinos; j++ )
   {
     printf("looop1");
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

int min_movimentos(int altura, int v[])
{
  ordena(v);
  procura_pronto(v);
  while(pino_ok != pinos){
    int min1, min2, max1, max2;
    if(meio_vetor > 0){
        min1 = meio_vetor;
      if(meio_vetor - 1 > 0){
        min2 = meio_vetor -1;
        vetor[min1]++;
        vetor[min2]++;
      } else{
        vetor[min1]++;
      }
      movimentos++;
    } else{
      if(meio_vetor + 1 < tamanho_vetor)
      {
        max1 = meio_vetor+1;
      }
      if(meio_vetor+2 < tamanho_vetor){
        max2 = meio_vetor+2;
        vetor[max1]++;
        vetor[max2]++;
      } else {
        vetor[max1]++;
      }
      movimentos++;
    }
    printf("looop3");
    procura_pronto(v);
  }
  return movimentos;
}

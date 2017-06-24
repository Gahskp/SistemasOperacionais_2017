#include <stdio.h>
#include <stdlib.h>

int pinos = 0, altura, movimentos = 0, pino_ok = 0;
int *vetor;
int *vetor_pronto;
int tamanho_vetor, meio_vetor;


void procura_pronto(int v[]);
int min_movimentos(int alt, int v[]);
void ordena(int v[]);

int main()
{
  int i = 0, x;

  scanf("%d", &pinos);
  scanf("%d", &altura);
  printf("pinos: %d\n", pinos);
  printf("altura: %d\n", altura);
  vetor = (int *)malloc(pinos * sizeof(int));
  vetor_pronto = (int *)malloc(pinos * sizeof(int));
  /*for(int i = 0; i<pinos; i++){
    scanf("%d", &x);
    vetor[i] = x;
  }*/
  while (i < pinos) {
    scanf("%d", &x);
    vetor[i] = x;
    printf("vetor %d: %d\n", i, vetor[i]);
    i++;
  }
  tamanho_vetor = pinos;
  printf("%d", min_movimentos(altura, vetor));
}

void procura_pronto(int v[])
{
  int i, j, remove = 0, w = 0;
  meio_vetor = -1;
  while(w < tamanho_vetor){
    for(i=0; i<pinos; i++)
    {
        //printf("looop2");
        if(vetor[i] == altura){
          vetor_pronto[pino_ok] = vetor[i];
          pino_ok++;
          for(j=i; j<tamanho_vetor-1; j++)
          {
            //printf("loop4");
            vetor[j] = vetor[j+1];
          }
          remove++;
        }
        if(vetor[i] < altura){
          meio_vetor = i;
        }
    }
    w++;
  }
  tamanho_vetor = tamanho_vetor - remove;
}

void ordena(int v[])
{
  int i, j, valorAtual;
   for( j=0; j < pinos; j++ )
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
   /*for(i = 0; i < pinos; i++){
    printf("\n %d \n", vetor[i]);
   }*/
}

int min_movimentos(int altura, int v[])
{
  ordena(v);
  procura_pronto(v);
  while(pino_ok < pinos){
    int min1, min2, max1, max2;
    if(vetor[meio_vetor] < altura && vetor[meio_vetor+1] > altura){
        vetor[meio_vetor]++;
        vetor[meio_vetor+1]--;
        movimentos++;
    }else {
        if(meio_vetor >= 0){
            min1 = meio_vetor;
          if(meio_vetor - 1 >= 0){
            min2 = meio_vetor -1;
            vetor[min1]++;
            vetor[min2]++;
          } else{
            vetor[min1]++;
          }
          movimentos++;
        } else {
            //printf("%d %d", meio_vetor, tamanho_vetor);
            //system("pause");
            if(meio_vetor + 1 < tamanho_vetor)
            {
                max1 = meio_vetor+1;
                if(meio_vetor+2 < tamanho_vetor){
                    max2 = meio_vetor+2;
                    vetor[max1]--;
                    vetor[max2]--;
                } else {
                    vetor[max1]--;
                }
                movimentos++;
                printf("la");
            }
        }
    }
    procura_pronto(v);
  }
  return movimentos;
}

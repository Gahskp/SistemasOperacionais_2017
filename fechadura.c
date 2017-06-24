#include <stdio.h>
#include <stdlib.h>

int pinos = 0, altura, movimentos = 0;
int *vetor;
int *vetor_pronto;
int tamanho_vetor, divisao;


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
  int i, j, pronto = 0;
  for(i=0; i<tamanho_vetor; i++){
    while (vetor[i] == altura) {
      if(i == tamanho_vetor-1){
        vetor[i] = 0;
      } else{
        for(j=i; j<tamanho_vetor-1; j++){
          vetor[j] = vetor[j+1];
        }
      }
      tamanho_vetor--;
    }
  }

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
  printf("\nalo");
  while(tamanho_vetor > 0){
    if(vetor[0] < altura && vetor[tamanho_vetor-1] > altura && tamanho_vetor-1 > 0 ){
      vetor[0]++;
      vetor[tamanho_vetor]--;
      movimentos++;
    } else {
      if(vetor[0] < altura && vetor[tamanho_vetor-1] < altura && tamanho_vetor-1 > 0){
        vetor[0]++;
        vetor[tamanho_vetor-1]++;
        movimentos++;
      } else{
        if(vetor[0] > altura && vetor[tamanho_vetor-1] > altura && tamanho_vetor-1 > 0){
          vetor[0]--;
          vetor[tamanho_vetor-1]--;
          movimentos++;
        } else{
          if(vetor[0] < altura){
            vetor[0]++;
            movimentos++;
          }else {
            if(vetor[0] > altura){
              vetor[0]--;
              movimentos++;
            }
          }
        }
      }
    }
  }
  /*printf("\nTamanho do vetor: %d ", tamanho_vetor);
  for(int i = 0; i<tamanho_vetor; i++){
    printf("\nVetor %d: %d", i, vetor[i] );
  }*/
  return movimentos;
}

#include <stdio.h>
#include <stdlib.h>

struct hole{
    int tam;
    struct hole *prox;
    struct hole *ante;
};

struct hole *header, *posicaoNext;
int minha_memoria = 1024;

void inicializa_mem(int mem);
void * meu_aloca(int size);
void * meu_aloca_worst(int size);
void * meu_aloca_best(int size);
void * meu_aloca_next(int size);
void meu_desaloca(void * ponteiro);
void mostra_mem();

int main()
{
  int *a1, *a2, *a3, *a4, *a5, *a6, *a7, *a8, *a9,*a10, *a11, *a12, *a13;
	inicializa_mem(minha_memoria);
  a1  =  meu_aloca_next(10);
  a2  =  meu_aloca_next(5);
  a3  =  meu_aloca_next(20);
  //a4  =  meu_aloca_next(30);
  //a5  =  meu_aloca_next(15);
  //a6  =  meu_aloca_next(40);
  //a7  =  meu_aloca_next(60);
  //a8  =  meu_aloca_next(80);
  //a9  =  meu_aloca_next(100);
  printf("** Primeira Alocação **\n");
  mostra_mem();
  /*meu_desaloca( a2 );
  meu_desaloca( a4 );
  meu_desaloca( a5 );
  meu_desaloca( a7 );
  meu_desaloca( a9 );
  printf("** Segunda Alocação **\n");
  mostra_mem();
  a10 =  meu_aloca_next(3);
  printf("** Terceira Alocação **\n");
  mostra_mem();
  a11 =  meu_aloca_next(20);
  printf("** Quarta Alocação **\n");
  mostra_mem();
  a12 =  meu_aloca_next(12);
  printf("** Quinta Alocação **\n");
  mostra_mem();
  a13 =  meu_aloca_next(40);
  printf("** Sextou Alocação **\n");
  mostra_mem();*/
}




void mostra_mem(){
  struct hole *atual;
  atual = header;
  while (atual != NULL) {
    if(atual -> tam > 0)
      printf("Free: %d\n", atual -> tam );
    else
      printf("Full: %d\n", atual -> tam );
    atual = atual -> prox;
  }
}

void inicializa_mem(int mem)
{
	header = malloc(mem);  //header recebe um ponteiro para o tamanho requesitado
	header -> tam = mem - sizeof(struct hole);    //O tamanho restante � 1024 menos o tamanho j� utilizado por hole
	header -> ante = NULL; //Anterior n�o aponta para nada ainda
	header -> prox = NULL; //Proximo n�o aponta para nada ainda
  posicaoNext = header;
	//printf("endere�o que header recebeu: %d / tamanho que header.tam guarda: %d / tamanho de um hole: %d",
	// header, (header -> tam), sizeof(struct hole));
	//printf("%d \n", header);
	//header = header + header->tam;
	//printf("%d", header);
}

void *meu_aloca(int size)
{
	void *aux;
	struct hole *atual, *anterior;
	atual = header;
	while(atual != NULL)
	{
		if(atual -> tam > size + sizeof(struct hole))
    {
			aux = atual;
			aux = aux + atual -> tam - size;
      atual -> tam -= size + sizeof(struct hole);
      anterior = atual;
			atual = aux;
			atual -> ante = anterior;
			atual -> prox = anterior -> prox;
			anterior -> prox = atual;
			atual -> tam = (-1)*size;
			if(atual -> prox != NULL)
			{
				atual -> prox -> ante = atual;
			}
			return (aux + sizeof(struct hole));
		}
		atual = atual -> prox;
	}
}


void meu_desaloca(void * ponteiro)
{
  struct hole *atual, *anterior, *proximo;
  atual = ponteiro - sizeof(struct hole);
  atual -> tam *= (-1);
  anterior = atual -> ante;
  proximo  = atual -> prox;
  if(anterior != NULL && anterior -> tam > 0){
    anterior -> prox = proximo;
    anterior -> tam += atual -> tam + sizeof(struct hole);
    atual -> ante = NULL;
    atual -> prox = NULL;
    if(anterior -> prox != NULL)
    {
      proximo -> ante = anterior;
    }
  } else
  {
    if(proximo != NULL && proximo -> tam > 0)
    {
      atual -> prox = proximo -> prox;
      atual -> tam += proximo -> tam + sizeof(struct hole);
      proximo -> ante = NULL;
      proximo -> prox = NULL;
      if(atual->prox != NULL)
      {
        atual -> prox -> ante = atual;
      }
    }
  }
  proximo  = atual -> prox;
}

void * meu_aloca_worst(int size)
{
	void *aux;
	struct hole *atual, *anterior, *maior;
	atual = maior = header;
	while(atual != NULL)
	{
		if(atual -> tam > maior -> tam)
    {
      maior = atual;
		}
		atual = atual -> prox;
	}
  if(maior -> tam > size + sizeof(struct hole))
  {
    aux = maior;
    aux = aux + maior -> tam - size;
    maior -> tam -= size + sizeof(struct hole);
    anterior = maior;
    maior = aux;
    maior -> ante = anterior;
    maior -> prox = anterior -> prox;
    anterior -> prox = maior;
    maior -> tam = (-1)*size;
    if(maior -> prox != NULL)
    {
      maior -> prox -> ante = maior;
    }
    return (aux + sizeof(struct hole));
  }
}

void * meu_aloca_best(int size)
{
	void *aux;
	struct hole *atual, *anterior;
	atual = header;
	while(atual != NULL)
	{
		if(atual -> tam > size + sizeof(struct hole))
    {
			aux = atual;
			aux = aux + atual -> tam - size;
      atual -> tam -= size + sizeof(struct hole);
      anterior = atual;
			atual = aux;
			atual -> ante = anterior;
			atual -> prox = anterior -> prox;
			anterior -> prox = atual;
			atual -> tam = (-1)*size;
			if(atual -> prox != NULL)
			{
				atual -> prox -> ante = atual;
			}
			return (aux + sizeof(struct hole));
		}
		atual = atual -> prox;
	}
}

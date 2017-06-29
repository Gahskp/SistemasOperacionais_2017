#include <stdio.h>
#include <stdlib.h>

struct hole{
    int tam;
    struct hole *prox;
    struct hole *ante;
};

struct hole *header;
int minha_memoria = 1024;

void inicializa_mem(int mem);
void * meu_aloca(int size);
int merge(struct hole * anterior, struct hole * posterior);
void meu_desaloca(void * ponteiro);
void mostra_mem();

int main()
{
  int *a1, *a2, *a3, *a4;
	inicializa_mem(minha_memoria);
  a1 = meu_aloca(35);
  //printf("%d\n", a1);
  a2 = meu_aloca(40);
  //printf("%d\n", a2);
  a3 = meu_aloca(20);
  //printf("%d\n", a3);
  a4 = meu_aloca(30);
  //printf("%d\n", a4);
  /*meu_aloca(25);
  meu_aloca(40);
  meu_aloca(60);
  meu_aloca(80);
  meu_aloca(100);*/
  //meu_desaloca(a4);
  //meu_desaloca(a2);
  mostra_mem();
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
    //printf("%d\n", atual->tam );
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
      //printf("*****%d\n", atual->tam);
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

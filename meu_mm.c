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
void meu_libera(void * ponteiro);
void mostra_mem();

int main()
{
	inicializa_mem(minha_memoria);
}

void inicializa_mem(int mem)
{
	header = malloc(mem);  //header recebe um ponteiro para o tamanho requesitado
	header -> tam = mem - sizeof(struct hole);    //O tamanho restante é 1024 menos o tamanho já utilizado por hole 
	header -> ante = NULL; //Anterior não aponta para nada ainda
	header -> prox = NULL; //Proximo não aponta para nada ainda
	//printf("endereço que header recebeu: %d / tamanho que header.tam guarda: %d / tamanho de um hole: %d",
	// header, (header -> tam), sizeof(struct hole));
	printf("%d \n", header);
	header = header + header->tam;
	printf("%d", header);
}

void *meu_aloca(int size)
{
	void *aux;
	struct hole *atual, *anterior;
	atual = header;
	while(atual != NULL)
	{
		if((atual -> tam) > (size + sizeof(struct hole))){
			aux = atual;
			aux = aux + atual -> tam - size;
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
	return;
}


void meu_libera(void * ponteiro)
{
	struct hole *atual, *anterior, *proximo;
	atual = header;
	while(atual != NULL)
	{
		if((atual + sizeof(struct hole)) == ponteiro)
		{
			anterior = atual -> ante;
			anterior -> prox = NULL;
			if((atual -> prox) != NULL)
			{
				proximo = atual -> prox;
				anterior -> prox = proximo;
				proximo -> ante = anterior;
			}
			atual -> tam = atual -> tam *(-1);
			anterior -> tam = anterior -> tam + atual -> tam + sizeof(struct hole);
			return;
		}
		atual = atual -> prox;
	}
}

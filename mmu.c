#include <stdlib.h>
#include <stdio.h>

struct header{
    int tam;
    struct header *prox;
    struct header *ant;
};
struct header *lista;

void inicializa_mem(int n);
void *meu_aloca(int n);
int main(void)
{
    inicializa_mem(200);

}

void inicializa_mem(int tam)
{
    lista = malloc(tam);
    lista -> prox = NULL;
    lista -> ant = NULL;
    lista -> tam = tam - sizeof(struct header);
}
void *meu_aloca(int size)
{
    void *aux;
    struct header *atual, *anterior;
    atual = lista;
    while(atual != NULL)
    {
        if(atual -> tam > tam + sizeof(*struct header))
        {
            aux = atual;
            aux = aux + atual->tam - size;
            anterior = atual;
            atual = aux;
            atual -> ant = anterior;
            atual -> prox = anterior -> prox;
            anterior -> prox = atual;
            atual -> tam = (-1)*size;
            if(atual -> prox != NULL)
            {
                atual -> prox -> ant = atual;
            }
            return (aux + sizeof(struct header));
        }
    }
    return NULL;
}

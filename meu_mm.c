#include <stdio.h>
#include <stdlib.h>

struct hole{
    int tam;
    struct hole *prox;
    struct hole *anterior;
};

int memoria = 1024;

void inicializa_mem();
void * meu_aloca(int tam);
int merge(struct hole * anterior, struct hole * posterior);
void meu_libera(void * ponteiro);
void mostra_mem();

int main()
{

}

void inicializa_mem()
{

}

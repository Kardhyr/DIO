========================================
# AULA 10
========================================

## CRIANDO VARIÁVEIS COM PROPRIEDADE READONLY E PRIVATE


```ts

    interface Cachorro {
        nome: string;
        idade: number;
        parqueFavorito?: string;
    }

    type CachorroSomenteLeitura = {
        readonly [K ib keyof Cachorro]-?: Cachorro[K];
    }

    class meuCachorro implements Cachorro {
        nome;
        idade;
        parqueFavorito;

        constructor(nome, idade) {
            this.nome = nome;
            this.idade = idade;
        }
    }

    const cao = new MeuCachorro('Kira', 7);

```

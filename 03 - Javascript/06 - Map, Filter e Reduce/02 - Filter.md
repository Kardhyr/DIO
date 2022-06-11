========================================
# 1 FILTER E SINTAXE
========================================

## FILTER

Passa um array por um "filtro" onde apenas os itens que corresponderem a determinada condição serão retornados. Ele cria um novo array e mantém o original intacto.

## SINTAXE

```js
//JS

        array.filter(callback, thisArg);

```

 - ***callback***: função a ser executada em cada elemento.

 - ***thisArg** (opcional)*: valor `this` dentro da função `callback`.

Exemplo:

```js
//JS

    const frutas = ['maçã fuji', 'maçã verde', 'laranja', 'abacaxi'];

    frutas.filter((fruta) => fruta.includes('maçã'));
    // > ['maçã fuji', 'maçã verde'];

```

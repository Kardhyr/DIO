========================================
# 1 REDUCE
========================================

## REDUCE

Executa uma função em todos os elementos do array, retornando um valor único.


## SINTAXE

```js
//JS

        array.reduce(callbackFn, initialValue);

```
 - ***callback***: função a ser executada a partir do acumulador.

 - ***initialValue** (opcional)*: valor sobre o qual o retorno final atuará.

Exemplo:

```js
//JS

    const callbackFn = function(accumulator, currentValue, index, array) {
        // faz alguma coisa...
    };

    array.reduce(callbackFn, initialValue);

```

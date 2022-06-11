========================================
# 1 APRESENTAÇÃO
========================================

## INTRODUÇÃO AO TEMA

Instrutora: Stephany Nusch



========================================
# 2 O QUE É, SINTAXE E MAP VS FOREACH
========================================

## O QUE É?

O método `map()` pertence ao conjunto de funções disponíveis no objeto `array` para facilitar a sua manipulação. Basicamente, ele faz a leitura de todos os elementos do array, executa uma função callback para cada um e devolve como retorno um **novo array**.


## SINTAXE
> <br>A explicação foi retirada do [blog Be Tribe](https://blog.betrybe.com/javascript/javascript-map/).<br><br>

O método `map()` é acionado a partir de uma array e utiliza uma função callback como argumento. Confira a sintaxe, a seguir:

```js
//JS
        let arrayOriginal = [];
        arrayOriginal.map(
            funcao_callback(
                elementoAtual,
                indice,
                arrayOriginal
            ),
            thisArgumento);

```
No qual:

 - **arrayOriginal**: corresponde ao objeto do tipo array que contém os elementos originais;
 - **funcao_callback**:
    - ***elementoAtual***: representa o elemento corrente durante o loop de execução do método;
    - ***indice***: valor opcional que corresponde à posição do `elementoAtual` no array;
    - ***arrayOriginal***: conteúdo opcional
     que representa o array de origem;
 - **thisArgumento**: valor opcional que corresponde ao `this` utilizado pela `função_callback`.


## MAP VS FOREACH

Ao utilizar `map()`, o array original é mantido intacto e um novo array é criado na saída.

O `forEach` necessita de um array auxiliar para armazenar os valores.

```js
//JS

    // Uso do map
    const array = [1, 2, 3, 4, 5];
    
    array.map((item) => item * 2);  // > [2, 4, 6, 8, 10]


    // Uso do forEach
    const array = [1, 2, 3, 4, 5];

    array.forEach((item) => item * 2);  // undefined

```

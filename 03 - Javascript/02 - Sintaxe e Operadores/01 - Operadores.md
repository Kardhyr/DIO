========================================
# 1 APRESENTAÇÃO
========================================

## Introdução ao tema

Instrutora - Stephany Nusch

O objetivo do curso é entender sobre operadores.
O ideal é verificar primeiro o módulo seguinte, `Variáveis e Tipos`.
Depois você tenta esse módulo, pois uma questão terá como opções de saída os valores `null` e `undefined` dentre as alternativas.



========================================
# 2 OPERADORES
========================================

## ATRIBUIÇÃO

![operadores de atribuição](https://miro.medium.com/max/1400/1*v768JCEh8_5VdXIfCnOuzQ.png)


## ARITMÉTICOS

```
    Adição              +
    Subtração           -
    Multiplicação       *
    Divisão             /
    Exponenciação       **
    Módulo              %
    Incremento          ++
    Decremento          -- 
```


## COMPARAÇÃO

```
    Igual                   ==      sem checagem de tipo
    Mesmo valor/tipo        ===     com checagem de tipo
    Diferente               !=
    Valor/tipo diferente    !==
    Maior que               >
    Menor que               <
    Maior ou igual          >=
    Menor ou igual          <=


```


## LÓGICOS

```
    AND         &&      Compara se X E Y são verdadeiros
    OR          ||      Compara se X OU Y são verdadeiros
    NOT         !       Inverte o valor verdade de X
```


## TERNÁRIO (condicional)

Permite escrever de modo mais simples, e numa única linha, uma avaliação do tipo `IF-ELSE`. Veja o exemplo abaixo:

```js
//JS
        var num = 3;
        if (num >= 10) {
            console.log('É maior.');
        } else {
            console.log('É menor.');
        }
```

```js
//JS
        num >= 10 ? console.log('É maior.') : console.log('É menor.');
```

A expressão avalia uma condição e retorna a primeira primeira instrução se for verdade, do contrário retorna a segunda instrução. 
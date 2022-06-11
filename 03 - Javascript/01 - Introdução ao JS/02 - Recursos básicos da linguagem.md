========================================
# 1 MANIPULANDO UM ARQUIVO
========================================

## COMENTÁRIOS

```js
// Isso é um comentário de linha

/* Isso é
um comentário
de bloco */
```

## VARIÁVEIS E CONSTANTES

As variáveis podem mudar seus valores ao longo do programa.
Constantes manterão seu valor inicial ao longo do programa.

Para declarar uma variável:

        var desconto = 0.2;

Para declarar uma constante:

        const SOBRENOME = 'Nusch';

*Note que as constantes são escritas em letras maiúsculas.*



========================================
# 2 FUNÇÕES
========================================

## DECLARAR FUNÇÕES

```js
        function soma(a, b) {
            console.log(a + b);
            return a + b;
        }
```

 - A função `soma(a, b)` recebe os parâmetros `a` e `b` como referência.
 - `console.log()` *imprime* informações no terminal.
 - `return` é utilizado quando precisamos processar uma função e devolver um valor.


## CHAMADA DE FUNÇÕES

 ```js
        soma(3, 5);
 ```

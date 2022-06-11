========================================
# 1 IF/ELSE E SWITCH
========================================

## IF / ELSE

É uma estrutura condicional que executa um bloco de instruções se algo o resultado da avaliação for `true` e outro bloco se for `false`.


![Exemplo de IF/ELSE](https://dkrn4sk0rn31v.cloudfront.net/uploads/2021/02/exemplo-else.png)

Um bloco de `IF/ELSE` pode ser reduzido e simplificado, o que é encorajado para que se mantenha o mínimo de código, desde que seja possível manter também a inteligibilidade.

```js
//JS
    // Versão inicial do bloco IF/ELSE
    function numeroPositivo(num) {
        let resultado;

        if(num < 0) {
            resultado = false;
        } else {
            resultado = true;
        }

        return resultado;
    }

```

```js
//JS
    // Versão simplificada
    function numeroPositivo(num) {
        let resultado;

        const EH_NEGATIVO = num < 0;

        if(EH_NEGATIVO) {
            resultado = false;
        } else {
            resultado = true;
        }

        return resultado;
    }

```

```js
//JS
    // Versão minimalista
    function numeroPositivo(num) {
        const EH_NEGATIVO = num < 0;

        if(EH_NEGATIVO) {
            return false;
        }
        
        return true;
    }

```

Esse nível de código leva algum tempo para ser alcançado, mas facilita bastante a vida.


## SWITCH / CASE

Estrutura utilizada em URA e sistemas onde você precisa fornecer um número finito de opções ao usuário. É ideal para quando se tem muitos valores.

![Exemplo de Switch/Case](https://miro.medium.com/max/762/1*0KACYGFFuTfXQcVpL70CeA.png)

Equivale a uma comparação de tipo e valor (`===`) e sempre precisa de um valor padrão (`default`).



========================================
# 2 FOR E WHILE
========================================

## FOR

É uma estrutura de repetição utilizada para percorrer elementos iteráveis (`arrays` e `strings`). 


```js
//JS

    function multiplicaPorDois(arr) {
        let multiplicados = [];

        for(let i = 0; i < arr.length; i++) {
            multiplicados.push(arr[i] * 2);
        }

        return multiplicados;
    }

    const MEUS_NUMEROS = [2, 33, 456, 40];

    multiplicaPorDois(MEUS_NUMEROS);

    // > [4, 66, 912, 712, 80]

```


## FOR...IN

Loop que retorna propriedades *enumeráveis* de um objeto. É uma forma mais simples (e mais limpa) de iterar.


```js
//JS

    // Exibir os ATRIBUTOS do objeto
    function forInExemplo(obj) {
        for(prop in obj) {
            console.log(prop);
        }
    }

    const MEU_OBJETO = {
        nome: "João",
        idade: 20,
        cidade: "Salvador"
    }

    forInExemplo(MEU_OBJETO);

    /* > nome
       > idade
       > cidade
    */

```

```js
//JS

    // Exibir os VALORES do objeto
    function forInExemplo(obj) {
        for(prop in obj) {
            console.log(obj[prop]);
        }
    }

    const MEU_OBJETO = {
        nome: "João",
        idade: 20,
        cidade: "Salvador"
    }

    forInExemplo(MEU_OBJETO);

    /*
       > João
       > 20
       > Salvador
    */

```


## FOR...OF

Loop utilizado em estruturas *iteráveis* (`arrays`, `strings`).

```js
//JS

    function logLetras(palavra) {
        for(letra of palavra) {
            console.log(letra);
        }
    }

    const PALAVRA = 'abacaxi';

    logLetras(PALAVRA);

    /*
       > a
       > b
       > a
       > c
       > a
       > x
       > i
    */

```

```js
//JS

    function logNumeros(nums) {
        for(num of nums) {
            console.log(num);
        }
    }

    const NUMS = [30, 20, 233, 2];

    logNumeros(NUMS);

    /*
       > 30
       > 20
       > 233
       > 2
    */

```


# WHILE

Loop que executa um bloco de instruções desde que sua condição seja `true`.


```js
//JS

    function exemploWhile() {
        let num = 0;

        while(num <= 5) {
            console.log(num);
            num++;
        }
    }

    exemploWhile();

    /*
       > 0
       > 1
       > 2
       > 3
       > 4
       > 5
    */

```


## DO...WHILE

Similar ao anterior, porém a primeira execução SEMPRE ocorrerá e só depois ele avalia se a condição é `true` ou `false`.

```js
//JS

    function exemploDoWhile() {
        let = num = 6;

        do {
            console.log(num);
            num++;
        } while (num <= 5);
    }

    exemploDoWhile();

    /*
       > 6 
    */

```

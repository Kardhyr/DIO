========================================
# 1 APRESENTAÇÃO
========================================

## ESTRUTURA

```js
//JS

        function nome(parametros) {
            //instruções

            return; //valor de retorno
        }

```

Variáveis criadas dentro de uma função só podem ser utilizadas dentro da própria função.

O comando `return` é utilizado quando uma função executa operações e precisa devolver alguma informação.



========================================
# 2 ESTRUTURA E FUNÇÃO ANÔNIMA
========================================

## FUNÇÃO ANÔNIMA

```js
// JS

    const SOMA = function (a, b) {
        return a + b;
    }

    SOMA(1, 2)  // 3
```


========================================
# 3 FUNÇÃO AUTOINVOCÁVEL E CALLBACKS
========================================

## FUNÇÃO AUTOINVOCÁVEL

É conhecida como **IIFFE** - *Immediately Invoked Function Expression* (Expressão de Função Invocada Imediatamente).

```js
//JS

    (
        function() {
            let name = "DIO";
            return name;
        }
    )();

```

Pode receber parâmetros e também pode ser armazenada em variáveis.

```js
//JS

        const SOMA3 = (
            function() {
                return a + b;
            }
        )(1, 2);

```


## CALLBACKS

É uma função passada como argumento para outra função. Ela permite um maior controle na ordenação das chamadas de funções.

```js
        const calc = function(operacao, num1, num2) {
            return operacao(num1, num2);
        }

        const soma = function(num1, num2) {
            return num1 + num2;
        }

        const sub = function(num1, num2) {
            return num1 - num2;
        }

        const RESULTADO_SOMA = calc(soma, 1, 2);
        const RESULTADO_SUB = calc(sub, 1, 2);


        console.log(RESULTADO_SUB);  // -1
        console.log(RESULTADO_SOMA);  // 3
```

========================================
# 1 CRIANDO UM CONTADOR
========================================

## HTML

O código gira em torno da div com o `id="counter"`. O JS é chamado usando o atributo `onclick` e isso faz o contador mudar.

```html
HTML
        <!doctype html>
        <html lang="pt-br">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./assets/css/style.css">
                <title>Contador</title>
            </head>
            <body>
                <h1>Contador</h1>
                <div id="counter">
                    <button name="subtrair" onclick="decrement()">-</button>
                    <span id="currentNumber">0</span>
                    <button name="adicionar" onclick="increment()"><span id="plus">+</span></button>
                </div>
                <p>Clique nos botões para alterar o valor.</p>
                <script src="./assets/js/scripts.js"></script>
            </body>
        </html>
```


## Javascript

Primeiro armazenamos o conteúdo do id `currentNumber` do nosso HTML na variável `currentNumberWrapper`.
Depois definimos um contador com valor inicial de zero.
Em seguida são criadas as funções `increment()` e `decrement()`.
Toda vez que clicarmos nos botões, o valor de zero será alterado.

```js
// JS
        var currentNumberWrapper = document.getElementById('currentNumber');
        var currentNumber = 0;
        function increment() {
            currentNumber = currentNumber + 1;
            currentNumberWrapper.innerHTML = currentNumber;
        }

        function decrement() {
            currentNumber = currentNumber - 1;
            currentNumberWrapper.innerHTML = currentNumber;
        }

```

O desafio é bem simples, mas já mostra as interações do JS com o HTML através do DOM.



========================================
# 2 DESAFIO TO-DO LIST
========================================

## DICA
Há muito conteúdo no site [HTML NET](http://html.net/tutorials/javascript/). <br>
Além dele há também o [W3Schools](https://www.w3schools.com/js/). <br>
São bons lugares para se explorar e conseguir informações para completar as atividades.

Desafio: [Github da instrutora](https://github.com/stebsnusch/introducao-ao-javascript)
========================================
# 1 Métodos
========================================

## ESTRUTURA DO HTML

As três formas de apontar para um elemento HTML são pela tag (ex: `<body>`), identificador (`id="meu_id"`) ou sua classe (`class="minha_classe"`).

```html
<!-- HTML DE EXEMPLO -->
<html>
    <head>
        <title>Minha página</title>
    </head>

    <body>

        <h1 id="titulo">Minha página</h1>

        <section class="textos">
            <h2>Sobre mim</h2>
            <p>Texto sobre a pessoa aqui.</p>
        </section>

        <section class="textos">
            <h2>Meus projetos</h2>
            <ul>
                <li>Projeto 1</li>
                <li>Projeto 2</li>
                <li>Projeto 3</li>
            </ul>
        </section>

    </body>
</html>

```

```js
// JS

        // Método que retorna um array de elementos (use índice para escolher)
        document.getElementsByTagName('li');
        // > <h1 id="titulo">Minha página</h1>


        // Método que retorna valores pelo ID 
        document.getElementById('titulos');
        /*
            [
                <li>Projeto 1</li>,
                <li>Projeto 2</li>,
                <li>Projeto 3</li>
            ]
        */


        // Método que retorna um array de elementos 
        document.getElementsByClassName('textos');
        /*
            [
                <section class="textos">
                  <h2>Sobre mim</h2>
                  <p>Texto sobre a pessoa aqui.</p>
                </section>,

                <section class="textos">
                  <h2>Meus projetos</h2>
                  <ul>
                    <li>Projeto 1</li>
                    <li>Projeto 2</li>
                    <li>Projeto 3</li>
                  </ul>
                </section>
            ]
        */

```

Outra forma de selecionar elementos é utilizando o método `querySelectorAll()`:

```html
<!-- HTML DE EXEMPLO -->
<html>
    <head>
        <title>Exemplo querySelectorAll</title>
    </head>

    <body>

        <div class="primeira-classe segunda-classe">
            <ul>
                <li classe="opcao">Opção 1</li>
                <li classe="opcao">Opção 2</li>
                <li classe="opcao">Opção 3</li>
            </ul>
        </div>

    </body>
</html>

```


```js
// JS

        document.querySelectorAll('.primeira-classe .segunda-classe');
        /*
            <div class="primeira-classe segunda-classe">
                <ul>
                    <li classe="opcao">Opção 1</li>
                    <li classe="opcao">Opção 2</li>
                    <li classe="opcao">Opção 3</li>
                </ul>
            </div>
        */

        document.querySelectorAll('li .opcao');
        /*
            <li classe="opcao">Opção 1</li>
            <li classe="opcao">Opção 2</li>
            <li classe="opcao">Opção 3</li>
        */

```

O `querySelectorAll` retornará ***um array*** com todos os elementos que correspondam à condição passada como parâmetro.


## ADICIONAR / REMOVER

```js
// JS

        //Criar um novo elemento HTML
        document.createElement(element);

        // Adiciona um elemento HTML
        document.appendChild(element);

        // Substitui um elemento HTML
        document.replaceChild(novo, antigo);

        // Remove um elemento HTML
        document.removeChild(element);

```

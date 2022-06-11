========================================
# 1 TIPOS E ACIONANDO EVENTOS
========================================

## EVENTOS

Representam as interações do usuário com a página.

Lista de eventos:
 - mouse:
    - mouseover: quando o mouse passa por cima do elemento;
    - mouseout: quando o mouse sai de cima do elemento;
 - click:
    - click: ao clicar no elemento;
    - dbclick: ao usar clique duplo no elemento;
 - atualização:
    - change: acionado quando o valor do elemento (campo) muda;
    - load: ocorre quando um elemento na página carrega;


## ACIONANDO EVENTOS

Para disparar eventos, podemos utilizar um `Event Listener`. Diretamente no JS, cria-se um evento que será acionado no momento em que o usuário realizar determinada ação.

```js
// JS

        const botao = document.getElementById("meuBotao");

        botao.addEventListener("click", outraFuncao);

```

Outra Forma é adicionar o evento diretamente na tag HTML.

```html

<html>
    <head>
        <title>Exemplo de evento no HTML</title>
    </head>
    <body>
        <h1 onclick="mudaTexto(this)">Clique AQUI!</h1>

        <script>
            function mudaTexto(id) {
                id.innerHTML = "Mudei!";
            }
        </script>
    </body>
</html>

```

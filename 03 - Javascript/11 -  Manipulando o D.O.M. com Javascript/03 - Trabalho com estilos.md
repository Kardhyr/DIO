========================================
# 1 TRABALHANDO COM ESTILOS
========================================

## CLASSES

Através de `id`, `class` e `pseudo-elementos` é possível editar estilos no CSS.

```html
        <div id="meu-elemento" class="classe">
            <!-- resto do código e conteúdo aqui -->
        </div>
```
Primeiro criamos uma constante com o elemento que queremos manipular:

```js
// JS

        const meuElemento = document.getElementById('meu-elemento');

```
Depois podemos usar essa constante para interagir com nosso elemento:

```js
// JS - Adicionar a classe "novo-estilo"

        meuElemento.classList.add('novo-estilo');

```

```js
// JS - Remover a classe "classe"

        meuElemento.classList.remove('classe');

```

```js
// JS - Adicionar/remover a classe "dark-mode" (se existir remove e vice-versa)

        meuElemento.classList.toggle('dark-mode');

```

Resultado após rodar os exemplos acima:

```html

        <div id="meu-elemento" class="novo-estilo dark-mode">
            <!-- resto do código e conteúdo aqui -->
        </div>

```
Para acessar diretamente o CSS de um elemento:

```js
// JS

        document.getElementByTagName("p").style.color = "blue";

```

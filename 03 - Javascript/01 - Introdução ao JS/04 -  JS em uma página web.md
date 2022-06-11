========================================
# 1 ESTRUTURA DE PROJETO
========================================

## ESTRUTURA BÁSICA

Crie a pasta principal do projeto. Dentro dela, crie:
 - index.html
 - pasta `assets`

Dentro da pasta `assets`crie as pastas:
 - css
 - js

A pasta *assets* comporta toda a estrutura de arquivos que não sejam HTML. Assim, nela teremos imagens, áudios e vídeos, bem como arquivos css, js e afins.

```css
                ESTRUTURA FINAL

raiz
    |-- index.html
    |-- assets/
             |-- css/
             |     ∟ style.css
             |-- js/
                   ∟ scripts.js
```



========================================
# 2 INSERINDO JS NUMA PÁGINA HTML
========================================

## INSERIR O JS E CSS NO HTML

Em geral, o código JS será colocado após o fechamento da tag `body`. Por enquanto colocaremos o JS junto do CSS, ambos dentro da tag `head`.

```html
HTML
        <head>

            <link rel="stylesheet" href="./assets/css/style.css">

            <script src="./assets/js/scripts.js"></script>

            <title>Curso de JS</title>

        </head>
```



========================================
# 3 INTERAGINDO COM OS ELEMENTOS DO DOM
========================================

## SOBRE O DOM

*Document Object Model* é a estrutura dos elementos dentro da janela.

![Árvore DOM](https://www.kirupa.com/html5/images/DOM_js_72.png)


## PERCORRENDO A ESTRUTURA DO DOM

No console (via navegador), utilize o comando:

```js
    	document.getElementsByTagName('h1');
```

Ele retornará uma lista com todos os `h1` do documento **html**.


## ATRIBUINDO O RESULTADO A UMA VARIÁVEL

```js
        var heading1 = document.getElementsByTagName('h1')[0];
```
Agora o resultado da nossa busca ficará armazenado numa variável.


## SOBRESCREVENDO O CSS VIA JS

```js
        heading1.style.color = 'red';
```

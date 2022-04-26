========================================
# 1 INTRODUÇÃO AO CURSO DE HTML
========================================

## ESTRUTURA BÁSICA

Instrutor - Lucas Vilaboim
```html
        <!doctype html>
        <html lang="pt-br">
            <head>
                <meta charset="utf-8">
                <title>Modelo</title>
            </head>
            <body>
            </body>
        </html>
```



========================================
# 2 ENTENDENDO O QUE É SEMÂNTICA
========================================

## SEMÂNTICA - PARTE 1

```html
        <body>
            <header>
                cabeçalho
            </header>
            <main>
                corpo
            </main>
            <footer>
                rodapé
            </footer>
        </body>
```

## SEMÂNTICA - PARTE 2

```html
        <body>
            <header>
                <h1>Cabeçalho da Página</h1>
            </header>
            <main>
                <section>
                    <header>
                        <h2>Cabeçalho de seção - Posts</h2>
                    </header>
                    <article>
                        <header>
                            <h3>Cabeçalho do Artigo - Post X</h3>
                        </header>
                    </article>
                </section>
            </main>
            <footer>
                rodapé
            </footer>
        </body>
```



========================================
# 3 COMO USAR TEXTOS E LINKS EM HTML
========================================

## TAGS PARA TEXTOS

 - \<h***n***><\/h***n***> - títulos, sendo o h***1*** de maior tamanho e h***6*** de menor tamanho.
 - \<p>\</p> - criação de parágrafos.
 - \<br> - pular linhas


## TAGS PARA LINKS

Para a criação de links, utilizamos a tag ***\<a>***, a qual recebe pelo menos 2 atributos:

 - href="" \- *define o endereço de destino*
 - target="" \- *define onde o link deve ser aberto (mesma aba, nova aba ou nova janela)*

Ex:

        <a href="https://google.com" target="_blank">Google</a>

Resultado: <a href="https://google.com" target="_blank">Google</a>


## EXERCÍCIO PRÁTICO

```html
        <body>
            <header>
                <h1>Cabeçalho da Página</h1>
            </header>
            <main>
                <section>
                    <header>
                        <h2>Cabeçalho de seção - Posts</h2>
                    </header>
                    <article>
                        <header>
                            <h3>Cabeçalho do Artigo - Post X</h3>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed neque posuere, luctus erat ac, imperdiet nibh. In mollis accumsan ultricies. - <a href="https://google.com" target="_blank"> Google it!</a><br />
                        email: <a href="mailto:nome@provedor.com"><br />
                        Tel: <a href="tel:+5521987654321">
                        </p>
                    </article>
                </section>
            </main>
            <footer>
                rodapé
            </footer>
        </body>
```



========================================
# 4 COMO INSERIR IMAGENS EM SEU SITE
========================================

## TAG IMG

Recebe os atributos SRC e ALT. O primeiro é obrigatório e o segundo garante acessibilidade.

```html
        <img src="" alt="">
```


## EXERCÍCIO PRÁTICO

```html
        <body>
            <header>
                <h1>Cabeçalho da Página</h1>
                <img src="https://images.unsplash.com/photo-1541513201385-0c74246a6dee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Imagem de perfil contendo um gatinho">
            </header>
            <main>
                <section>
                    <header>
                        <h2>Cabeçalho de seção - Posts</h2>
                    </header>
                    <article>
                        <header>
                            <h3>Cabeçalho do Artigo - Post X</h3>
                            <img src="https://images.unsplash.com/photo-1529101091764-c3526daf38fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1333&q=80" alt="Descrição...">
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed neque posuere, luctus erat ac, imperdiet nibh. In mollis accumsan ultricies. - <a href="https://google.com" target="_blank"> Google it!</a><br />
                        email: <a href="mailto:nome@provedor.com"><br />
                        Tel: <a href="tel:+5521987654321">
                        </p>
                    </article>
                </section>
            </main>
            <footer>
                rodapé
            </footer>
        </body>
```

Banco de imagens: <a href="https://unsplash.com">Unsplash</a>

Compressor de imagens: <a href="https://tinypng.com">Tiny PNG</a>



========================================
# 5 COMO ORGANIZAR LISTAS COM HTML
========================================

## TAGS LI, UL E OL

Listas agrupam coleções de itens.

- UL - Lista não ordenada.
- OL - Lista ordenada.
- LI - Item da lista.


## EXERCÍCIO PRÁTICO

```html
        <body>
            ...
            <footer>
                <ul>
                    <li>
                        <a href="#">Link 1
                    </li>
                    <li>
                        <a href="#">Link 2
                    </li>
                    <li>
                        <a href="#">Link 3
                    </li>
                </ul>
            </footer>
        </body>
```



========================================
# 6 INTRODUÇÃO E CONCEITOS BÁSICOS DO CSS3
========================================

## INTRODUÇÃO AO CSS3

São fohas de estilo em cascata. Interagem com os elementos do HTML através dos atributos ID (não repete) e CLASS (pode repetir).

Como boa prática, JAMAIS insira regras CSS direto no elemento HTML.

```html
        <p style="color:red;">Texto vermelho</p>
```

Você pode criar temporariamente o CSS no próprio documento HTML, desde que exporte isso para um arquivo externo ao final.

```html
        <head>
            <style>
                p {
                    color: blue;
                }
            </style>
            <title>Página HTML</title>
        </head>
```

Por fim, a forma correta de trabalhar com o CSS é criar um arquivo `.css` e importá-lo no `head` da página.

```html
        <head>
            <link rel="stylesheet" href="./style.css">
            <title>Página HTML</title>
        </head>
```

```html
HTML
        <body>
            <header>
                <h1>Cabeçalho da Página</h1>
                <img src="..." alt="imagem 1">
            </header>
            <main>
                <section>
                    <header>
                        <h2>Cabeçalho de seção - Posts</h2>
                    </header>
                    <article>
                        <header>
                            <h3>Cabeçalho do Artigo - Post X</h3>
                            <img src="..." alt="imagem 2">
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed neque posuere, luctus erat ac, imperdiet nibh. In mollis accumsan ultricies. - <a href="https://google.com" target="_blank"> Google it!</a><br />
                        email: <a href="mailto:nome@provedor.com"><br />
                        Tel: <a href="tel:+5521987654321">
                        </p>
                    </article>
                </section>
            </main>
            <footer>
                rodapé
            </footer>
        </body>
```


## CONCEITOS BÁSICOS

### Box-model
Possui 4 níveis de interação.

![Box-model](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiQ4NjELttA4JwhRxi6z4vzVbk08Tt_sBDCg&usqp=CAU) 
 - Conteúdo: é o próprio texto ou imagem.
 - padding: distância entre o conteúdo e a borda.
 - border: o limite de espaço ocupado pelo conteúdo.
 - margin: distância entre a borda e outros elementos ao redor.

### Estilizando elementos

Para interagir com os elementos do HTML via CSS, você precisa dos seletores. Para isso você pode usar IDs, Classes ou as próprias tags do HTML.

```html
HTML
        <body>
            <header>
                <h1 class="decoracao_italico">Cabeçalho da <span id="pagina">Página</span></h1>
                <img src="..." alt="imagem 1">
                <p>Outro texto de <span class="decoracao_italico">exemplo</span>.</p>
            </header>
        </body>
```

```css
CSS

h1 {
    color: green;
    margin: auto;
}

p {
    text-align: justify;
}

.decoracao_italico {
    font-style: italic;
}

#pagina {
    color: red;
}
```


========================================
# 7 ESTILIZANDO ELEMENTOS, TEXTOS E LI...
========================================

## ESTILIZANDO ELEMENTOS

Para ajustar medidas existem 3 possibilidades:
 - Utilizar um único valor que será atribuído a todas as direções > `padding: 5px;`

 - Utilizar um valor para altura e outro para largura (Y, X) > `padding: 20px 10px;`

 - Atribuir cada direção separadamente (cima, direita, baixo, esquerda) > `padding: 20px 10px 5px 0px;`

Como última opção, pode-se definir os paddings um a um:

```css
CSS
.espacamento_individual {
    padding-top: 20px;
    padding-right: 10px;
    padding-bottom: 5px;
    padding-left: 0;
}

.espacamento_Y_X {
    padding: 20px 10px;
}

.espacamento1_coletivo {
    padding: 20px;
}
```

> CORES DE FUNDO
Estilizamos as cores de fundo com o atributo `background`.

```css
CSS
.fundo_vermelho {
    background-color: red;
    background-image: url("fundo.png");
    background-position: top;
}
```

Forma simples usando código RGB:
```css
CSS
.fundo {
    background: rgb(255, 0, 0);
}
```

> BORDER
Para definir bordas:
```css
CSS
.borda {
    border: 3px solid blue;
}
.circulo {
    border-radius: 50%;
}
```
`border-radius` arredonda os cantos da borda. Se for definido em 50%, o conteúdo será condicionado num círculo.


## ESTILIZANDO TEXTOS

> Tipo de FONTE: `font-family: Verdana, Arial, "Times New Roman";`

> Itálico: `font-style: italic;`

> Negrito: `font-weight: bold;`

> Alterar case da fonte: `text-transform: uppercase | lowercase;`

> Riscado: `text-decoration: line-through;`


## ESTILIZANDO LISTAS

> Tipo de marcador: `list-style-type: square | upper-roman;`

> Imagem como marcador: `list-style-image: url("link");`



========================================
# 8 DIMENSÃO E ALINHAMENTO
========================================

## PROPRIEDADES DE DIMENSÕES E ALINHAMENTO

 - **width**: Define a largura.
 - **height**: Define a altura.

 - **max-width**: Define a largura máxima.
 - **max-height**: Define a altura máxima.
 
 *O atributo `max` pode ser substituído por `min`, tendo resultado inverso.*
 
 - **margin**: Pode receber o valor `auto`, alinhando o conteúdo no centro da tela.
 
 - **text-align**: Alinha textos (`left | right | center | justify`).
 
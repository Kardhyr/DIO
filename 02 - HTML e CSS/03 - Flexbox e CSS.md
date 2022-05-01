========================================
# 1 INTRODUÇÃO AO CURSO FLEXBOX EM CSS
========================================

## APRESENTAÇÃO DO CURSO

Instrutora - Karen Santos


## PROPOSTA DE PROJETO FINAL

Construção de uma landing page com a aplicação de todos os conceitos abordados durante o curso.


## INTRODUÇÃO AO FLEX BOX

Projetado como um modelo de layout unidimensional e como um método que pode oferecer distribuição de espaço entre itens em uma interface e recursos de alinhamento.

> FLEX CONTAINER

Tag "pai" que armazena os itens 'filhos' a serem alinhados. É definido pelo atributo-valor `display:flex;` no CSS.

![Flex Container](https://res.cloudinary.com/pingback/image/upload/q_auto/imgs/user/1418/gallery/bymje9hne22mqt2qzttx)

```css
CSS
.container {
    display: flex;
}
```
Possui as seguintes propriedades relacionadas:
 - display: inicializa o flexbox.
 - flex-direction: define a direção linha/coluna.
 - flex-wrap: quebra de linha.<br /><br />
 - flex-flow: abreviação de `direction` e `wrap`.<br /><br />
 - justify-content: alinha itens do container de acordo com sua direção.
 - align-items: alinha itens de acordo com seu eixo, do container.
 - align-content: alinha as linhas do container.

```css
CSS
.container {
    display: flex;
}
body {
    flex-flow: column nowrap;
}

main {
    flex-flow: row nowrap;
}
```

```html
HTML
    <body class="container">
        <header>
            <h1>Tìtulo da página</h1>
        </header>
        <main class="container">
            <section>Seção 1 - Coluna esquerda</section>
            <section>Seção 2 - Coluna central</section>
            <section>Seção 3 - Colun direita</section>
        </main>
        <footer>
            ...
        </footer>
```

> FLEX ITEM

São elementos filhos diretos do **flex container**. Podem se tornar pais de subitens. Desde que um elemento tenha subelementos, ele pode ser pai destes subelementos de forma recursiva.

Possui as seguintes propriedades relacionadas:
 - flex-grow: define fator de crescimento.
 - flex-basis: tamanho base do item antes da divisão de espaço.
 - flex-shrink: capacidade de redução.<br /><br />
 - flex: abreviação de `grow`, `shrink` e `basis`.<br /><br />
 - order: define ordenação dos itens.
 - flex-: alinha um item específico do container.



========================================
# 2 FUNDAMENTOS DO FLEXBOX [PT1] 
========================================

## ESTRUTURA BÁSICA

*A seguir são apresentadas as estruturas do flexbox e suas aplicações práticas. Deixo aqui o resumo de tudo isso.*

```css
CSS
        display: flex;
```

Transforma o elemento num **flex container** e, consequentemente, todos os <ins>subelementos diretos</ins> em **flex items**.

***
<br>

```css
CSS
        flex-direction: row;
```

Define o eixo principal do container e o fluxo dos itens.
Valores:
 - `row`: padrão (esquerda para a direita)
 - `row-reverse`: inverte o fluxo padrão.
 - `column`: de cima para baixo.
 - `column-reverse`: inverte o fluxo.

***
<br>

```css
CSS
        flex-wrap: nowrap;
```
Define se o conteúdo deve quebrar ou não de linha quando não houver espaço suficiente na linha atual. Por padrão, nenhum item quebra a linha e isso causa vazamento de contéudo para além de seu container.
Valores:
 - `nowrap`: padrão (não quebra há quebra de linha)

 - `wrap`: assim que não houver espaço para um item na linha atual, o container iniciará uma nova linha com esse elemento e os demais repetindo o processo até que todos os conteúdos tenham sido condicionados adequadamente.

 - `wrap-reverse`: Ao completar uma linha, o próximo item será alocado acima ao invés de abaixo.

***
<br>

```css
CSS
        flex-flow: row nowrap;
```
É a forma simplificada de escrever as instruções `flex-direction` e `flex-wrap` numa única linha.

***
<br>

```css
CSS
        justify-content: flex-start;
```
Responsável pelo alinhamento dos itens dentro do container e de sua distribuição em relação ao espaço disponível no container. Caso o item ocupe 100% do container, essa propriedade não se aplica.
Valores:
 - `flex-start`: padrão (início do container)
 
 - `flex-end`: final do container
 
 - `center`: centro do container
 
 - `space-between`: alinha o primeiro elemento à esquerda, o segundo a direita e dispõe os demais no centro, sempre mantendo distância equidistante entre eles.
 
 - `space-around`: mantém equidistanciamento entre os itens, tendo as bordas inicial e final (do container) metade do espaço entre os demais itens. Se a distância entre dois itens for de 100px, a borda inicial e final terão 50px, cada uma.

***
<br>

```css
CSS
        align-items: stretch;
```
Alinha os itens do container de acordo com o eixo e seu comportamento é diferente para linhas e colunas. Permite alinhar itens no centro quando aplicado a uma coluna.
Valores:
 - `stretch`: padrão (itens crescem igualmente)

 - `flex-start`: alinha os itens no início
 
 - `center`: alinha os itens no centro

 - `flex-end`: alinha os itens no fim

 - `baseline`: alinha de acordo com a linha base da tipografia dos itens

***
<br>

```css
CSS
        align-content: stretch;
```
Manipula as linhas do container em relação ao eixo vertical do mesmo, desde que o container utilize quebra de linha e que a altura do container seja maior que a soma das linhas dos itens.
Valores:
 - `stretch`: padrão (itens crescem igualmente)

 - `flex-start`: alinha os itens no início
 
 - `center`: alinha os itens no centro

 - `flex-end`: alinha os itens no fim

 - `space-between`: alinha os elementos espaçando-os equidistantemente.
 
 - `space-around`: mantém equidistanciamento entre os itens, tendo as bordas inicial e final (do container) metade do espaço entre os demais itens. Se a distância entre dois itens for de 100px, a borda inicial e final terão 50px, cada uma.



========================================
# 3 FUNDAMENTOS DO FLEXBOX [PT2] 
========================================

## PROPRIEDADES DE DIMENSÕES E ALINHAMENTO

*A seguir temos a continuação das aulas onde são apresentadas as estruturas do flexbox e suas aplicações práticas. Deixo aqui o resumo de tudo isso.*

```css
CSS
        flex-grow: 0;
```

Define a proporcionalidade de crescimento entre os itens, respeitando sempre o tamanho dos conteúdos internos. Se a propriedade `justify-content` for aplicada ao container, `flex-grow` deixa de agir.

***
<br>

```css
CSS
        flex-basis: auto;
```

Define o tamanho padrão de um elemento antes que o espaço restante seja distribuído.
Valores:
 - `auto`: caso não haja definição de altura/largura, será proporcional ao conteúdo do item.
 - medidas: são os valores exatos, previamente definidos (`px`, `%`, `em`, etc)
 - 0 (zero): terá relação com a definição do `flex-grow`
***
<br>

```css
CSS
        flex-shrink: ;
```

Propriedade que estabelece a capacidade de redução e compressão do tamanho do item.
***
<br>

```css
CSS
        flex: 1 1 0;
```

*Shorthand* para as propriedades `grow`, `shrink` e `basis`. Economiza linhas de escrita.

***
<br>

```css
CSS
        order: 0;
```

Define a ordenação dos itens dentro do container.

***
<br>

```css
CSS
        align-self: auto;
```

Define o alinhamento individual de um item dentro do container. Não funciona se houver a propriedade `align-items`
Valores:

 - `auto`: padrão (respeitará a definição do `align-items` do container)

 - `flex-start`: alinha o item no início do container

 - `center`: alinha o item no centro de acordo com o eixo do container

 - `flex-end`: alinha o item no final do container

 - `stretch`: ocupa todo o espaço relativo

 - `baseline`: utiliza a linha base da tipografia



========================================
# 4 PROJETO INTEGRADOR 
========================================

## BAIXAR PROJETO

[Gitlab contendo o projeto](https://gitlab.com/karensantos/project-flexbox-dio)

O foco está no CSS, então a instrutora já deixou todo o HTML pronto (precisei ajustar algumas coisas).
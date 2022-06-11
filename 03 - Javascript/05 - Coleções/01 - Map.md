========================================
# 1 APRESENTAÇÃO
========================================

## INTRODUÇÃO AO TEMA

Instrutora: Stephany Nusch



========================================
# 2 ESTRUTURA, MÉTODOS E MAP VS OBJETO
========================================

## ESTRUTURA

```js
            const myMap = new Map();
```

 - É uma coleção de arrays no formato [chave, valor];

 - Pode ser iterado por um loop `for...of`;


## MÉTODOS

 - `myMap.set('item', 'descrição');` - Adiciona elemento(s);

 - `myMap.get(item);` - Retorna o descritor do item;

 - `myMap.delete('item');` - Elimina um item e seu descritor;

```js
//JS

    const myMap = new Map();

    myMap.set('apple', 'fruit');
    // Map(1) {"apple" => "fruit"}

    myMap.get('apple');
    // "fruit"

    myMap.delete('apple');
    // true

    myMap.get('apple');
    // undefined

```


## DIFERENÇAS ENTRE MAP E OBJETO

 MAPS:
 - Aceitam chaves de qualquer tipo;
 - Possuem a propriedade `length`;
 - São fáceis de iterar;
 - Recomendado quando o valor das chaves é desconhecido;
 - Valores possuem o mesmo tipo; 

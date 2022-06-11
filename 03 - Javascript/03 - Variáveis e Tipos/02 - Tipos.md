========================================
# 2 TIPOS DE DADOS
========================================

## ESTRUTURAS DE DADOS

JS possui tipagem dinâmica, não sendo necessário indicar o tipo de dado. Para verificar o tipo do dado use `typeof variavel`.


## TIPOS PRIMITIVOS DE DADOS

números, strings, boleanos, null e undefined


## DADOS COMPOSTOS / NÃO PRIMITIVOS

Objetos e arrays (listas)


## STRINGS

São escritos entre aspas ou crases.
Ex: 'João', "Ana", `Bruno ${sobrenome}`;

Métodos de Strings:
 - txt.concat(text2) - concatena 2 strings;

 - txt.length - retorna o tamanho de uma string;

 - txt.includes('termo') - verifica se a string possui o termo buscado;

 - txt.startsWith('termo') - verifica se a string começa com o termo buscado;
 
 - txt.endsWith('termo') - verifica se a string começa com o termo buscado;

 - txt.replace('termo_original', 'novo_termo') - substitui termos;


## NÚMEROS

Tipo básico. Apoia-se na biblioteca Math para facilitar suas operações.

Métodos de Math:
 - Math.PI - retorna o valor de PI;

 - Math.floor(x) - retorna o valor inteiro arredondando para baixo;

 - Math.ceil(x) - retorna o valor inteiro arredondando para cima;

 - num.toString(x) - converte valores em texto;


## BOLEANOS

Retornam `true` ou `false` em verificações condicionais.
Seu resultado pode ser invertido adicionando-se uma exclamação antes da variável.


## ARRAYS

Métodos de listas:

 - lista.unshift() - Adiciona um elemento na primeira posição;

 - lista.shift() - remove o elemento na primeira posição;

 - lista.push(x) - adiciona um elemento na última posição;

 - lista.pop() - remove o elemento na última posição;

 - lista.includes(x) - verifica se existe o elemento x na lista;

 - lista.every(item => item === x) - verifica se todos os itens são iguais a x;

 - lista.some(x) = verifica se o elemento x existe na lista;

 - lista.reverse() = inverte a ordenação de todos os termos;


Percorrer uma lista:

```js
//JS
let lista = [1, 3, 5, 7, 9, 2, 4, 6, 8, 0]

        for(let i=0; i < lista.length; i++) {
            console.log(lista[i]);
        }

```


## OBJETOS

São construções onde a variável recebe um conjunto de pares chave-valor.

```js
//JS

        // Declara um objeto;
        let pessoa = {};

```

```js
//JS

        // Cria a chave (atributo) nome e
        // define seu valor inicial para Jack;
        pessoa.nome = 'Jack';

        pessoa["sobrenome"] = 'Nusch';

```

Métodos com objetos:
 - Object.values(pessoa) - retorna os valores do objeto;

 - Object.keys(pessoa) - retorna as chaves do objeto;

```js
//JS

        // Acessar valores

        pessoa.nome;

        person['nome'];

        // ambos os métodos fazem a mesma coisa

```


## EMPTY, UNDEFINED E NULL

 - Empty - se for um tipo numérico de valor ZERO ou uma lista/string vazia;

 - null - ocorre se você declara que o valor NÃO EXISTE; Retorna sempre `falsy` em avaliações boleanas (mesmo que seja comparado com `false`, retornará false, pois é um valor nulo);

 - undefined - quando não se declara a variável e nem o valor; Se ela for declarada e não atribuída, também será *undefined*;
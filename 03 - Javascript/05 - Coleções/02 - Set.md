========================================
# 1 ESTRUTURA, MÉTODOS E SET VS ARRAY
========================================

## ESTRUTURA

São estruturas que armazenam **valores únicos**.

```js
        const mySet = new Set();
```


## MÉTODOS

 - `mySet.add('n');` - Adiciona um novo elemento;

 - `mySet.has('n');` - Verifica se o elemento existe;

 - `mySet.delete('n');` - Remove um elemento;


## DIFERENÇAS ENTRE SET E ARRAY

 SET:
 - Possuem valores únicos;
 - Ao invés da propriedade `length`, utiliza `size`;
 - Não possui métodos como `map`, `filter`, `reduce` e etc (métodos de array);



========================================
# 2 ATIVIDADE PRÁTICA
========================================


```js
//JS - ATIVIDADE 1

    function getAdmins(map) {
        admins = [];
        for([key, value] of map) {
            if(value === 'Admin') {
                admins.push(key);
            }
        }

        return admins;

    }

    const usuarios = new Map();

    usuarios.set('Luiz', 'Admin');
    usuarios.set('Stephany', 'Admin');
    usuarios.set('Jorge', 'User');

    console.log(getAdmins(usuarios));

```
```js
//JS - ATIVIDADE 2

    const meuArray = [30, 30, 40, 5, 223, 2049, 3034, 5];

    function valoresUnicos(arr){
        const mySet = new Set(arr);

        return [...mySet];
    }

    console.log(valoresUnicos(meuArray));

```

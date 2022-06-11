========================================
# 1 SINTAXE E OUTRAS RESTRIÇÕES
========================================

## Arrow Functions

São funções reduzidas. Quando escritas em apenas uma linha, não precisam das chaves e do `return` (pois ele é presumido). Caso tenha mais linhas, `return` torna-se opcional (dependente apenas do seu objetivo, claro).

```js
//JS

    // Função escrita por extenso
    const helloWorld = function() {
        return 'Hello World';
    }

    // Função de uma linha escrita com arrow function
    const helloWorld = () => 'Hello world';

    // Função de mais linhas escrita com arrow function
    const helloWorld = () => {
        return 'Hello world';
    };


// Caso possua apenas uma linha, dispensa chaves e return;

```

```js
//JS

    const soma = (a, b) => a + b;
    soma (4, 6);
    // > 10

    const soma = x => x;
    soma(4);
    // > 4


// Caso possua apenas UM parâmetro, dispensa o uso de parênteses;

```
<style>
    .atn {color:red;  font-size:32px;  font-weight:bolder;  padding:0 10px;}
</style>

> <br><span class='atn'>!</span> ARROW FUNCTIONS não fazem `hoisting.`<br><br>


## OUTRAS RESTRIÇÕES EM ARROW FUNCTIONS

 - `this` sempre será o objeto global; Métodos para modificar seu valor não funcionarão;
 - `arguments` não existe como objeto e não pode ser acessado;
 - Construtores como '`new MeuObjeto()`' não podem ser utilizados;



========================================
# 2 ATIVIDADE PRÁTICA
========================================

```js
//JS - ATIVIDADE 1

    const alunos = [
        {
        nome: 'João',
        nota: 5,
        turma: '1B',
        },
        {
        nome: 'Ana',
        nota: 9,
        turma: '1B',
        },
        {
        nome: 'Lipe',
        nota: 6,
        turma: '2C',
        },
        {
        nome: 'Bruno',
        nota: 3,
        turma: '2C',
        }
    ];

    function alunosAprovados(arr, media) {
        let aprovados = [];
        
        for (let i = 0; i < arr.length; i++) {
            
            const {nota, nome} = arr[i];

            if(nota >= media) {
                aprovados.push(nome);
            }
        }
        return aprovados;
    }

    console.log(alunosAprovados(alunos, 5));

```


```js
//JS - ATIVIDADE 2

    function calculaIdade(anos) {
        return `Daqui a ${anos} anos, ${this.nome} terá ${this.idade + anos} anos de idade.`;
    }

    const animal = {
        nome: 'Kira',
        idade: 5
    }

    const pessoa = {
        nome: 'Nanda',
        idade: 18
    }

    console.log(calculaIdade.call(pessoa, 30));
    console.log(calculaIdade.call(animal, 3));

    console.log(calculaidade.apply(pessoa, [30]));
    console.log(calculaidade.apply(pessoa, [3]));
```

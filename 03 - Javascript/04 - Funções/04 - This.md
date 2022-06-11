========================================
# 1 O QUE É *THIS*
========================================

## THIS

É uma referência de contexto. Quando utilizado dentro de um objeto, indica que a referência é ao próprio objeto e suas características.

```js
//JS

    const PESSOA = {
        firstName: 'Ana',
        lastName : 'Nusch',
        id       : 1,
        fullName : function() {
            return {this.firstName} + " " + this.lastname; 
        },
        getId    : function() {
            return this.id;
        }
    };

    PESSOA.fullname();
    // > Ana Nusch

    PESSOA.getId();
    // > 1

```

<style>
    table, th, td {
		text-align: center;
		border:1px solid #C0C0C0;
		padding:5px;
    }
</style>
<table class="demo">
	<caption>Contextos do THIS</caption>
	<thead>
	<tr>
		<th>CONTEXTO</th>
		<th>REFERÊNCIA</th>
	</tr>	</thead>	<tbody>	<tr>
		<td>&nbsp;Em um objeto (método)</td>
		<td>&nbsp;Próprio objeto (dono do método)&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;Sozinha</td>
		<td>&nbsp;Objeto global (em navegadores, <b>window</b>)</td>
	</tr>
	<tr>
		<td>&nbsp;Função</td>
		<td>&nbsp;Objeto Global</td>
	</tr>
	<tr>
		<td>&nbsp;Evento</td>
		<td>&nbsp;Elemento que recebeu o evento</td>
	</tr>
	</tbody>
</table>

O mais comum é que `this` seja utilizado dentro de métodos construtores para objetos.

```js
//JS

    function Pessoa(nome, idade) {
        this.nome = nome;
        this.idade = idade;
    }

    let pessoa1 = new Pessoa("Julia", 23);

    console.log(pessoa1);

```


========================================
# 2 MNIPULANDO SEU VALOR
========================================

## MÉTODO *CALL*

Permite escrever um método que pode ser usado em diferentes objetos. Em javascript, TODAS as funções são métodos de objetos.

```js
//JS

    const PESSOA = {
        nome: 'Taylor',
    };

    const ANIMAL = {
        nome: 'Kira',
    }

    function getSomething() {
        console.log(this.nome);
    }

    getSomething.call(PESSOA);
    // > Taylor

    getSomething.call(ANIMAL);
    // > Kira

```


## APPLY

Na passagem de argumentos utilizando `call`, separam-se os argumentos com vírgula, enquanto com o `apply` isso será feito utilizando-se colchetes para indicar uma lista.

```js
//JS

    const myObj = {
        num1: 2,
        num2: 4,
    };

    function soma(a, b) {
        console.log(this.num1 + this.num2 + a + b);
    }

    // Chamada usando APPLY
    soma.apply(myObj, [1, 5]);
    // > 12

    // Chamada usando CALL
    soma.call(myObj, 2, 6);
    // > 14

```


## BIND

Clona a estrutura da função onde é chamada e aplica o valor do objeto passado como parâmetro.

```js
//JS

    function retornaNomes = function() {
        return this.nome;
    }

    let bruno = retornaNomes.bind({nome: 'Bruno'});

    bruno();
    // > Bruno

```

> No final das contas, a aula era sobre this, mas na prática foi sobre outros métodos relacionados a ele.

`¯\_(ツ)_/¯`
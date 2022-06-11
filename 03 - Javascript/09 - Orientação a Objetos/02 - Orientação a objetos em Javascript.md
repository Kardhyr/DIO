========================================
# 1 PROTÓTIPOS E CLASSES
========================================

## PROTÓTIPOS

Todos os objetos JavaScript herdam propriedades e métodos de um `prototype`. O objeto `Object.prototype` está no topo da cadeia. Quando chamamos um método de um objeto, ele procura na classe pelo método chamado e, não encontrando, busca na classe pai.

![Protótipos em JS](https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Object_prototypes/mdn-graphics-person-person-object-2.png)


> Cadeia de herança:
`Crow` => `Bird` => `Animal.constructor` => `Function` => `Function.prototype.constructor` => `Object() {}` => `Object.prototype = null`;

**Classes não existem no JS.*

Para a criação de classes é utilizada uma `Syntatic sugar`, a qual é uma sintaxe feita para facilitar a escrita de código.

```js
//JS - SINTAXE ANTIGA

    var Meal = function(food) {
        this.food = food;
    }

    Meal.prototype.eat = function() {
        return '😋';
    }

```


```js
//JS - SINTAXE NOVA

    classe Meal {
        constructor(food){
            this.food = food;
        }

        eat() {
            return '😋';
        }
    }

```

Como o JS não possui classes nativamente, todas as classes são objetos e a herança se dá por protótipos.

```js
//JS - Classe pai

    class Animal {
        // Método construtor com um valor padrão para o tipo
        constructor(type = 'animal') {
            this.type = type;
        }

        // Os métodos Getters e Setters garantem o controle de acesso
        get type(){
            return this.type;
        }

        set type(val){
            this.type = val.toUpperCase();
        }

        // Método da classe
        makeSound(){
            console.log('Making animal sound');
        }
    }

    let a = new Animal();
    console.log(a.type);
    // > ANIMAL

```

```js
// JS - Classe filha, a qual herdará elementos da classe pai

    class Cat extends Animal {
        constructor(){
            //Método construtor reescrevendo o tipo da classe
            super('cat');
        }

        makeSound() {
            super.makeSound();
            console.log('Meow!');
        }
    }

    let b = new Cat();
    console.log(b.type);
    // > CAT

```
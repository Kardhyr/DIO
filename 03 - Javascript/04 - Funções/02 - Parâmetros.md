========================================
# 1 VALORES PADRÃO E OBJETOS "ARGUMENTS"
========================================

## VALORES PADRÃO

Podemos definir valores padrão para os argumentos, assim, quando não forem enviados pelo usuário na entrada de dados, serão substituídos por algum valor predefinido.

```js
//JS

    function exponencial(array, num = 1) {
        //argumentos...
    }

```


## OBJETO *"ARGUMENTS"*

É uma lista com todos os parâmetros que foram passados quando a função foi chamada. É utilizado quando não se sabe a quantidade de argumentos necessários.

```js
//JS

        function findMax() {
            let max = -Infinity;

            for (let i = 0; i < arguments.length; i++) {
                if (arguments[i] > max) {
                    max = arguments[i];
                }
            }
            return max;
        }

    // > findMax(1, 2, 3, 6, 90, 1)
    // < 90

```


========================================
# 2 ARRAYS E OBJETOS
========================================

## SPREAD

Método para lidar separadamente com os elementos de um *array* (lista).

```js
//JS

    function sum(x, y, z) {
        return x + y + z;
    }

    const NUMBERS = [1, 2, 3];

    // Usar "...NUMBERS" faz com que cada elemento de NUMBERS
    // seja enviado como um parâmetro diferente.
    console.log(sum(...NUMBERS));

```


## REST

Faz o oposto, combinando os argumentos em um *array*.

```js
//JS

    function confereTamanho(...args) {
        console.log(args.length);
    }

    confereTamanho();  // 0
    confereTamanho(1, 2);  // 2
    confereTamanho(3, 4, 5);  // 3

```


## OBJECT DESTRUCTURING

Técnica em que se filtram os dados de um objeto a fim de se obter as partes que interessam.

```js
//JS

    const USER = {
        id: 42,
        displayName = 'jdoe',
        fullName: {
            firstName: 'John',
            lastName: 'Doe'
        }
    };

    function userId({id}) {
        return id;
    }

    function getFullName({fullName: {firstName: first, lastname: last}}) {
        return `${first} ${last}`;
    }

    userId(USER);

    getFullName(USER);

```

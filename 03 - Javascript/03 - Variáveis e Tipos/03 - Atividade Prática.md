========================================
# 1 VERIFICANDO PALÍNDROMO
========================================

## RESOLUÇÃO

```js
//JS

    function verificaPalindromo(string){
        if(!string) return;

        if (string === string.split("").reverse().join("")){
            return "\'${palindromo}\' é um palíndromo";
        }
        return "\'${palindromo}\' não é um palíndromo";
    }

console.log(verificaPalindromo('roma me tem amor'))

console.log(verificaPalindromo('eu vi uma uva'))

console.log(verificaPalindromo('subi no onibus'))

```

========================================
# 2 SUBSTITUIR NÚMEROS PARES
========================================

## RESOLUÇÃO

```js
//js

    function removePares(array) {
        if (!array) return -1;
        if (!array.length) return -1;
        
        for (let i = 0; i < array.length; i++) {
            if (array[i] === 0) {
                console.log("Você já é zero.");
            }
            else if (array[i] % 2 == 0) {
                console.log("Substituindo ${array[i]} por 0...");
                array[i] = 0;
            }
        }
        console.log(array);
    }


```
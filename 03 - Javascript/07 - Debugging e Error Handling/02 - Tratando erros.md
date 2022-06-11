========================================
# 1 THROW, TRY/CATCH E FINALLY
========================================

## THROW

É parecido com o `return`, mas gera saídas distintas. Onde o `return` gera uma `string` de saída, o `throw` gerará um comportamento de erro, o qual disponibiliza detalhes do erro em si.

```js
//JS
    // Função com return
    function verificaPalindromo(string) {
        if (!string) return "String inválida";

        return string === string.split('').reverse().join()('');
    }

    verificaPalindromo('cat');

```
```js
//JS
    // Função com throw
    function verificaPalindromo(string) {
        if (!string) throw "String inválida";

        return string === string.split('').reverse().join()('');
    }

    verificaPalindromo('cat');

```

## TRY...CATCH

Verifica um trecho de código e verifica por erros. Caso exista algum erro, será executado o bloco `catch()`.

```js
//JS
    function verificaPalindromo(string) {
        if (!string) throw "String inválida";

        return string === string.split('').reverse().join()('');
    }

    function tryCatchExemplo(string) {
        try {
            verificaPalindromo(string);
        }
        catch(e) {
            console.log(e);
        }
    }

    tryCatchExemplo('');

```


## FINALLY

É uma instrução que será chamada independente de haver erro ou não.

```js
//JS
    function verificaPalindromo(string) {
        if (!string) throw "String inválida";

        return string === string.split('').reverse().join()('');
    }

    function tryCatchExemplo(string) {
        try {
            verificaPalindromo(string);
        }
        catch(e) {
            throw e;
        }
        finally {
            console.log("A string enviada foi: " + string);
        }
    }

    tryCatchExemplo('');

```

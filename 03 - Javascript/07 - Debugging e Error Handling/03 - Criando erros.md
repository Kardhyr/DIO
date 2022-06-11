========================================
# 1 O OBJECT ERROR
========================================

## SINTAXE

```js
//JS

    new Error(message, fileName, lineNumber)
    // Todos os parâmetros opcionais.

    const MeuErro = new Error('Mensagem Inválida');

    throw MeuErro;

```

## NOMEANDO ERROS

```js
//JS

    const MeuErro = new Error('Mensagem Inválida');
    MeuErro.name = 'InvalidMessage';

    throw MeuErro;

```

```js
//JS
```

```js
//JS
```
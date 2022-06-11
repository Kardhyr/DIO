========================================
# AULA 7
========================================

## O QUE SÃO GENERIC TYPES

Útil para a tipagem de conteúdo.

```js
        function adicionaApendiceALista<T>(array: any[], valor: T) {
            return array.map(() => valor);
        }

        adicionaApendiceALista([1, 2, 3], 1);

```

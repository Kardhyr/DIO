========================================
# AULA 11
========================================

## COMO IMPORTAR BIBLIOTECAS COM TYPESCRIPT

> Chame o `tsc --init`

Se nomes coincidirem entre suas variáveis e as das bibliotecas, as interfaces serão somadas.

```ts
// arquivo typings.d.ts

    interface JQuery {
        novaFuncao(): void;
    }

```


```ts
// jQuery

    import $ from 'jquery';

    $.fn.extend({
        novaFuncao() {
            console.log('Chamou nova função!');
        }
    });

    $('body').novaFuncao();

```

NÃO SEI!

ELE NÃO EXPLICOU.

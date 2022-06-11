========================================
# 1 APRESENTAÇÃO
========================================

## INTRODUÇÃO AO TEMA

Instrutora: Stephany Nusch

Objetivo: Explicar a necessidade dos módulos e como utilizá-los.



========================================
# 2 UTILIZANDO MÓDULOS
========================================

## O QUE SÃO MÓDULOS?

São arquivos JS que **importam/exportam** informações de **outros arquivos** do mesmo tipo. Funcionam de forma análoga aos arquivos CSS que são linkados uns nos outros e, finalmente, ao código HTML.

![Exemplo de Módulos no JS](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRdMCIF87O4zTyFgC_eGMNS7BiAUVkhh6p9YV21SGwizauY8aF8435-wkvNlGEEA4PKXw&usqp=CAU)

Vantagens:
 - Organização do código;
 - Compartilhamento de variáveis em escopos diferentes;
 - Explicita as dependências dos arquivos;


## EXPORTAR

Há duas formas:

 - **Named Exports**: utilizada quando você quer exportar vários pontos de um arquivo;
 ```js
 // JS - Modo declarando EXPORT antes da função

        export function mostraIdade(pessoa) {
            return `A idade de ${pessoa.nome} é ${pessoa.idade}`;
        }
        export function mostraCidade(pessoa) {
            return `Cidade onde mora ${pessoa.nome}: ${pessoa.cidade}`;
        }
        export function mostraHobby(pessoa) {
            return `${pessoa.nome} gosta de ${pessoa.hobby}`;
        }
 
 ```
 ```js
 // JS - Modo declarando EXPORT e listando os itens de exportação

        function mostraIdade(pessoa) {
            return `A idade de ${pessoa.nome} é ${pessoa.idade}`;
        }
        function mostraCidade(pessoa) {
            return `Cidade onde mora ${pessoa.nome}: ${pessoa.cidade}`;
        }
        function mostraHobby(pessoa) {
            return `${pessoa.nome} gosta de ${pessoa.hobby}`;
        }

        export {
            mostraIdade,
            mostraCidade,
            mostraHobby
        }
 
 ```

 - **Default Exports**: só pode haver um deles por arquivo; será o retorno padrão do seu arquivo.

 ```js
 // JS - Modo declarando EXPORT e listando os itens de exportação

        function mostraIdade(pessoa) {
            return `A idade de ${pessoa.nome} é ${pessoa.idade}`;
        }
        function mostraCidade(pessoa) {
            return `Cidade onde mora ${pessoa.nome}: ${pessoa.cidade}`;
        }
        function mostraHobby(pessoa) {
            return `${pessoa.nome} gosta de ${pessoa.hobby}`;
        }

        export {
            mostraIdade,
            mostraCidade,
        }
        export default mostraHobby;
 
 ```


## IMPORTAR

Também possui duas formas de importar:

 - **Named exports**:
 ```js
        import {funcao, variavel, classe} from './arquivo.js'
```


 - **Default exports**:
 ```js
        import valorDefault from './arquivo.js'
```

Também é possível criar máscaras para os imports:
```js

        import {arquivo as Apelido} from './arquivo.js';

        Apelido.metodo();

```

Para importar um arquivo inteiro, basta usar um `asterisco`:
```js

        import * as INFOS from './arquivo.js';

        INFOS.metodoA();

        console.log(INFOS.variavel);

```


## VINCULANDO AO HTML

```html

        <script type="module" src="./main.js"></script>

```
**Para fazer testes localmente (de um arquivo no seu PC), será necessário um servidor. Isso pode ser feito utilizando a extensão "Live Server" do VSCode.*


## OUTRAS CURIOSIDADES

 - Módulos estão sempre em *strict mode*;
 - Podem ser utilizadas as extensões `.js` e `.mjs`;
 - Salve seus módulos como `.mjs`;
 - Para testes locais, é necessário utilizar um servidor;
 - Ao importar, sempre lembre da extensão;
 - Comece sempre com `./` ao digitar o endereço do local de destino.
 
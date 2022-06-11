========================================
# 1 APRESENTAÇÃO
========================================

## INTRODUÇÃO AO TEMA

Instrutora: Stephany Nusch

Serão explicados os conceitos de assincronicidade, promisses e sobre como fazer requisições API.



========================================
# 2 DEFINIÇÃO, PROMISES E ASYNC/AWAIT
========================================

## DEFINIÇÃO

É algo que não ocorre ou não se efetiva ao mesmo tempo. O aprendizado em sala de aula é um evento síncrono enquanto as aulas à distância tendem a acontecer em momentos diferentes para cada estudante, logo sendo assíncrona.


## PROMISES

É um objeto de processamento assíncrono. Inicialmente seu valor é desconhecido. Ela pode, então, ser resolvida ou rejeitada.

Promises possuem 3 estados:
 - **Pending**: Pendente.
 - **Fulfilled**: Concluído.
 - **Rejected**: Rejeitado.


## ESTRUTURA DE UMA PROMISE

```js
//JS

    // Aguarde 2s e imprima "Resolvida!"
    const myPromise = new Promise((resolve, reject) => {
        window.setTimeout(() => {
            resolve(console.log('Resolvida!'));
        }, 2000);
    });

```

Também é possível encadear algumas chamadas utilizando o `await`:

```js
/JS

    await myPromise
        .then((result) => result + ' passando pelo then')
        .then((result) => result + ' e agora acabou!')
        .catch((err) => console.log(err.message));

```


## ASYNC/AWAIT

`async` define funções assíncronas e trabalha em conjunto com o `await`. o qual é um termo exclusivo que trabalha em conjunto com o `async` e as `promise`. O `await` faz a função esperar até que algo aconteça e só então ela prossegue.

```js
//JS

    // Aguarde 3s e imprima "Resolvida!"
    async function resolvedPromise(){
        const myPromise = new Promise((resolve, reject) => {
            window.setTimeout(() => {
                resolve('Resolvida!');
        }, 3000);

    });

    const resolved = await myPromise
        .then((result) => result + ' passando pelo then')
        .then((result) => result + ' e agora acabou!')
        .catch((err) => console.log(err.message));

    return resolved;
    }

```


## ASYNC/AWAIT UTILIZANDO TRY...CATCH

```js
//JS

    // Aguarde 3s e imprima "Resolvida!"
    async function resolvedPromise(){
        const myPromise = new Promise((resolve, reject) => {
            window.setTimeout(() => {
                resolve('Resolvida!');
        }, 3000);

        });

        let result;

        try{
            result = await myPromise
                .then((result) => result + ' passando pelo then')
                .then((result) => result + ' e agora acabou!');

        } catch(err) {
            result = err.message;
        }

        return result;
    }

```

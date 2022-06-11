========================================
# 1 O QUE SÃO API E FETCH
========================================

## API - APPLICATION PROGRAMMING INTERFACE

Uma API é uma forma de intermediar os resultados do *back-end* com o que é apresentado no *front-end*.

Você consegue acessá-la por meio de URLs.

API são as URL que vão nos trazer dados de outros locais.

![Funcionamento de uma API](https://miro.medium.com/max/1400/1*Xr5pQ8OGXfwOA_bcJYlnSw.jpeg)

É comum que API retornem seus dados no formato `.JSON`, portanto precisamos tratrar esses dados quando os recebermos.

```json

    {
        "description": "schema POST bank",
        "type": "object",
        "properties": {
            "id": {
                "type": "number",
                "minimum": 0
            },
            "code": {
                "type": "string"
            },
            "name": {
                "type": "string"
            }
        }
    }

```


## FETCH

A `Fetch API` fornece uma interface para buscar recursos (inclusive pela rede). Parecerá familiar para alguém que já tenha usado XMLHttpRequest, mas ela fornece um conjunto de recursos mais poderoso e flexível.

```js
//JS

    fetch(url, options)
        .then(response => response.json())
        .then(json => console.log(json));
    
    // Retorna uma Promise

```

## OPERAÇÕES NO BANCO

```js
//JS

   fetch('https://endereco-api.com', {
       method: 'GET',
       cache: 'no-cache',
   })
        .then(response => response.json())
        .then(json => console.log(json));

    // Retorna uma Promise

```

```js
//JS

   fetch('https://endereco-api.com', {
       method: 'POST',
       cache: 'no-cache',
       body: JSON.stringify(data)
   })
        .then(response => response.json())
        .then(json => console.log(json));

    // Retorna uma Promise

```

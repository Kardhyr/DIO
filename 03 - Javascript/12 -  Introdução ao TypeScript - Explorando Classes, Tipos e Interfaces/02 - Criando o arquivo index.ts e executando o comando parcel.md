========================================
# AULA 2
========================================

## EXECUTANDO O COMANDO PARCEL

O [Parcel](https://pt.parceljs.org/getting_started.html) é um empacotador de aplicações web, diferenciado pela experiência do desenvolvedor. Ele oferece uma performance extremamente rápida utilizando processamento multicore, sem a necessidade de configuração.

 - Instale o parcel com o comando `npm i parcel`

Aguarde e confirme.


## CRIANDO A ARQUITETURA DO PROJETO

Crie os arquivos:
 - index.html
 - index.ts

 No arquivo HTML, adicione o script com o caminho para o arquivo TS:

 ```html
 <!doctype html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Material Design</title>
</head>
<body>
    <script src="./index.ts"></script>
</body>
</html>
```

No arquivo `index.ts` faremos um teste de conexão:
```ts
        console.log("Teste de conexão!");
```

No arquivo `package.json`, adicionaremos uma linha de comando `start` em `scripts`:
```json
  "scripts": {
    "start":"parcel index.html",
    "test": "echo \"Error: no test specified\" && exit 1"
  },
```

Agora vamos usar o painel de comandos para executar:
```ts
    npm run start
```
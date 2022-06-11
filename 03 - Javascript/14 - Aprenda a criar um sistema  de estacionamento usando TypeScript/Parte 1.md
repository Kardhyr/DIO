========================================
# PARTE 1
========================================

## INTRODUÇÃO AO TEMA

Instrutor: Derik Soares

Observações e resumo sobre o universo do `typescript`;

Para começar, criaremos a pasta do projeto.
Abra o terminal e digite: `mkdir estacionamento`.

Na pasta do projeto, utilizamos o código `npm -p typescript tsc --init` para instalar o conteúdo necessário ao typescript e iniciar o projeto.

Use `code .` para iniciar o projeto no VScode.

Na pasta haverá o arquivo `tsconfig.json`, nele estarão as configurações do TS.



========================================
# PARTE 2
========================================


Crie um arquivo `index.html` básico e dois inputs.
Crie um botão e adicione ID a estes elementos.
Antes do `</body>`, crie uma tag de script e adicione o caminho para seu arquivo `index.js`.
Crie um arquivo `index.ts`.

> Problema no PowerShell.
Para resolver, utilizei o artigo sobre [Permissões do PowerShell](https://docs.microsoft.com/pt-br/powershell/module/microsoft.powershell.core/about/about_execution_policies?view=powershell-7.2).
O comando `Set-ExecutionPolicy -ExecutionPolicy RemoteSigned` resolveu.


A cada trecho de código escrito no arquivo `.ts`, rodaremos o comando `tsc index.ts` para transpilar o código e gerar uma versão nova do nosso arquivo `index.js`.

Versão final da aula:

```html
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/importer.css">
        <title>Estacionamento</title>
    </head>
    <body>
        <header class="glass">
            <h1>Estacionamento</h1>
        </header>
        <main>
            <section>
                <article  class="glass">
                    <h2>Meu Estacionamento</h2>
                    <form action="">

                        <input type="text" id="nome" placeholder="Veículo" autocomplete="off" />
                        <input type="text" id="placa" placeholder="Placa" autocomplete="off"/>
                        
                        <button id="cadastrar">Cadastrar</button>
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Placa</th>
                                    <th>Entrada</th>
                                    <th>Ações</th>
                                </tr>
                                <tbody id="patio"></tbody>
                            </thead>
                        </table>
                    </form>
                </article>
            </section>
        </main>
        <footer class="glass">
            Footer
        </footer>
        <script src="./assets/js/index.js"></script>
    </body>
</html>
```


```ts
// Arquivo .TS

    (function(){
    const $ = (query: string): HTMLInputElement | null => document.querySelector(query);


    $('#cadastrar')?.addEventListener('click', () => {
        const nome = $("#nome")?.value;
        const placa = $("#placa")?.value;

        if (!nome || !placa) {
            alert('Todos os campos são obrigatórios.');
            return;
        }
    })
})();

```
========================================
# CÓDIGO FINAL
========================================

```html

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/importer.css">
        <title>Estacionamento</title>
    </head>
    <body>
        <header class="glass">
            <h1>Estacionamento</h1>
        </header>
        <main>
            <section>
                <article  class="glass">
                    <h2>Meu Estacionamento</h2>
                    <div class="form">

                        <input type="text" id="nome" placeholder="Veículo" autocomplete="off" />
                        <input type="text" id="placa" placeholder="Placa" autocomplete="off"/>
                        
                        <button id="cadastrar">Cadastrar</button>
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Placa</th>
                                    <th>Entrada</th>
                                    <th>Ações</th>
                                </tr>
                                <tbody id="patio"></tbody>
                            </thead>
                        </table>
                    </div>
                </article>
            </section>
        </main>
        <footer class="glass">
            Footer
        </footer>
        <script src="./assets/js/index.js"></script>
    </body>
</html>
```

```ts
// ARQUIVO INDEX.TS

interface Veiculo {
    nome: string;
    placa: string;
    entrada: Date | string;
};


(function(){
    const $ = (query: string): HTMLInputElement | null => document.querySelector(query);

    function calcTempo(mil: number){
        const min = Math.floor(mil / 60000);
        const sec = Math.floor((mil % 60000) / 1000);

        return `${min}min e ${sec}s`;
    }

    
    function patio(){
        function ler(): Veiculo[]{
            return localStorage.patio ? JSON.parse(localStorage.patio): [];
        }

        function salvar(veiculos: Veiculo[]){
            localStorage.setItem("patio", JSON.stringify(veiculos));
        }

        function adicionar(veiculo: Veiculo, salva?: boolean){
            const row = document.createElement('tr');

            row.innerHTML = `
            <td>${veiculo.nome}</td>
            <td>${veiculo.placa}</td>
            <td>${veiculo.entrada}</td>
            <td>
                <button class="delete" data-placa="${veiculo.placa}">X</button>
            </td>
            `;

            row.querySelector(".delete")?.addEventListener("click", function(){
                remover(this.dataset.placa);
            });

            $('#patio')?.appendChild(row);

            if(salva) salvar([...ler(), veiculo]);
        }

        function remover(placa: string){
            const {entrada, nome} = ler().find(veiculo => veiculo.placa === placa);


            const tempo = calcTempo(new Date().getTime() - new Date(entrada).getTime());

            if(!confirm(`O veículo ${nome} permaneceu por ${tempo}. Deseja encerrar?`)) return;

            salvar(ler().filter(veiculo => veiculo.placa !== placa));
            render();
        }


        function render(){
            $("#patio")!.innerHTML = "";
            const patio = ler();

            if(patio.length) {
                patio.forEach((veiculo) => adicionar(veiculo));
            }
        }

        return {ler, adicionar, remover, salvar, render};
    }

    patio().render();

    $('#cadastrar')?.addEventListener('click', () => {
        const nome = $("#nome")?.value;
        const placa = $("#placa")?.value;

        if (!nome || !placa) {
            alert('Todos os campos são obrigatórios.');
            return;
        }

        patio().adicionar({nome, placa, entrada: new Date().toISOString()}, true);
    });
})();


```

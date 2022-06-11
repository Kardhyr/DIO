========================================
# 1 ATIVIDADE PRÁTICA
========================================

## CONTA BANCÁRIA

```js
      //CLASSE PAI - CONTA BANCÁRIA

    class ContaBancaria {
        constructor(agencia, numero, tipo, saldo) {
          this.agencia = agencia;
          this.numero = numero;
          this.tipo = tipo;
          this._saldo = 0;
        }

        get saldo() {
          return this._saldo;
        }

        set saldo(val) {
          this._saldo = val;
        }

        sacar(valor) {
          if (this._saldo < valor) {
            return "Saldo insuficiente";
          }
          this._saldo -= valor;

          return "Você sacou R$ " + valor.toFixed(2) + " reais." + "Novo saldo: R$ " + this._saldo.toFixed(2) + ".";
        }

        depositar(quantia) {
          this._saldo += quantia;
        }
    }

```

```js
    // JS - CLASSE FILHA - CONTA CORRENTE

    class ContaCorrente extends ContaBancaria {
        constructor(agencia, numero, cartaoCredito) {
          super(agencia, numero);
          this.tipo = "Conta Corrente";
          this._cartaoCredito = cartaoCredito;
        }

        get cartaoCredito() {
          return this._cartaoCredito;
        }

        set cartaoCredito(val) {
          this._cartaoCredito = val;
        }
    }

```

```js
      // JS - CLASSE FILHA - CONTA POUPANÇA

    class ContaPoupanca extends ContaBancaria {
        constructor(agencia, numero) {
          super(agencia, numero);
          this.tipo = "Conta Poupança";
        }
    }

```

```js
      // JS - CLASSE FILHA - CONTA UNIVERSITARIA

    class ContaUniversitaria extends ContaBancaria {
        constructor(agencia, numero) {
          super(agencia, numero);
          this.tipo = "Conta Universitária";
        }

        sacar(valor) {
          if (valor > 500) {
            return "Operação inválida!";
          } else if (this._saldo < valor) {
            return "Saldo insuficiente";
          }
          this._saldo -= valor;

          return "Você sacou R$ " + valor.toFixed(2) + " reais." + "Novo saldo: R$ " + this._saldo.toFixed(2) + ".";
        }
    }

```

```html

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="script.js"></script>
    <style>
      body {
        background-color: black;
      }
    </style>
    <title>Contas Bancárias</title>
  </head>
  <body>
  </body>
</html>

```

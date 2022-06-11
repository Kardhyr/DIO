========================================
# 1 APRESENTAÇÃO
========================================

## INTRODUÇÃO AO TEMA

Instrutora: Stephany Nusch



========================================
# 1 PARADIGMAS E PILARES
========================================

## PARADIGMAS

Existem dois tipos de paradigmas na programação:

 - ***Imperativo***: Procedural, orientado a objetos e possui processamento paralelo.

 - ***Declarativo***: Lógico, utilizado em programação funcional (fluxo de dados) e bases de dados.

 Na orientação a objetos, os programas são "`objetos`" que possuem uma série de `propriedades`.

 Pilares:
  - Abstração
  - Herança
  - Encapsulamento
  - Polimorfismo


### ABSTRAÇÃO

"Processo mental que consiste em isolar um determinado aspecto de um estado de coisas relativamente complexas, a fim de simplificar a sua avaliação, classificação ou para permitir a comunicação da mesma."

É um processo de simplificação/generalização: *Carros > veículos com rodas > veículos*


### HERANÇA

Processo onde o "filho" herda propriedades e métodos do objeto "pai". Ele aproveita características dos pais.


## ENCAPSULAMENTO

Determina que cada classe tenha propriedades e métodos independentes do restante do código, sendo assim, cada classe terá suas próprias variáveis e métodos (comportamentos/ações).

```js
//JS

        class {
            data members
                +
            methods (behaviors)
        }

```


## POLIMORFISMO

Permite que objetos herdem a mesma classe pai, mas se comportem de maneira diferente quando invocamos seus métodos. Por exemplo o método "falar". Muitos animais emitem sons, mas cada animal emite seu próprio som. Sendo assim, o método "falar" pode ser "adaptado" para que seu comportamento mude de acordo com o animal.

![sonoridade dos animais](http://techblog.desenvolvedores.net/wp-content/uploads/2011/02/polimorfismo-capa.png)

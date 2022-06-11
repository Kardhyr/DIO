========================================
# AULA 4
========================================

## COMO FUNCIONAM AS INTERFACES

Use `type` para definir um "tipo" para seus parâmetros.

`interfaces` são uma forma de contrato para implementar suas classes.

```ts
    interface IAnimal {
        nome: string;
        tipo: 'terrestre' | 'aquático';
        emitirSom(alturaDecibeis: number): void;
    }

    interface IFelino extends IAnimal {
        visaoNoturna: boolean;
    }

    const animal: IAnimal = {
        nome: 'Elefante',
        tipo: 'terrestre',
        emitirSom: (alturaDecibeis) => ('${alturaDecibeis}dB')
    }

    animal.emitirSom(35);

    const felino: IFelino = {
        nome: 'Leão',
        tipo: 'terrestre',
        visaoNoturna: true,
        emitirSom: (alturaDecibeis) => ('${alturaDecibeis}dB')
    }
```

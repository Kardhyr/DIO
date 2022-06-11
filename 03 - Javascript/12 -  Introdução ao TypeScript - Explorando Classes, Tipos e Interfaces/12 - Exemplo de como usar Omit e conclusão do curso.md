========================================
# AULA 12
========================================

## EXEMPLO DE COMO USAR OMIT E CONCLUSÃO DO CURSO


```ts
        interface Pessoa {
            nome: string;
            idade: number;
            nacionalidade: string;
        }

        interface Brasileiro extends Omit<Pessoa, 'nacionalidade'> {

        }

        const brasileiro: Brasileiro = {
            // Ficou incompleto.
        }
```

Exemplo incompleto...
...e fim do curso.

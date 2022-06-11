========================================
# AULA 9
========================================

## UTILIZANDO O CARACTER '?' PARA VARIÁVEIS OPCIONAIS

Quando queremos tornar uma variável opcional, podemos escrevê-la com uma interrogação ao final.

```ts
        interface IUsuario {
            id: string;
            email: string;
            cargo?: 'gerente' | 'coordenador' | 'supervisor' | 'funcionário';
        }

        function redirecione(usuario: IUsuario) {
            if (usuario.cargo) {
                // redirecionar para a área de administração
            }

            // redirecionar para a área do usuário
        }

```

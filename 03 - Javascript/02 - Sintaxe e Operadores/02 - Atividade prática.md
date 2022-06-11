========================================
# 1 MANIPULANDO UM ARQUIVO
========================================
```js

        function comparaNumeros(num1, num2) {
                if (!num1 || !num2) return 'Defina dois números!';

                const texto1 = geraTexto1(num1, num2);
                const texto2 = geraTexto2(num1, num2);
                const saoIguais = num1 ===num2;
                const soma = num1 + num2;

                function geraTexto1(num1, num2) {
                        let txt = '';

                        if (num1 !== num2) {
                                txt = 'não ';
                        }

                        return `Os números ${num1} e ${num2} ${txt}são iguais.`;
                }

                function geraTexto2(num1, num2) {
                        const soma = num1 + num2;

                        let res10 = 'menor ';
                        let res20 = 'menor ';

                        const valor10 = soma > 10;
                        const valor20 = soma > 20;
                        
                        if(valor10) {
                                res10 = 'maior ';
                        }

                        if(valor20) {
                                res20 = 'maior ';
                        }
                        return `Sua soma é ${soma}, que é ${res10}que 10 e ${res20}que 20.`;
                }
        }
        console.log(comparaNumeros(0, 1));
```
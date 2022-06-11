========================================
# AULA 6
========================================

## TRATANDO A TAG INPUT

```html

<input id="input" type="text" placeholder="Digite aqui" />

```


```js
        const input = document.getElementById('input') as HTMLInputElement;
        input.addEventListener('input', (event) => {
            const i = event.currentTarget as HTMLInputElement;
            console.log(i.value);
        });

```
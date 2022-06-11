========================================
# 1 ATIVIDADE PRÁTICA
========================================

## DARK-MODE / LIGHT-MODE

 - Crie uma estrutura básica de projeto front-end (HTML, CSS e JS)

 - Copie o HTML e o CSS deste repositório

 - Crie um arquivo chamado scripts.js na sua pasta assets/js

 - Selecione os elementos: h1, button, footer e body

 - Se os elementos possuirem a classe dark-mode, modifique seus estilos. Caso contrário, volte os estilos para o original


```html
<!-- HTML e CSS -->
    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600&display=swap");

      body {
        background-color: #e5e8e8;
        color: #4e545c;
        margin: 0;
        font-family: "Quicksand";
      }

      body.dark-mode {
        background-color: #000401;
        color: #e5e8e8;
      }

      main {
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      footer {
        width: 100%;
        background-color: #4e545c;
        padding: 16px;
        color: #e5e8e8;
        position: fixed;
        bottom: 0;
        text-align: center;
        font-weight: 400;
      }

      footer.dark-mode {
        background-color: #8d9797;
        color: #000401;
      }

      button {
        border-radius: 40px;
        font-size: 1.5rem;
        height: 60px;
        width: 200px;
        border: none;
        background-color: #4e545c;
        color: #e5e8e8;
        transition: all 0.5s linear;
      }

      button:hover {
        background-color: #000401;
      }

      button.dark-mode {
        background-color: #e5e8e8;
        color: #4e545c;
      }

      button.dark-mode:hover {
        background-color: #4e545c;
        color: #e5e8e8;
      }
    </style>
    <title>Dark & Light Mode</title>
  </head>
  <body>
    <header>
      <h1>Light & Dark Mode</h1>
    </header>
    <main>
      <h1 id="page-title">Light Mode ON</h1>
      <button aria-label="selecionar-modo" id="mode-selector" onclick="modoEscuro()">Dark Mode</button>
      <pre>
        - Crie uma estrutura básica de projeto front-end (HTML, CSS e JS)
        - Copie o HTML e o CSS deste repositório
        - Crie um arquivo chamado scripts.js na sua pasta assets/js
        - Selecione os elementos: h1, button, footer e body
        - Se os elementos possuirem a classe dark-mode, modifique seus estilos. Caso contrário, volte os estilos para o original
      </pre>
    </main>
    <footer>Basecamp Javascript @ Digital Innovation One</footer>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>

```

```js
// JS

    // Função de controle
    function changeMode() {
        changeClasses();
        changeText();
    }

    // Função para mudar classes
    function changeClasses() {
        button.classList.toggle(darkModeClass);
        h1.classList.toggle(darkModeClass);
        body.classList.toggle(darkModeClass);
        footer.classList.toggle(darkModeClass);
    }

    // Função para mudar textos
    function changeText() {
        const lightMode = "Light Mode";
        const darkMode = "Dark Mode";
        if (body.classList.contains(darkModeClass)) {
            button.innerHTML = lightMode;
            h1.innerHTML = darkMode + " ON";
            return;
        }

        button.innerHTML = darkMode;
        h1.innerHTML = lightMode + " ON";
    }

    // Elementos a serem transformados
    const darkModeClass = "dark-mode";
    const button = document.getElementById("mode-selector");
    const h1 = document.getElementById("page-title");
    const body = document.getElementsByTagName("body"[0]);
    const footer = document.getElementsByTagName("footer")[0];

    // Event Listener
    button.addEventListener("click", changeMode);

```



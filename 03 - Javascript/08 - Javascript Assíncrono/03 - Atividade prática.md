========================================
# 2 ATIVIDADE PRÁTICA
========================================

## ATIVIDADE 1 - catAPI


```js
//JS

    const BASE_URL = 'https://thatcopy.pw/catapi/rest/';

    const catBtn = document.getElementById('change-cat');
    const catBtn = document.getElementById('cat');

    const getCats = async () => {
        try{

            const data = await fetch(BASE_URL);
        const json = await data.json();

        return json.webpurl;
        } catch(e) {
            console.log(e);
        }
    };

    const loadImg = async () => {
        catImg.src = await getCats();
    }

    catBtn.addEventListener('click', loadImg);

    loadImg();

```


```js
//JS - Sem TRY...CATCH

    const BASE_URL = 'https://thatcopy.pw/catapi/rest/';

    const catBtn = document.getElementById('change-cat');
    const catBtn = document.getElementById('cat');

    const getCats = async () => {
        const data = await fetch(BASE_URL)
            .then(res => res.json())
            .catch(e => console.log(e))
        return data.webpurl;
    };

    const loadImg = async () => {
        catImg.src = await getCats();
    }

    catBtn.addEventListener('click', loadImg);

    loadImg();

```

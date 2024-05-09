
let menu_cards = document.getElementsByClassName('menu_cards')[0];




let poster = document.getElementById('poster');
let title = document.getElementById("tit");
let price_cont = document.getElementById('price_cont');
let dish = document.getElementById("dish");

Array.from(document.getElementsByClassName('cards')).forEach((ele, i) => {
     //console.Log(ele)
    ele.addEventListener('click', () => {
        poster.src = ele.getElementsByTagName('img')[0].src;
        price_cont.innerText = ele.getElementsByTagName('h4')[0].innerText;
        title.innerText = ele.getElementsByTagName('h5')[0].innerText;
        dish.innerText = ele.getElementsByTagName('p')[0].innerText;
        //console.log(ele.getElementsByTagName('h4')[0].innerText);


    })
})

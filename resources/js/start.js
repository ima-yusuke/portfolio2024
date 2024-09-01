const TOP_ARROW_PC = document.getElementById('top_arrow_pc');
const BOTTOM_ARROW_PC = document.getElementById('bottom_arrow_pc');
const TOP_ARROW_MOBILE = document.getElementById('top_arrow_mobile');
const BOTTOM_ARROW_MOBILE = document.getElementById('bottom_arrow_mobile');
const A_BTN_PC = document.getElementById('a_btn_pc');
const A_BTN_MOBILE = document.getElementById('a_btn_mobile');

let startMenu = document.getElementsByClassName('start-menu');
let countPc = 0;
let countMobile = 3;
BOTTOM_ARROW_PC.addEventListener('click', () => {
    if(countPc === 2) return;
    startMenu[countPc].style.opacity = '0.6';
    countPc++;
    startMenu[countPc].style.opacity = '1';
});

TOP_ARROW_PC.addEventListener('click', () => {
    if(countPc === 0) return;
    startMenu[countPc].style.opacity = '0.6';
    countPc--;
    startMenu[countPc].style.opacity = '1';
})

BOTTOM_ARROW_MOBILE.addEventListener('click', () => {
    if(countMobile === 5) return;
    startMenu[countMobile].style.opacity = '0.6';
    countMobile++;
    startMenu[countMobile].style.opacity = '1';
})

TOP_ARROW_MOBILE.addEventListener('click', () => {
    if(countMobile === 3) return;
    startMenu[countMobile].style.opacity = '0.6';
    countMobile--;
    startMenu[countMobile].style.opacity = '1';
})

A_BTN_PC.addEventListener('click', () => {
  startMenu[countPc].click();
})

A_BTN_MOBILE.addEventListener('click', () => {
    startMenu[countMobile].click();
})

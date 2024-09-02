const GAME_SCREEN_MOBILE = document.getElementById('game_screen_mobile');
const TOP_ARROW_PC = document.getElementById('top_arrow_pc');
const BOTTOM_ARROW_PC = document.getElementById('bottom_arrow_pc');
const TOP_ARROW_MOBILE = document.getElementById('top_arrow_mobile');
const BOTTOM_ARROW_MOBILE = document.getElementById('bottom_arrow_mobile');
const A_BTN_PC = document.getElementById('a_btn_pc');
const A_BTN_MOBILE = document.getElementById('a_btn_mobile');
const B_BTN_PC = document.getElementById('b_btn_pc');
const B_BTN_MOBILE = document.getElementById('b_btn_mobile');
const CLOSE_DETAIL_BTN = document.getElementsByClassName('close-detail-btn');
const REGISTER_NAME_BTN_PC = document.getElementById('register_name_btn_pc');
const REGISTER_NAME_BTN_MOBILE = document.getElementById('register_name_btn_mobile');

let startMenu = document.getElementsByClassName('start-menu');
let detailMenu = document.getElementsByClassName('detail-menu');
let countPc = 0;
let countMobile = 3;
let currentCountPc = 1000;
let currentCountMobile = 0;
let scrollFlag = false;
let nameFlag = false;

// pc
BOTTOM_ARROW_PC.addEventListener('click', () => {
    if(countPc === 2) return;
    startMenu[countPc].style.opacity = '0.6';
    countPc++;
    startMenu[countPc].style.opacity = '1';

    if(currentCountPc===0){
        REGISTER_NAME_BTN_PC.style.backgroundColor = 'rgb(41,158,127)';
        REGISTER_NAME_BTN_PC.style.color = 'white';
        nameFlag = true;
    }
});

TOP_ARROW_PC.addEventListener('click', () => {
    if(countPc === 0) return;
    startMenu[countPc].style.opacity = '0.6';
    countPc--;
    startMenu[countPc].style.opacity = '1';

    if(nameFlag){
        REGISTER_NAME_BTN_PC.style.backgroundColor = '';
        REGISTER_NAME_BTN_PC.style.color = 'black';
        document.getElementById('name_input_pc').focus();
        nameFlag = false;
    }
})

A_BTN_PC.addEventListener('click', () => {
    if(nameFlag) {
        REGISTER_NAME_BTN_PC.click();
        return;
    }
    startMenu[countPc].click();

})

B_BTN_PC.addEventListener('click', () => {
    for (let i = 0; i < startMenu.length; i++) {
        startMenu[i].style.display = 'block';
        startMenu[i].style.opacity = '0.6';
        if(i==currentCountPc){
            startMenu[i].style.opacity = '1';
        }
    }
    countPc = currentCountPc;
    currentCountPc = 1000;
    detailMenu[0].style.display = 'none';
    detailMenu[1].style.display = 'none';
    detailMenu[2].style.display = 'none';
})

REGISTER_NAME_BTN_PC.addEventListener('click', () => {
    let input = document.getElementById('name_input_pc');
    let newName = input.value.trim();
    if(newName === ''){
        alert('なまえを にゅうりょくしてね');
        return;
    }
    sessionStorage.setItem('name', newName);
    location.href = '/battle';
})

// モバイル
BOTTOM_ARROW_MOBILE.addEventListener('click', () => {
    if(scrollFlag) {
        GAME_SCREEN_MOBILE.scrollBy({
            top: 100,
            behavior: 'smooth' // スムーズなスクロール
        });
    }

    if(countMobile === 5) return;
    startMenu[countMobile].style.opacity = '0.6';
    countMobile++;
    startMenu[countMobile].style.opacity = '1';

    if(currentCountMobile===3){
        REGISTER_NAME_BTN_MOBILE.style.backgroundColor = 'rgb(41,158,127)';
        REGISTER_NAME_BTN_MOBILE.style.color = 'white';
        nameFlag = true;
    }
})

TOP_ARROW_MOBILE.addEventListener('click', () => {
    if (scrollFlag) {
        GAME_SCREEN_MOBILE.scrollBy({
            top: -100,
            behavior: 'smooth' // スムーズなスクロール
        });
    }

    if(countMobile === 3) return;
    startMenu[countMobile].style.opacity = '0.6';
    countMobile--;
    startMenu[countMobile].style.opacity = '1';

    if(nameFlag){
        REGISTER_NAME_BTN_MOBILE.style.backgroundColor = '';
        REGISTER_NAME_BTN_MOBILE.style.color = 'black';
        document.getElementById('name_input_mobile').focus();
        nameFlag = false;
    }
})

A_BTN_MOBILE.addEventListener('click', () => {
    if(nameFlag) {
        REGISTER_NAME_BTN_MOBILE.click();
        return;
    }
    startMenu[countMobile].click();
})

B_BTN_MOBILE.addEventListener('click', () => {
    for (let i = 3; i < startMenu.length; i++) {
        startMenu[i].style.display = 'block';
        startMenu[i].style.opacity = '0.6';
        if(i==currentCountMobile){
            startMenu[i].style.opacity = '1';
        }
    }
    countMobile = currentCountMobile;
    currentCountMobile = 0;
    detailMenu[3].style.display = 'none';
    detailMenu[4].style.display = 'none';
    detailMenu[5].style.display = 'none';
})

REGISTER_NAME_BTN_MOBILE.addEventListener('click', () => {
    let input = document.getElementById('name_input_mobile');
    let newName = input.value.trim();
    if(newName === ''){
        alert('なまえを にゅうりょくしてね');
        return;
    }
    sessionStorage.setItem('name', newName);
    location.href = '/battle';
})

// 共通
for (let i = 0; i < startMenu.length; i++) {
    startMenu[i].addEventListener('click', () => {
        scrollFlag = false;
        for (let i = 0; i < startMenu.length; i++) {
            startMenu[i].style.display = 'none';
        }
        detailMenu[i].style.display = 'block';
        if(i==0){
            document.getElementById('name_input_pc').focus();
        }
        if (i==3) {
            document.getElementById('name_input_mobile').focus();
        }
        if(i==4){
            scrollFlag = true;
        }
        if(i<3){
            currentCountPc= i;
        }else {
            currentCountMobile = i;
        }
    })
}


for (let i = 0; i < CLOSE_DETAIL_BTN.length; i++) {
    CLOSE_DETAIL_BTN[i].addEventListener('click', () => {
        for (let i = 0; i < startMenu.length; i++) {
            startMenu[i].style.display = 'block';
        }
        detailMenu[i].style.display = 'none';
        if (i<3){
            currentCountPc = 1000;
        }else{
            currentCountMobile = 0;
        }
    })
}




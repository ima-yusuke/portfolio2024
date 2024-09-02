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

// pc
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

A_BTN_PC.addEventListener('click', () => {
    startMenu[countPc].click();
})

B_BTN_PC.addEventListener('click', () => {
    for (let i = 0; i < startMenu.length; i++) {
        startMenu[i].style.display = 'block';
    }
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

A_BTN_MOBILE.addEventListener('click', () => {
    startMenu[countMobile].click();
})

B_BTN_MOBILE.addEventListener('click', () => {
    for (let i = 0; i < startMenu.length; i++) {
        startMenu[i].style.display = 'block';
    }
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
    })
}



for (let i = 0; i < CLOSE_DETAIL_BTN.length; i++) {
    CLOSE_DETAIL_BTN[i].addEventListener('click', () => {
        for (let i = 0; i < startMenu.length; i++) {
            startMenu[i].style.display = 'block';
        }
        detailMenu[i].style.display = 'none';
    })
}




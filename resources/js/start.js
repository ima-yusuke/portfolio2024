const GAME_SCREEN_PC = document.getElementById('game_screen_pc');
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
const REGISTER_NAME_BTN = document.getElementsByClassName('register-name-btn');

let startMenu = document.getElementsByClassName('start-menu');
let detailMenu = document.getElementsByClassName('detail-menu');
let countPc = 0;
let countMobile = 3;
let currentCountPc = 1000;
let currentCountMobile = -1000;
let scrollFlag = false;
let nameFlag = false;

function StartAnimation(){

    // アニメーション中はクリックを無効化
    document.body.style.pointerEvents = 'none';

    let welcomeTitle = null;

    if(window.innerWidth > 768){
        welcomeTitle = document.getElementById("welcomeTextPc");
    }else{
        welcomeTitle = document.getElementById("welcomeTextMobile");
    }
    // 100ms後にshowクラスを追加してふわっと表示させる
    setTimeout(function() {
        welcomeTitle.classList.add("show");

        setTimeout(function() {
            welcomeTitle.classList.add("out");

            setTimeout(function() {
                welcomeTitle.style.display = "none";
                setTimeout(function() {
                    ShowMenu();
                    // クリックイベントを再有効化
                    document.body.style.pointerEvents = 'auto';
                },100);
            },2000);
        },1500);
    }, 100);
}

StartAnimation();

// pc
BOTTOM_ARROW_PC.addEventListener('click', () => {
    if (countPc === 2) return;
    startMenu[countPc].style.opacity = '0.6';
    countPc++;
    startMenu[countPc].style.opacity = '1';

    if(currentCountPc===0){
        SwitchInput(true);
        nameFlag = true;
    }
});

TOP_ARROW_PC.addEventListener('click', () => {
    if(countPc === 0) return;
    startMenu[countPc].style.opacity = '0.6';
    countPc--;
    startMenu[countPc].style.opacity = '1';

    if(nameFlag){
        SwitchInput(false);
        document.getElementById('name_input_pc').focus();
        nameFlag = false;
    }
})

A_BTN_PC.addEventListener('click', () => {
    if(nameFlag) {
        REGISTER_NAME_BTN[0].click();
        return;
    }
    startMenu[countPc].click();

})

B_BTN_PC.addEventListener('click', () => {

    if(currentCountPc === 1000){
        return;
    }

    SwitchMenuOpacity(currentCountPc);

    SwitchInput(false);

    countPc = currentCountPc;
    currentCountPc = 1000;
    nameFlag = false;
    detailMenu[0].style.display = 'none';
    detailMenu[1].style.display = 'none';
    detailMenu[2].style.display = 'none';
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
        SwitchInput(true);
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
        SwitchInput(false);
        document.getElementById('name_input_mobile').focus();
        nameFlag = false;
    }
})

A_BTN_MOBILE.addEventListener('click', () => {
    if(nameFlag) {
        REGISTER_NAME_BTN[1].click();
        return;
    }
    startMenu[countMobile].click();
})

B_BTN_MOBILE.addEventListener('click', () => {

    if (currentCountMobile === -1000) {
        return;
    }

   SwitchMenuOpacity(currentCountMobile);
   SwitchInput(false);

    countMobile = currentCountMobile;
    currentCountMobile = -1000;
    nameFlag = false;
    detailMenu[3].style.display = 'none';
    detailMenu[4].style.display = 'none';
    detailMenu[5].style.display = 'none';
})

// 共通


function ShowMenu(){
    for (let i = 0; i < startMenu.length; i++) {
        startMenu[i].classList.remove("hidden");
    }
}

// 初期画面/MENU選択時の処理
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
            countPc = i;
            currentCountPc= i;
        }else {
            countMobile = i;
            currentCountMobile = i;
        }
    })
}

// 初期画面/MENUのopacityを変更
function SwitchMenuOpacity(showIndex){
    for (let i = 0; i < startMenu.length; i++) {
        startMenu[i].style.display = 'block';
        startMenu[i].style.opacity = '0.6';
        if(i===showIndex){
            startMenu[i].style.opacity = '1';
        }
    }
}

// 各画面/閉じるボタンの処理
for (let i = 0; i < CLOSE_DETAIL_BTN.length; i++) {
    CLOSE_DETAIL_BTN[i].addEventListener('click', () => {

        // MENUのopacityを変更
        if(i<3){
            SwitchMenuOpacity(currentCountPc);
        }else{
            SwitchMenuOpacity(currentCountMobile);
        }

        // Inputのリセット
        SwitchInput(false);

        detailMenu[i].style.display = 'none';
        if (i<3){
            currentCountPc = 1000;
        }else{
            currentCountMobile = -1000;
        }
        nameFlag = false;
    })
}

// 名前登録/Inputの背景色を変更
function SwitchInput(flag){
    if(flag){
        if(currentCountPc===0){
            REGISTER_NAME_BTN[0].style.backgroundColor = 'rgb(41,158,127)';
            REGISTER_NAME_BTN[0].style.color = 'white';
        }
        if(currentCountMobile===3){
            REGISTER_NAME_BTN[1].style.backgroundColor = 'rgb(41,158,127)';
            REGISTER_NAME_BTN[1].style.color = 'white';
        }
    }else{
        if(currentCountPc === 0){
            REGISTER_NAME_BTN[0].style.backgroundColor = '';
            REGISTER_NAME_BTN[0].style.color = 'black';
            document.getElementById('name_input_pc').value = '';
        }
        if(currentCountMobile === 3){
            REGISTER_NAME_BTN[1].style.backgroundColor = '';
            REGISTER_NAME_BTN[1].style.color = 'black';
            document.getElementById('name_input_mobile').value = '';
        }
    }

}

// 名前登録/sessionStorage登録&battle画面へ遷移
for (let i = 0; i < REGISTER_NAME_BTN.length; i++) {
    REGISTER_NAME_BTN[i].addEventListener('click', () => {
        let input;
        let newName;
        if(i===0){
            input = document.getElementById('name_input_pc');
            newName = input.value.trim();
        }else{
            input = document.getElementById('name_input_mobile');
            newName = input.value.trim();
        }
        if(newName === ''){
            alert('なまえを にゅうりょくしてね');
            return;
        }
        sessionStorage.setItem('name', newName);
        location.href = '/battle';
    })
}



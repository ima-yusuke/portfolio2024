// ヘッダー
const HEAD_INFO = document.getElementById('head_info');
const HEAD_ABILITY = document.getElementById('head_ability');

// メイン
const ABOUT_MAIN = document.getElementById('about_main');
const INFO_RIGHT_CONTAINER = document.getElementById('info_right_container');
const INFO_BOTTOM_CONTAINER = document.getElementById('info_bottom_container');
const ABILITY_RIGHT_CONTAINER = document.getElementById('ability_right_container');
const IMG_CONTAINER = document.getElementById('img_container');
const RIGHT_BTN = document.getElementById('right_btn');
const LEFT_BTN = document.getElementById('left_btn');
const SWITCH_TEXTS = document.getElementsByClassName('switch-text');

// どちらの画面を表示するかのフラグ
let flag = true;

RIGHT_BTN.addEventListener('click', () => {
  if(flag===true){
      ShowAbility();
  }
})

LEFT_BTN.addEventListener('click', () => {
    if(flag===false){
        ShowInfo();
    }
})

for (let i = 0; i < SWITCH_TEXTS.length; i++) {
    SWITCH_TEXTS[i].addEventListener('click', () => {
        if(flag===true){
            ShowAbility();
        }else{
            ShowInfo();
        }
    })
}

function ShowAbility(){
    HEAD_INFO.classList.add("hide");
    HEAD_ABILITY.classList.remove("hide");
    ABOUT_MAIN.classList.remove("bg-bg-about-main");
    ABOUT_MAIN.classList.add("bg-bg-ability");
    INFO_RIGHT_CONTAINER.classList.add("hide");
    INFO_BOTTOM_CONTAINER.classList.add("hide");
    ABILITY_RIGHT_CONTAINER.classList.remove("hide");
    IMG_CONTAINER.classList.remove("bg-bg-about-blue");
    IMG_CONTAINER.classList.add("bg-ability-img");
    RIGHT_BTN.innerText = "";
    LEFT_BTN.innerText = "▲";
    flag = false;
}

function ShowInfo(){
    HEAD_INFO.classList.remove("hide");
    HEAD_ABILITY.classList.add("hide");
    ABOUT_MAIN.classList.remove("bg-bg-ability");
    ABOUT_MAIN.classList.add("bg-bg-about-main");
    INFO_RIGHT_CONTAINER.classList.remove("hide");
    INFO_BOTTOM_CONTAINER.classList.remove("hide");
    ABILITY_RIGHT_CONTAINER.classList.add("hide");
    IMG_CONTAINER.classList.remove("bg-ability-img");
    IMG_CONTAINER.classList.add("bg-bg-about-blue");
    RIGHT_BTN.innerText = "▲";
    LEFT_BTN.innerText = "";
    flag = true;
}

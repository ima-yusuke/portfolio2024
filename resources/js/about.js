// ヘッダー
const HEAD_INFO = document.getElementById('head_info');
const HEAD_ABILITY = document.getElementById('head_ability');

// メイン
const INFO_RIGHT_CONTAINER = document.getElementById('info_right_container');
const INFO_BOTTOM_CONTAINER = document.getElementById('info_bottom_container');
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
    INFO_RIGHT_CONTAINER.classList.add("hide");
    INFO_BOTTOM_CONTAINER.classList.add("hide");
    RIGHT_BTN.innerText = "";
    LEFT_BTN.innerText = "▲";
    flag = false;
}

function ShowInfo(){
    HEAD_INFO.classList.remove("hide");
    HEAD_ABILITY.classList.add("hide");
    INFO_RIGHT_CONTAINER.classList.remove("hide");
    INFO_BOTTOM_CONTAINER.classList.remove("hide");
    RIGHT_BTN.innerText = "▲";
    LEFT_BTN.innerText = "";
    flag = true;
}

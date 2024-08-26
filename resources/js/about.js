// ヘッダー
const HEAD_INFO = document.getElementById('head_info');
const HEAD_ABILITY = document.getElementById('head_ability');

// メイン
const ABOUT_MAIN = document.getElementById('about_main');
const INFO_RIGHT_CONTAINER = document.getElementById('info_right_container');
const INFO_BOTTOM_CONTAINER = document.getElementById('info_bottom_container');
const ABILITY_BOTTOM_CONTAINER = document.getElementById('ability_bottom_container');
const ABILITY_RIGHT_CONTAINER = document.getElementById('ability_right_container');
const IMG_CONTAINER = document.getElementById('img_container');
const RIGHT_BTN = document.getElementById('right_btn');
const LEFT_BTN = document.getElementById('left_btn');
const SWITCH_TEXTS = document.getElementsByClassName('switch-text');

// modal
const OPEN_TOEIC_MODAL = document.getElementById('open_toeic_modal');
const CLOSE_TOEIC_MODAL = document.getElementById('close_toeic_modal');
const TOEIC_MODAL = document.getElementById('toeic_modal');


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

OPEN_TOEIC_MODAL.addEventListener('click', () => {
    TOEIC_MODAL.classList.remove('hide');
    TOEIC_MODAL.style.opacity = "1"; // モーダルを完全に表示
    TOEIC_MODAL.style.zIndex = "100"; // モーダルを最前面に表示
    document.body.classList.add("overflow-hidden"); // スクロールを無効にする
})

CLOSE_TOEIC_MODAL.addEventListener('click', () => {
    TOEIC_MODAL.classList.add('hide');
    TOEIC_MODAL.style.opacity = "0"; // モーダルを完全に非表示
    TOEIC_MODAL.style.zIndex = "-1"; // モーダルを最背面に表示
    document.body.classList.remove("overflow-hidden"); // スクロールを有効にする
})

// TOEIC受験歴/スクロールヒント
document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('#toeic_modal .overflow-y-scroll');
    const scrollIndicator = document.getElementById('scroll_indicator');

    scrollContainer.addEventListener('scroll', function() {
        // 現在のスクロール位置を取得
        const scrollTop = scrollContainer.scrollTop;

        // スクロールが発生した場合
        if (scrollTop > 0) {
            scrollIndicator.style.display = 'none';
        } else {
            scrollIndicator.style.display = 'flex'; // 初期状態に戻す
        }

        // スクロールが最上部に戻った場合
        if (scrollTop === 0) {
            scrollIndicator.style.display = 'flex';
        }
    });
});


function ShowAbility(){
    HEAD_INFO.classList.add("hide");
    HEAD_ABILITY.classList.remove("hide");
    ABOUT_MAIN.classList.remove("bg-bg-about-main");
    ABOUT_MAIN.classList.add("bg-bg-ability");
    INFO_RIGHT_CONTAINER.classList.add("hide");
    INFO_BOTTOM_CONTAINER.classList.add("hide");
    ABILITY_RIGHT_CONTAINER.classList.remove("hide");
    ABILITY_BOTTOM_CONTAINER.classList.remove("hide");
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
    ABILITY_BOTTOM_CONTAINER.classList.add("hide");
    IMG_CONTAINER.classList.remove("bg-ability-img");
    IMG_CONTAINER.classList.add("bg-bg-about-blue");
    RIGHT_BTN.innerText = "▲";
    LEFT_BTN.innerText = "";
    flag = true;
}

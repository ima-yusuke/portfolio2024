// 名前設定
const PLAYER_NAME = document.getElementById('player_name');
let playerName = sessionStorage.getItem('name');
PLAYER_NAME.textContent = playerName+"は どうする？";

// たたかうClick時の処理
const BATTLE_COMMAND_P = document.getElementById('battle_command_p');
const DEFAULT_MENU = document.getElementById('default_menu');
const BATTLE_MENU = document.getElementById('battle_menu');
let flag = true;//true:ニックネーム表示中/false:戦闘メニュー表示中
BATTLE_COMMAND_P.addEventListener('click', function() {
    if (flag) {
        DEFAULT_MENU.classList.add("hidden");
        BATTLE_MENU.classList.remove("hidden");
        flag = false;
    }else{
        DEFAULT_MENU.classList.remove("hidden");
        BATTLE_MENU.classList.add("hidden");
        flag = true;
    }
});

// たたかうメニューの選択時の処理
const BATTLE_COMMAND_ENGLISH = document.getElementById('battle_command_english');
const BATTLE_COMMAND_SALE = document.getElementById('battle_command_sale');
const BATTLE_COMMAND_PROGRAMMING = document.getElementById('battle_command_programming');
BATTLE_COMMAND_ENGLISH.addEventListener('click', function() {
    location.href = '/about';
    sessionStorage.setItem('flag-english', 'true');
})
BATTLE_COMMAND_SALE.addEventListener('click', function() {
    location.href = '/about';
    sessionStorage.setItem('flag-sale', 'true');
})
BATTLE_COMMAND_PROGRAMMING.addEventListener('click', function() {
    location.href = '/about';
    sessionStorage.setItem('flag-programming', 'true');
})



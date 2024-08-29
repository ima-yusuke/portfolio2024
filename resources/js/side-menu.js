const HAMBURGER_ICON = document.getElementById('hamburger_icon');
const CLOSE_ICON = document.getElementById('close_icon');
let side_menu = document.getElementsByClassName("side_menu_off")[0];
let main = document.getElementsByTagName("body")[0];
const BTN_PERSONAL_MENU = document.getElementsByClassName("personal_btn");
const BTN_BUSINESS_MENU = document.getElementsByClassName("business_btn");

//サイドメニュー表示
HAMBURGER_ICON.addEventListener('click', function() {

    HAMBURGER_ICON.classList.add("hidden")
    CLOSE_ICON.classList.remove("hidden")

    // サイドメニュー表示
    side_menu.classList.remove("side_menu_off")
    side_menu.classList.add("side_menu_show")

    // mainをスクロール不可に
    main.classList.add("scroll_none")
})

// サイドメニュー非表示
CLOSE_ICON.addEventListener('click', function() {

    CLOSE_ICON.classList.add("hidden")
    HAMBURGER_ICON.classList.remove("hidden")

    // サイドメニュー非表示
    side_menu.classList.remove("side_menu_show")
    side_menu.classList.add("side_menu_off")

    // mainをスクロール可に
    main.classList.remove("scroll_none")
})

function CloseSideMenu(BTNS) {
    for (let i = 0; i < BTNS.length; i++) {
        BTNS[i].addEventListener("click",function () {
            CLOSE_ICON.classList.add("hidden")
            HAMBURGER_ICON.classList.remove("hidden")

            // サイドメニュー非表示
            side_menu.classList.remove("side_menu_show")
            side_menu.classList.add("side_menu_off")

            // mainをスクロール可に
            main.classList.remove("scroll_none")
        })
    }
}

CloseSideMenu(BTN_PERSONAL_MENU);
CloseSideMenu(BTN_BUSINESS_MENU);

// サイドメニューの外をクリックしたらサイドメニュー閉じる
document.addEventListener("click",function (e){
    if((!e.target.closest('.side_menu_show'))&& e.target!==HAMBURGER_ICON) {

        side_menu.classList.remove("side_menu_show")
        side_menu.classList.add("side_menu_off")

        HAMBURGER_ICON.classList.remove("hidden")
        CLOSE_ICON.classList.add("hidden")

        main.classList.remove("scroll_none")
    }
})


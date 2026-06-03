// 左画面
const TEXT_CURRENT_PAGE = document.getElementById("current_title");
const ARROWS = document.getElementsByClassName("arrow");

// 右画面
const CONTAINER_PERSONAL_MENU = document.getElementById("container_personal_menu")
const CONTAINER_BUSINESS_MENU = document.getElementById("container_business_menu");
const MOBILE_PERSONAL_MENU = document.getElementById("container_mobile_personal_menu");
const MOBILE_BUSINESS_MENU = document.getElementById("container_mobile_business_menu");
const CONTAINER_LANGUAGE = document.getElementById("container_language");
const BTN_PERSONAL_MENU = document.getElementsByClassName("personal_btn");
const BTN_BUSINESS_MENU = document.getElementsByClassName("business_btn");
const TEXT_NAME = document.getElementById("text_name");
const TEXT_OVERVIEW = document.getElementById("text_overview");
const TEXT_BACKGROUND = document.getElementById("text_background");
const TEXT_URL = document.getElementById("text_url");
const IMG_WORK = document.getElementById("work_img");
let currentPageFlag = false;

setData(BTN_BUSINESS_MENU,businessWorkData);
setActiveMenu(CONTAINER_BUSINESS_MENU, businessWorkData[0].id);
setActiveMenu(MOBILE_BUSINESS_MENU, businessWorkData[0].id);

for (let i = 0; i < ARROWS.length; i++) {
    ARROWS[i].addEventListener("click",function () {
        if(currentPageFlag){
            setData(BTN_BUSINESS_MENU,businessWorkData);
            SwitchView("会社開発",CONTAINER_PERSONAL_MENU,CONTAINER_BUSINESS_MENU,false,businessWorkData,MOBILE_PERSONAL_MENU,MOBILE_BUSINESS_MENU);
        }else{
            setData(BTN_PERSONAL_MENU,personalWorkData);
            SwitchView("個人開発",CONTAINER_BUSINESS_MENU,CONTAINER_PERSONAL_MENU,true,personalWorkData,MOBILE_BUSINESS_MENU,MOBILE_PERSONAL_MENU);
        }
    })
}

function SwitchView(Title,HideElement,ShowElement,Flag,DATA,MobileHideElement,MobileShowElement) {
    TEXT_CURRENT_PAGE.innerText = Title;
    HideElement.classList.add("hide");
    ShowElement.classList.remove("hide");
    MobileHideElement.classList.add("hide");
    MobileShowElement.classList.remove("hide");
    currentPageFlag = Flag;
    TEXT_NAME.innerText = DATA[0].name;
    TEXT_OVERVIEW.innerText = DATA[0].overview;
    TEXT_BACKGROUND.innerText = DATA[0].background;
    IMG_WORK.src = "storage/img/"+DATA[0].image;
    removeChild();
    DATA[0].language.forEach(language => {
        let newLanguage = document.createElement("p");
        newLanguage.classList.add("text-sm","text-gray-700");
        newLanguage.innerText = language;
        CONTAINER_LANGUAGE.appendChild(newLanguage);
    });
    setActiveMenu(ShowElement, DATA[0].id);
    setActiveMenu(MobileShowElement, DATA[0].id);
    resetScrollHint();
}

function setData(BTN,DATA){
    for (let i = 0; i < BTN.length; i++) {
        BTN[i].addEventListener("click",function () {
            TEXT_URL.parentNode.classList.remove("hide");
            let id = BTN[i].id;
            let newData = DATA.find(work => work.id == id);
            TEXT_NAME.innerText = newData.name;
            TEXT_OVERVIEW.innerText = newData.overview;
            TEXT_BACKGROUND.innerText = newData.background;
            if(newData.url === null){
                TEXT_URL.parentNode.classList.add("hide");
            }else{
                TEXT_URL.href = newData.url;
                TEXT_URL.innerText = "詳細はこちら";
            }
            IMG_WORK.src = "storage/img/"+newData.image;
            removeChild();
            newData.language.forEach(language => {
                let newLanguage = document.createElement("p");
                newLanguage.classList.add("text-sm","text-gray-700");
                newLanguage.innerText = language;
                CONTAINER_LANGUAGE.appendChild(newLanguage);
            });
            setActiveBtn(BTN[i]);
            resetScrollHint();
        })
    }
}

function setActiveMenu(container, id) {
    container.querySelectorAll(".hoverable").forEach(el => el.classList.remove("active"));
    const target = container.querySelector("#" + CSS.escape(id));
    if (target) target.classList.add("active");
}

function setActiveBtn(btn) {
    const container = btn.closest("[id^='container_']");
    if (container) {
        container.querySelectorAll(".hoverable").forEach(el => el.classList.remove("active"));
    }
    btn.classList.add("active");
}

function removeChild() {
    while (CONTAINER_LANGUAGE.firstChild) {
        CONTAINER_LANGUAGE.removeChild(CONTAINER_LANGUAGE.firstChild);
    }
}

// スクロールヒントの表示/非表示
const SCROLL_CONTAINER = document.getElementById("work_detail_scroll");
const SCROLL_HINT = document.getElementById("scroll_hint");

function updateScrollHint() {
    const isScrollable = SCROLL_CONTAINER.scrollHeight > SCROLL_CONTAINER.clientHeight;
    const hasScrolled = SCROLL_CONTAINER.scrollTop > 10;
    SCROLL_HINT.style.opacity = (isScrollable && !hasScrolled) ? "1" : "0";
}

function resetScrollHint() {
    SCROLL_CONTAINER.scrollTop = 0;
    updateScrollHint();
}

SCROLL_CONTAINER.addEventListener("scroll", updateScrollHint);
updateScrollHint();

// 左画面
const TEXT_CURRENT_PAGE = document.getElementById("current_title");
const RIGHT_ARROW = document.getElementById("right_arrow");
const LEFT_ARROW = document.getElementById("left_arrow");

// 右画面
const CONTAINER_PERSONAL_MENU = document.getElementById("container_personal_menu");
const CONTAINER_BUSINESS_MENU = document.getElementById("container_business_menu");
const CONTAINER_LANGUAGE = document.getElementById("container_language");
const BTN_PERSONAL_MENU = document.getElementsByClassName("personal_btn");
const BTN_BUSINESS_MENU = document.getElementsByClassName("business_btn");
const TEXT_OVERVIEW = document.getElementById("text_overview");
const TEXT_BACKGROUND = document.getElementById("text_background");
const TEXT_URL = document.getElementById("text_url");
const IMG_WORK = document.getElementById("work_img");
let currentPageFlag = true;

setData(BTN_PERSONAL_MENU,personalWorkData);

RIGHT_ARROW.addEventListener("click",function () {
    if(currentPageFlag){
        setData(BTN_BUSINESS_MENU,businessWorkData);
        TEXT_CURRENT_PAGE.innerText = "会社開発";
        CONTAINER_PERSONAL_MENU.classList.add("hide");
        CONTAINER_BUSINESS_MENU.classList.remove("hide");
        currentPageFlag = false;
    }else{
        setData(BTN_PERSONAL_MENU,personalWorkData);
        TEXT_CURRENT_PAGE.innerText = "個人開発";
        CONTAINER_BUSINESS_MENU.classList.add("hide");
        CONTAINER_PERSONAL_MENU.classList.remove("hide");
        currentPageFlag = true;
    }
})

LEFT_ARROW.addEventListener("click",function () {
    if(currentPageFlag){
        setData(BTN_BUSINESS_MENU,businessWorkData);
        TEXT_CURRENT_PAGE.innerText = "会社開発";
        CONTAINER_PERSONAL_MENU.classList.add("hide");
        CONTAINER_BUSINESS_MENU.classList.remove("hide");
        currentPageFlag = false;
    }else{
        setData(BTN_PERSONAL_MENU,personalWorkData);
        TEXT_CURRENT_PAGE.innerText = "個人開発";
        CONTAINER_BUSINESS_MENU.classList.add("hide");
        CONTAINER_PERSONAL_MENU.classList.remove("hide");
        currentPageFlag = true;
    }
})

function setData(BTN,DATA){
    for (let i = 0; i < BTN.length; i++) {
        BTN[i].addEventListener("click",function () {
            TEXT_URL.parentNode.classList.remove("hide");
            let id = BTN[i].id;
            let newData = DATA.find(work => work.id == id);
            TEXT_OVERVIEW.innerText = newData.overview;
            TEXT_BACKGROUND.innerText = newData.background;
            if(newData.url === false){
                TEXT_URL.parentNode.classList.add("hide");
            }else{
                TEXT_URL.href = newData.url;
            }
            IMG_WORK.src = "storage/img/"+newData.image;
            removeChild();
            newData.language.forEach(language => {
                let newLanguage = document.createElement("p");
                newLanguage.innerText = language;
                CONTAINER_LANGUAGE.appendChild(newLanguage);
            });
        })
    }
}

function removeChild() {
    while (CONTAINER_LANGUAGE.firstChild) {
        CONTAINER_LANGUAGE.removeChild(CONTAINER_LANGUAGE.firstChild);
    }
}

// 左画面
const TEXT_CURRENT_PAGE = document.getElementById("current_title");
const RIGHT_ARROW = document.getElementById("right_arrow");
const LEFT_ARROW = document.getElementById("left_arrow");

// 右画面
const CONTAINER_PERSONAL_MENU = document.getElementById("container_personal_menu")
const CONTAINER_BUSINESS_MENU = document.getElementById("container_business_menu");
const MOBILE_PERSONAL_MENU = document.getElementById("container_mobile_personal_menu");
const MOBILE_BUSINESS_MENU = document.getElementById("container_mobile_business_menu");
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
        SwitchView("会社開発",CONTAINER_PERSONAL_MENU,CONTAINER_BUSINESS_MENU,false,businessWorkData,MOBILE_PERSONAL_MENU,MOBILE_BUSINESS_MENU);
    }else{
        setData(BTN_PERSONAL_MENU,personalWorkData);
        SwitchView("個人開発",CONTAINER_BUSINESS_MENU,CONTAINER_PERSONAL_MENU,true,personalWorkData,MOBILE_BUSINESS_MENU,MOBILE_PERSONAL_MENU);
    }
})

LEFT_ARROW.addEventListener("click",function () {
    if(currentPageFlag){
        setData(BTN_BUSINESS_MENU,businessWorkData);
        SwitchView("会社開発",CONTAINER_PERSONAL_MENU,CONTAINER_BUSINESS_MENU,false,businessWorkData);
    }else{
        setData(BTN_PERSONAL_MENU,personalWorkData);
        SwitchView("個人開発",CONTAINER_BUSINESS_MENU,CONTAINER_PERSONAL_MENU,true,personalWorkData);
    }
})

function SwitchView(Title,HideElement,ShowElement,Flag,DATA,MobileHideElement,MobileShowElement) {
    TEXT_CURRENT_PAGE.innerText = Title;
    HideElement.classList.add("hide");
    ShowElement.classList.remove("hide");
    MobileHideElement.classList.add("hide");
    MobileShowElement.classList.remove("hide");
    currentPageFlag = Flag;
    TEXT_OVERVIEW.innerText = DATA[0].overview;
    TEXT_BACKGROUND.innerText = DATA[0].background;
    IMG_WORK.src = "storage/img/"+DATA[0].image;
    removeChild();
    DATA[0].language.forEach(language => {
        let newLanguage = document.createElement("p");
        newLanguage.classList.add("text-sm");
        newLanguage.innerText = language;
        CONTAINER_LANGUAGE.appendChild(newLanguage);
    });
}

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

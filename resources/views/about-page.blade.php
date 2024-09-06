<x-template title="ポートフォリオ" css="app.css">
    {{--TOEICモダルopen時の背景黒幕--}}
    <div class="hide fixed min-h-screen w-full flex flex-col justify-center items-center -z-10" id="toeic_modal">
        {{--モダルコンテナ--}}
        <div class="w-[90%] md:w-[80%] flex flex-col items-center justify-center relative rounded-md">
            <button class="absolute -top-4 -right-4 text-2xl w-[50px] h-[50px] bg-red-500 text-white rounded-full" id="close_toeic_modal">X</button>
            <img src="{{asset('storage/img/toeic.jpeg')}}" class="w-full h-[150px] md:h-[45dvh] object-cover">
            <aside class="bg-ability-value-bg w-full flex flex-col items-center justify-center relative max-h-[60dvh] md:max-h-[40dvh]">
                {{--スクロールヒント--}}
                <div id="scroll_indicator" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black opacity-50 w-[200px] h-[100px] flex justify-center items-center rounded-lg">
                    <p class="text-white text-center text-2xl">スクロール↓</p>
                </div>
                {{--過去の受験歴--}}
                <div class="overflow-y-scroll flex flex-col w-full">
                    <div class="w-full flex justify-center items-start gap-8">
                        <table>
                            <thead class="bg-ability-key-bg text-white">
                            <tr>
                                <th>受験回数（計15回）</th>
                                <th>受験日</th>
                                <th>スコア（990点満点）</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>15回目</td>
                                <td>2024年5月26日</td>
                                <td>870点</td>
                            </tr>
                            <tr>
                                <td>14回目</td>
                                <td>2022年6月26日</td>
                                <td>840点</td>
                            </tr>
                            <tr>
                                <td>13回目</td>
                                <td>2022年5月29日</td>
                                <td>820点</td>
                            </tr>
                            <tr>
                                <td>12回目</td>
                                <td>2022年2月27日</td>
                                <td>820点</td>
                            </tr>
                            <tr>
                                <td>11回目</td>
                                <td>2021年2月28日</td>
                                <td>805点</td>
                            </tr>
                            <tr>
                                <td>10回目</td>
                                <td>2020年10月25日</td>
                                <td>795点</td>
                            </tr>
                            <tr>
                                <td>9回目</td>
                                <td>2019年1月13日</td>
                                <td>690点</td>
                            </tr>
                            <tr>
                                <td>8回目</td>
                                <td>2018年12月9日</td>
                                <td>745点</td>
                            </tr>
                            <tr>
                                <td>7回目</td>
                                <td>2018年9月9日</td>
                                <td>745点</td>
                            </tr>
                            <tr>
                                <td>6回目</td>
                                <td>2018年3月11日</td>
                                <td>715点</td>
                            </tr>
                            <tr>
                                <td>5回目</td>
                                <td>2018年1月28日</td>
                                <td>755点</td>
                            </tr>
                            <tr>
                                <td>4回目</td>
                                <td>2018年1月27日</td>
                                <td>685点</td>
                            </tr>
                            <tr>
                                <td>3回目</td>
                                <td>2017年12月2日</td>
                                <td>695点</td>
                            </tr>
                            <tr>
                                <td>2回目</td>
                                <td>2017年11月4日</td>
                                <td>660点</td>
                            </tr>
                            <tr>
                                <td>1回目</td>
                                <td>2015年5月30日</td>
                                <td>455点</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </aside>
        </div>
    </div>
    {{--Tamwoodモダル--}}
    <x-ability-modal name="tamwood" src="storage/img/tamwood.jpeg"></x-ability-modal>
    {{--KNTモダル--}}
    <x-ability-modal name="knt" src="storage/img/knt.jpeg"></x-ability-modal>


    <div class="min-h-screen flex flex-col">
        {{--head（じょうほう）--}}
        <section class="flex items-center text-white text-sm md:text-4xl h-[12dvh]" id="head_info">
            <div class="bg-about-title-bg-light-blue h-full flex items-center">
                <h1 class="bg-about-title-bg-brown h-full flex items-center px-2 md:px-8 rounded-r-full md:pr-8 border-r-4 border-solid border-about-title-dot">
                    ポケモンじょうほう●
                </h1>
            </div>
            <div class="bg-about-title-bg-command h-full">
                <p class="text-about-title-dot bg-about-title-bg-light-blue h-full px-4 md:px-16 rounded-r-full flex items-center">●</p>
            </div>
            <div class="bg-about-title-bg-command py-4 flex-1 flex justify-center items-center gap-4 md:gap-14 h-full">
                <div class="flex flex-col md:flex-row justify-end items-center gap-1 md:gap-2">
                    <div class="cross-key-container relative">
                        <div class="btn cross-key-btn top-mark"></div>
                        <div class="btn cross-key-btn left-mark"></div>
                        <div class="btn cross-key-btn center-mark">●</div>
                        <button class="btn cross-key-btn right-mark" id="right_btn">▲</button>
                        <div class="btn cross-key-btn bottom-mark"></div>
                    </div>
                    <p class="switch-text cursor-pointer text-[12px] md:text-4xl">きりかえ</p>
                </div>
                <div class="flex flex-col md:flex-row justify-between items-center gap-1 md:gap-2">
                    <p><a href="/battle" class="a-btn">B</a></p>
                    <p><a href="/battle" class="text-[12px] md:text-4xl">バトル</a></p>
                </div>
            </div>
        </section>

        {{--head（のうりょく）--}}
        <section class="flex items-center text-white text-sm md:text-4xl h-[12dvh] hide" id="head_ability">
            <div class="bg-about-title-bg-light-blue h-full flex items-center">
                <h1 class="bg-about-title-bg-brown h-full flex items-center px-4 md:px-16 rounded-r-full border-r-4 border-solid border-about-title-dot">
                    ●
                </h1>
            </div>
            <div class="bg-about-title-bg-command h-full">
                <p class="text-about-title-dot bg-about-title-bg-light-blue h-full px-2 md:px-8 rounded-r-full flex items-center">ポケモンのうりょく●</p>
            </div>
            <div class="bg-about-title-bg-command py-4 flex-1 flex justify-center items-center gap-4 md:gap-14 h-full">
                <div class="flex flex-col md:flex-row justify-end items-center gap-1 md:gap-2">
                    <div class="cross-key-container relative">
                        <div class="btn cross-key-btn top-mark"></div>
                        <button class="btn cross-key-btn left-mark" id="left_btn">▲</button>
                        <div class="btn cross-key-btn center-mark">●</div>
                        <div class="btn cross-key-btn right-mark"></div>
                        <div class="btn cross-key-btn bottom-mark"></div>
                    </div>
                    <p class="switch-text cursor-pointer text-[12px] md:text-4xl">きりかえ</p>
                </div>
                <div class="flex flex-col md:flex-row justify-between items-center gap-1 md:gap-2">
                    <p><a href="/battle" class="a-btn">B</a></p>
                    <p><a href="/battle" class="text-[12px] md:text-4xl">バトル</a></p>
                </div>
            </div>
        </section>

        {{--main--}}
        <section class="border-solid border-about-border w-full flex-1 pb-4 md:pb-0 xl:pb-4 bg-info-bg flex flex-col gap-6" style="border-width: 8px;" id="about_main">
            {{--top--}}
            <article class="w-full flex flex-col md:flex-row">
                {{--left--}}
                <div class="w-full md:w-[50%] border-solid border-about-border h-full" style=" border-right-width: 8px;border-bottom-width: 8px;">
                    <div class="bg-info-img-bg py-4" id="img_container">
                        <aside class="flex justify-between text-white px-8 md:px-4 pb-2">
                            <p class="text-2xl md:text-5xl">Lv27</p>
                            <p class="text-2xl md:text-5xl">今井 祐輔 <span class="text-blue-500">♂</span></p>
                        </aside>
                        <div class="bg-white mx-4 flex justify-center items-center rounded-md">
                            <img src="{{asset("storage/img/pokemon02.png")}}" class="w-[80%] h-[200px] md:w-[80%] md:h-[45dvh] object-cover">
                        </div>
                    </div>
                </div>

                {{--right（じょうほう）--}}
                <div class="ml-4 h-full w-full md:w-[50%] flex flex-col gap-6 my-4" id="info_right_container">
                    <x-info-detail key="なまえ" value="今井 祐輔 （いまい ゆうすけ）"></x-info-detail>
                    <x-info-detail key="生年月日" value="1996.11.25"></x-info-detail>
                    <x-info-detail key="生息地" value="三重県"></x-info-detail>
                    <div class="flex flex-col md:flex-row items-start md:items-center">
                        <div class="bg-info-key-bg relative rounded-full w-[10rem] h-[30px] md:h-[40px] flex items-center justify-center z-20">
                            <p class="text-white md:text-2xl absolute">目撃情報</p>
                        </div>

                        <div class="bg-white w-[90%] py-4 px-6 rounded-lg mt-[-0.5em] ml-[0.5em] md:mt-0 md:ml-[-20px] z-10 flex-1 mr-[30px]">
                            <p class="text-3xl">🇯🇵🇺🇸🇨🇦🇬🇧🇫🇷🇩🇪🇳🇱🇧🇪🇹🇭🇹🇼🇻🇳🇬🇺</p>
                        </div>
                    </div>
                    <x-info-detail key="コンタクト" value="yu_suke1125aadxyz@icloud.com"></x-info-detail>
                </div>

                {{--right（のうりょく）--}}
                <div class="md:ml-4 h-full w-full md:w-[50%] flex flex-col gap-6 my-4 hide" id="ability_right_container">
                    <x-ability-language-container key="マークアップ言語">
                        <x-ability-language src="storage/img/language-html.png" language="HTML"></x-ability-language>
                        <x-ability-language src="storage/img/language-css.png" language="CSS"></x-ability-language>
                        <x-ability-language src="storage/img/language-sass.png" language="Sass(SCSS)"></x-ability-language>
                    </x-ability-language-container>
                    <x-ability-language-container key="プログラミング言語">
                        <x-ability-language src="storage/img/language-javascript.svg" language="JavaScript"></x-ability-language>
                        <x-ability-language src="storage/img/language-nodejs.png" language="Node.js"></x-ability-language>
                        <x-ability-language src="storage/img/language-jquery.png" language="JQuery"></x-ability-language>
                        <x-ability-language src="storage/img/language-php.png" language="PHP"></x-ability-language>
                    </x-ability-language-container>
                    <x-ability-language-container key="フレームワーク">
                        <x-ability-language src="storage/img/language-laravel.svg" language="Laravel"></x-ability-language>
                        <x-ability-language src="storage/img/language-nextjs.svg" language="Next.js"></x-ability-language>
                        <x-ability-language src="storage/img/language-react.png" language="React"></x-ability-language>
                        <x-ability-language src="storage/img/language-vue.png" language="Vue.js"></x-ability-language>
                        <x-ability-language src="storage/img/language-angularjs.png" language="AngularJS"></x-ability-language>
                    </x-ability-language-container>
                    <x-ability-language-container key="ツール">
                        <a href="https://github.com/ima-yusuke" target="_blank" class="flex flex-col items-center gap-1">
                            <img src="{{asset("storage/img/language-github.svg")}}" class="w-[25px] h-[25px] md:w-[2.5rem] md:h-[2.5rem] object-cover">
                            <p class="text-xs">Git</p>
                        </a>
                        <x-ability-language src="storage/img/language-tailwindcss.svg" language="Tailwind CSS"></x-ability-language>
                        <x-ability-language src="storage/img/language-bootstrap.svg" language="Bootstrap"></x-ability-language>
                        <x-ability-language src="storage/img/language-docker.png" language="Docker"></x-ability-language>
                        <x-ability-language src="storage/img/language-mysql.png" language="MySQL"></x-ability-language>
                    </x-ability-language-container>
                </div>
            </article>

            {{--bottom（じょうほう）--}}
            <article class="flex justify-center md:mt-[1em]" id="info_bottom_container">
                <div class="w-[90%] bg-white rounded-lg relative">
                    <div class="absolute -top-[5%] -left-[2%]">
                        <div class="bg-info-key-bg relative rounded-full w-[200px] md:w-[450px] h-[30px] md:h-[40px] flex items-center justify-center z-20">
                            <p class="text-white md:text-2xl absolute">トレーナーメモ</p>
                        </div>
                    </div>
                    <p class="text-base md:text-2xl pt-6 md:pt-10 px-6 leading-[2.5] md:leading-loose" id="trainer_memo">
                        <span class="under-line">
                            プログラミングと英語学習が大好き。基本的に英語で話しかけても問題ない。放っておくとバックパッカーで一人どこかに旅に出ていく。エサはマックのフライドポテトを与えると喜ぶ。
                            世界一周に憧れており、webサイト制作を通してその夢を叶えてくれるトレーナーを探している。まだまだ進化の可能性も秘めているポケモンである。
                        </span>
                    </p>
                </div>
            </article>

            {{--bottom（のうりょく）--}}
            <article class="flex justify-center hide md:mt-[1.5em]" id="ability_bottom_container">
                <div class="w-[95%] md:w-[90%] bg-ability-value-bg rounded-lg relative">
                    <div class="absolute -top-[5%] md:-top-[10%] -left-[2%]">
                        <div class="bg-ability-key-bg relative rounded-full w-[200px] md:w-[450px] h-[30px] md:h-[40px] flex items-center justify-center z-20">
                            <p class="text-white md:text-2xl absolute">けいけんち</p>
                        </div>
                    </div>
                    <p class="md:text-xl pt-6 pb-4 mn:pb-0 px-2 md:px-6 leading-loose md:leading-[2]" id="trainer_memo">
                        <span class="under-line">
                            ■語学：<span class="text-blue-500 hover:cursor-pointer" id="open_toeic_modal">TOEIC 870点</span>、<a href="https://www.queensu.ca/" target="_blank" class="text-blue-500">Queen's University</a>（語学学校卒業）、
                            <a href="https://tamwood.com/" target="_blank" class="text-blue-500">Tamwood Language School</a>（語学学校卒業）<br>
                            ■営業：近畿日本ツーリスト（株） <span class="text-blue-500 hover:cursor-pointer" id="open_knt_modal">新人賞受賞</span><br>
                            ■プログラミング：<a href="https://tamwood.com/study-work/web-developer/" target="_blank" class="text-blue-500">Tamwood Career</a>（Web Developmentコース卒業 / <span class="text-blue-500 hover:cursor-pointer" id="open_tamwood_modal">Diploma取得</span>）
                        </span>
                    </p>
                </div>
            </article>
        </section>
    </div >


    @vite('resources/js/about.js')
</x-template>


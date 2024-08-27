<x-template title="ポートフォリオ" css="app.css">
    {{--TOEICモダルopen時の背景黒幕--}}
    <div class="hide fixed min-h-screen w-full flex flex-col justify-center items-center bg-black -z-10" id="toeic_modal">
        {{--モダルコンテナ--}}
        <div class="w-[80%] flex flex-col items-center justify-center relative rounded-md">
            <button class="absolute -top-4 -right-4 text-2xl w-[50px] h-[50px] bg-red-500 text-white rounded-full" id="close_toeic_modal">X</button>
            <img src="{{asset('storage/img/toeic.jpeg')}}" class="w-full h-[400px] object-cover">
            <aside class="bg-ability-value w-full flex flex-col items-center justify-center relative max-h-[350px]">
                {{--スクロールヒント--}}
                <div id="scroll_indicator" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black opacity-50 w-[200px] h-[100px] flex justify-center items-center rounded-lg">
                    <p class="text-white text-center text-2xl">スクロール↓</p>
                </div>
                {{--過去の受験歴--}}
                <div class="overflow-y-scroll flex flex-col w-full">
                    <div class="w-full flex justify-center items-start gap-8">
                        <table>
                            <thead class="bg-ability-key text-white">
                            <tr>
                                <th>受験回数（計15回）</th>
                                <th>受験日</th>
                                <th>スコア（990点満点）</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1回目</td>
                                <td>2015年5月30日</td>
                                <td>455点</td>
                            </tr>
                            <tr>
                                <td>2回目</td>
                                <td>2017年11月4日</td>
                                <td>660点</td>
                            </tr>
                            <tr>
                                <td>3回目</td>
                                <td>2017年12月2日</td>
                                <td>695点</td>
                            </tr>
                            <tr>
                                <td>4回目</td>
                                <td>2018年1月27日</td>
                                <td>685点</td>
                            </tr>
                            <tr>
                                <td>5回目</td>
                                <td>2018年1月28日</td>
                                <td>755点</td>
                            </tr>
                            <tr>
                                <td>6回目</td>
                                <td>2018年3月11日</td>
                                <td>715点</td>
                            </tr>
                            <tr>
                                <td>7回目</td>
                                <td>2018年9月9日</td>
                                <td>745点</td>
                            </tr>
                            <tr>
                                <td>8回目</td>
                                <td>2018年12月9日</td>
                                <td>745点</td>
                            </tr>
                            <tr>
                                <td>9回目</td>
                                <td>2019年1月13日</td>
                                <td>690点</td>
                            </tr>
                            <tr>
                                <td>10回目</td>
                                <td>2020年10月25日</td>
                                <td>795点</td>
                            </tr>
                            <tr>
                                <td>11回目</td>
                                <td>2021年2月28日</td>
                                <td>805点</td>
                            </tr>
                            <tr>
                                <td>12回目</td>
                                <td>2022年2月27日</td>
                                <td>820点</td>
                            </tr>
                            <tr>
                                <td>13回目</td>
                                <td>2022年5月29日</td>
                                <td>820点</td>
                            </tr>
                            <tr>
                                <td>14回目</td>
                                <td>2022年6月26日</td>
                                <td>840点</td>
                            </tr>
                            <tr>
                                <td>15回目</td>
                                <td>2024年5月26日</td>
                                <td>870点</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    {{--KNTモダルopen時の背景黒幕--}}
    <div class="hide fixed min-h-screen w-full flex flex-col justify-center items-center bg-black -z-10" id="knt_modal">
        {{--モダルコンテナ--}}
        <div class="w-[80%] flex flex-col items-center justify-center relative rounded-md">
            <button class="absolute -top-4 -right-4 text-2xl w-[50px] h-[50px] bg-red-500 text-white rounded-full" id="close_knt_modal">X</button>
            <img src="{{asset('storage/img/knt.jpeg')}}" class="w-full h-[750px] object-cover">
        </div>
    </div>

    <div class="min-h-screen flex flex-col">
        {{--head（じょうほう）--}}
        <section class="flex items-center text-white text-5xl h-[100px]" id="head_info">
            <div class="bg-bg-about-dot h-full flex items-center">
                <h1 class="bg-bg-about-title h-full flex items-center px-8 rounded-r-full pr-8 border-r-4 border-solid border-about-dot">
                    ポケモンじょうほう●
                </h1>
            </div>
            <div class="bg-bg-about-command h-full">
                <p class="text-about-dot bg-bg-about-dot h-full px-16 rounded-r-full flex items-center">●</p>
            </div>
            <div class="bg-bg-about-command py-4 flex-1 flex justify-center gap-14 max-h-[100px]">
                <div class="flex items-center gap-2">
                    <div class="cross-key-container relative">
                        <div class="btn cross-key-btn top-mark"></div>
                        <div class="btn cross-key-btn left-mark"></div>
                        <div class="btn cross-key-btn center-mark">●</div>
                        <button class="btn cross-key-btn right-mark" id="right_btn">▲</button>
                        <div class="btn cross-key-btn bottom-mark"></div>
                    </div>
                    <p class="switch-text cursor-pointer">きりかえ</p>
                </div>
                <div class="flex items-center gap-2">
                    <a href="/" class="a-btn">A</a>
                    <p><a href="/">やめる</a></p>
                </div>
            </div>
        </section>

        {{--head（のうりょく）--}}
        <section class="flex items-center text-white text-5xl h-[100px] hide" id="head_ability">
            <div class="bg-bg-about-dot h-full flex items-center">
                <h1 class="bg-bg-about-title h-full flex items-center px-16 rounded-r-full border-r-4 border-solid border-about-dot">
                    ●
                </h1>
            </div>
            <div class="bg-bg-about-command h-full">
                <p class="text-about-dot bg-bg-about-dot h-full px-8 rounded-r-full flex items-center">ポケモンのうりょく●</p>
            </div>
            <div class="bg-bg-about-command py-4 flex-1 flex justify-center gap-14 max-h-[100px]">
                <div class="flex items-center gap-2">
                    <div class="cross-key-container relative">
                        <div class="btn cross-key-btn top-mark"></div>
                        <button class="btn cross-key-btn left-mark" id="left_btn">▲</button>
                        <div class="btn cross-key-btn center-mark">●</div>
                        <div class="btn cross-key-btn right-mark"></div>
                        <div class="btn cross-key-btn bottom-mark"></div>
                    </div>
                    <p class="switch-text cursor-pointer">きりかえ</p>
                </div>
                <div class="flex items-center gap-2">
                    <a href="/" class="a-btn">A</a>
                    <p><a href="/">やめる</a></p>
                </div>
            </div>
        </section>

        {{--main--}}
        <section class="border-solid border-about-border w-full flex-1 bg-bg-about-main flex flex-col gap-6" style="border-width: 8px;" id="about_main">
            {{--top--}}
            <article class="w-full flex">
                {{--left--}}
                <div class="w-[50%] border-solid border-about-border h-full" style=" border-right-width: 8px;border-bottom-width: 8px;">
                    <div class="bg-bg-about-blue py-4" id="img_container">
                        <aside class="flex justify-between text-white px-4 pb-2">
                            <p class="text-5xl">Lv27</p>
                            <p class="text-5xl">今井 祐輔 ♂</p>
                        </aside>
                        <div class="bg-white mx-4 flex justify-center items-center rounded-md">
                            <img src="{{asset("storage/img/pokemon02.png")}}" class="w-[80%] h-[400px] object-cover">
                        </div>
                    </div>
                </div>

                {{--right（じょうほう）--}}
                <div class="ml-4 h-full w-[50%] flex flex-col gap-6 my-4" id="info_right_container">
                    <x-about-detail key="なまえ" value="今井 祐輔 （いまい ゆうすけ）"></x-about-detail>
                    <x-about-detail key="生年月日" value="1996.11.25"></x-about-detail>
                    <x-about-detail key="生息地" value="三重県"></x-about-detail>
                    <div class="flex items-center">
                        <div class="bg-about-key relative rounded-full w-[230px] h-[40px] flex items-center justify-center z-20">
                            <p class="text-white text-2xl absolute">目撃情報</p>
                        </div>

                        <div class="bg-white py-4 px-6 rounded-lg ml-[-20px] z-10 flex-1 mr-[30px]">
                            <p class="text-3xl">🇯🇵🇺🇸🇨🇦🇬🇧🇫🇷🇩🇪🇳🇱🇧🇪🇹🇭🇹🇼🇻🇳🇬🇺</p>
                        </div>
                    </div>
                    <x-about-detail key="コンタクト" value="yu_suke1125aadxyz@icloud.com"></x-about-detail>
                </div>

                {{--right（のうりょく）--}}
                <div class="ml-4 h-full w-[50%] flex flex-col gap-6 my-4 hide" id="ability_right_container">
                    <x-language-container key="マークアップ言語">
                        <x-language src="storage/img/html.png" language="HTML"></x-language>
                        <x-language src="storage/img/css.png" language="CSS"></x-language>
                        <x-language src="storage/img/sass.png" language="Sass(SCSS)"></x-language>
                    </x-language-container>
                    <x-language-container key="プログラミング言語">
                        <x-language src="storage/img/javascript.svg" language="JavaScript"></x-language>
                        <x-language src="storage/img/nodejs.png" language="Node.js"></x-language>
                        <x-language src="storage/img/jquery.png" language="JQuery"></x-language>
                        <x-language src="storage/img/php.png" language="PHP"></x-language>
                    </x-language-container>
                    <x-language-container key="フレームワーク">
                        <x-language src="storage/img/laravel.svg" language="Laravel"></x-language>
                        <x-language src="storage/img/nextjs.svg" language="Next.js"></x-language>
                        <x-language src="storage/img/react.png" language="React"></x-language>
                        <x-language src="storage/img/vue.png" language="Vue.js"></x-language>
                        <x-language src="storage/img/angularjs.png" language="AngularJS"></x-language>
                    </x-language-container>
                    <x-language-container key="ツール">
                        <x-language src="storage/img/github.svg" language="Git,GitHub"></x-language>
                        <x-language src="storage/img/tailwindcss.svg" language="Tailwind CSS"></x-language>
                        <x-language src="storage/img/bootstrap.svg" language="Bootstrap"></x-language>
                        <x-language src="storage/img/docker.png" language="Docker"></x-language>
                        <x-language src="storage/img/mysql.png" language="MySQL"></x-language>
                    </x-language-container>
                </div>
            </article>

            {{--bottom（じょうほう）--}}
            <article class="flex justify-center" id="info_bottom_container">
                <div class="w-[90%] bg-white rounded-lg relative">
                    <div class="absolute -top-[5%] -left-[2%]">
                        <div class="bg-about-key relative rounded-full w-[450px] h-[40px] flex items-center justify-center z-20">
                            <p class="text-white text-2xl absolute">トレーナーメモ</p>
                        </div>
                    </div>
                    <p class="text-2xl pt-10 px-6 leading-loose" id="trainer_memo">
                        <span class="under-line">
                            プログラミングと英語学習が大好き。基本的に英語で話しかけても問題ない。放っておくとバックパッカーで一人どこかに旅に出ていく。エサはマックのフライドポテトを与えると喜ぶ。
                            世界一周に憧れており、webサイト制作を通してその夢を叶えてくれるトレーナーを探している。まだまだ進化の可能性も秘めているポケモンである。
                        </span>
                    </p>
                </div>
            </article>

            {{--bottom（のうりょく）--}}
            <article class="flex justify-center hide" id="ability_bottom_container">
                <div class="w-[90%] bg-ability-value rounded-lg relative">
                    <div class="absolute -top-[10%] -left-[2%]">
                        <div class="bg-ability-key relative rounded-full w-[450px] h-[40px] flex items-center justify-center z-20">
                            <p class="text-white text-2xl absolute">けいけんち</p>
                        </div>
                    </div>
                    <p class="text-xl pt-6 px-6 leading-loose" id="trainer_memo">
                        <span class="under-line">
                            ■語学：<span class="text-blue-500 hover:cursor-pointer" id="open_toeic_modal">TOEIC 870点</span>（2024.5）、<a href="https://www.queensu.ca/" target="_blank" class="text-blue-500">Queen's University</a>（語学学校卒業）、
                            <a href="https://tamwood.com/" target="_blank" class="text-blue-500">Tamwood Language School</a>（語学学校卒業）<br>
                            ■営業：近畿日本ツーリスト株式会社 <span class="text-blue-500 hover:cursor-pointer" id="open_knt_modal">新人賞受賞</span>（年間予算達成・10年ぶりの基幹校契約 売上高 32,000千円）<br>
                            ■プログラミング：<a href="https://tamwood.com/study-work/web-developer/" target="_blank" class="text-blue-500">Tamwood Career</a>（Web Developmentコース卒業 / Diploma取得）
                        </span>
                    </p>
                </div>
            </article>
        </section>
    </div >


    @vite('resources/js/about.js')
</x-template>

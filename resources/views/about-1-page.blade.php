<x-template title="ポートフォリオ" css="app.css">
    <div class="min-h-screen flex flex-col">
        {{--head--}}
        <section class="flex items-center text-white text-5xl h-[100px]">
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
                        <button class="btn cross-key-btn right-mark">▲</button>
                        <div class="btn cross-key-btn bottom-mark"></div>
                    </div>
                    <p><a>きりかえ</a></p>
                </div>
                <div class="flex items-center gap-2">
                    <a href="/" class="a-btn">A</a>
                    <p><a href="/">やめる</a></p>
                </div>
            </div>
        </section>

        {{--main--}}
        <section class="border-solid border-about-border w-full flex-1 bg-bg-about-main flex flex-col gap-6" style="border-width: 8px;">
            {{--top--}}
            <article class="w-full flex">
                {{--left--}}
                <div class="w-[50%] border-solid border-about-border h-full" style=" border-right-width: 8px;border-bottom-width: 8px;">
                    <div class="bg-bg-about-blue py-4">
                        <aside class="flex justify-between text-white px-4 pb-2">
                            <p class="text-5xl">Lv27</p>
                            <p class="text-5xl">今井 祐輔♂</p>
                        </aside>
                        <div class="bg-white mx-4 flex justify-center items-center rounded-md">
                            <img src="{{asset("storage/img/pokemon02.png")}}" class="w-[80%] h-[400px] object-cover">
                        </div>
                    </div>
                </div>

                {{--right--}}
                <div class="ml-4 h-full flex flex-col gap-6 my-4">
                    <x-about-detail key="図鑑No." value="006"></x-about-detail>
                    <x-about-detail key="なまえ" value="今井 祐輔"></x-about-detail>
                    <x-about-detail key="生年月日" value="1996.11.25"></x-about-detail>
                    <x-about-detail key="生息地" value="三重県"></x-about-detail>
                </div>
            </article>

            {{--bottom--}}
            <article class="flex justify-center">
                <div class="w-[90%] bg-white rounded-lg relative">
                    <div class="absolute -top-[5%] -left-[2%]">
                        <div class="bg-about-key relative rounded-full w-[450px] h-[40px] flex items-center justify-center z-20">
                            <p class="text-white text-4xl absolute">トレーナーメモ</p>
                        </div>
                    </div>
                    <p class="text-2xl pt-10 px-6 relative leading-loose">
                        プログラミングと英語学習が大好き。基本的に英語で話しかけても問題ない。放っておくとバックパッカーで一人どこかに旅に出ていく。エサはマックのフライドポテトを与えると喜ぶ。
                        世界一周に憧れており、webサイト制作を通してその夢を叶えてくれるトレーナーを探している。まだまだ進化の可能性も秘めているポケモンである。
                    </p>
                </div>
            </article>
        </section>
    </div>
</x-template>

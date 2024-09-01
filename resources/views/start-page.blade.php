<x-template title="ポートフォリオ" css="app.css">
{{--PC用--}}
    <div class="hidden md:flex w-full min-h-screen justify-center items-center gap-20 bg-work-command-bg">
        {{--十字キー--}}
        <div>
            <div class="large-cross-key-container relative">
                <div class="btn large-cross-key-btn top-mark">▲</div>
                <div class="btn large-cross-key-btn left-mark">▲</div>
                <div class="btn large-cross-key-btn center-mark">●</div>
                <button class="btn large-cross-key-btn right-mark" id="right_btn">▲</button>
                <div class="btn large-cross-key-btn bottom-mark">▲</div>
            </div>
            <aside class="absolute bottom-28 flex flex-col gap-6">
                <div class="flex transform rotate-[10deg]">
                    <p class="rounded-md border border-solid border-white  text-white h-[25px] px-6">START</p>
                    <p class="w-[25px] h-[25px] rounded-full bg-white relative z-20 ml-[-1em]"></p>
                </div>
                <div class="flex transform rotate-[10deg]">
                    <p class="rounded-md border border-solid border-white  text-white h-[25px] px-6">SELECT</p>
                    <p class="w-[25px] h-[25px] rounded-full bg-white relative z-20 ml-[-1em]"></p>
                </div>
            </aside>
        </div>

        {{--ゲームスクリーン--}}
        <div class="w-1/2 border-solid border-gray-800 game-screen-border rounded-lg" style="border-width: 25px">
            <article class="w-full bg-work-bg flex flex-col items-center justify-center gap-6 py-16">
                <x-start-menu title="さいしょから はじめる" :flag="true"/>
                <x-start-menu title="このサイト について" :flag="false"/>
                <x-start-menu title="コンタクト じょうほう" :flag="false"/>
            </article>
            <p class="text-white bg-gray-800 w-full text-center pt-6 text-2xl">YUSUKE IMAI PORTFOLIO</p>
        </div>

        {{--ボタン--}}
        <div>
            <aside class="flex gap-10">
                <p><a class="a-large-btn mt-8">B</a></p>
                <p><a class="a-large-btn">A</a></p>
            </aside>
            <aside class="absolute bottom-32 flex flex-col gap-6">
                <p class="diagonal-box rounded-md"></p>
                <p class="diagonal-box rounded-md"></p>
                <p class="diagonal-box rounded-md"></p>
                <p class="diagonal-box rounded-md"></p>
                <p class="diagonal-box rounded-md"></p>
            </aside>
            <p class="absolute top-6 text-white"><span class="text-green-300 mr-2">◉</span>POWER</p>
        </div>
    </div>
{{--スマホ用--}}
    <div class="md:hidden w-full h-full  flex flex-col justify-center items-center bg-gray-300">
        <section class="w-[90%] h-[95dvh] bg-work-command-bg shadow-xl rounded-lg overflow-hidden">
            {{--ゲームスクリーン--}}
            <div class="h-[45%] w-[90%] border-solid border-gray-800 game-screen-border rounded-lg m-4 flex flex-col" style="border-width: 15px">
                <article class="w-full bg-work-bg flex flex-col items-center justify-center gap-4 py-2 flex-grow">
                    <x-start-menu title="さいしょから はじめる" :flag="true"/>
                    <x-start-menu title="このサイト について" :flag="false"/>
                    <x-start-menu title="コンタクト じょうほう" :flag="false"/>
                </article>
                <p class="text-white bg-gray-800 w-full text-center pt-2 md:text-2xl">YUSUKE IMAI PORTFOLIO</p>
            </div>

            <div class="flex w-full">
                <p class="screen-bound left-item"></p>
                <p class="screen-bound right-item"></p>
            </div>


            <section class="h-[45%] w-full flex flex-col justify-start items-center mt-2 relative">

                <p class="text-white">◉</p>

                <article class="w-full flex justify-center items-center gap-16">
                    {{--十字キー--}}
                    <div>
                        <div class="large-cross-key-container relative">
                            <div class="btn large-cross-key-btn top-mark">▲</div>
                            <div class="btn large-cross-key-btn left-mark">▲</div>
                            <div class="btn large-cross-key-btn center-mark">●</div>
                            <button class="btn large-cross-key-btn right-mark" id="right_btn">▲</button>
                            <div class="btn large-cross-key-btn bottom-mark">▲</div>
                        </div>
                    </div>

                    {{--ボタン--}}
                    <div>
                        <aside class="relative">
                            <div class="rotated-ellipse"></div>
                            <div class="flex gap-4 relative z-10">
                                <p><a class="a-large-btn">B</a></p>
                                <p><a class="a-large-btn -mt-6">A</a></p>
                            </div>
                        </aside>
                    </div>
                </article>

                <article class="absolute bottom-6 flex flex-col">
                    <aside class="flex">
                        <div>・</div>
                        <div>・</div>
                        <div>・</div>
                        <div>・</div>
                    </aside>
                    <aside class="flex">
                        <div>・</div>
                        <div>・</div>
                        <div>・</div>
                        <div>・</div>
                    </aside>
                    <aside class="flex">
                        <div>・</div>
                        <div>・</div>
                        <div>・</div>
                        <div>・</div>
                    </aside>

                </article>

                <div class="absolute top-2 -right-1 flex flex-col text-sm">
                    <p class="text-green-300">■</p>
                    <p class="text-gray-800">■</p>
                </div>
            </section>
        </section>

    </div>

</x-template>

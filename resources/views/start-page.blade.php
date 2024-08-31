<x-template title="ポートフォリオ" css="app.css">
{{--PC用--}}
    <div class="w-full min-h-screen flex justify-center items-center gap-20 bg-work-command-bg">
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
</x-template>

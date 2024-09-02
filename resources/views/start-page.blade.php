<x-template title="ポートフォリオ" css="app.css">
{{--PC用--}}
    <div class="hidden md:flex w-full min-h-screen justify-center items-center gap-20 bg-work-command-bg">
        {{--十字キー--}}
        <div>
            <div class="large-cross-key-container relative">
                <div class="btn large-cross-key-btn top-mark" id="top_arrow_pc">▲</div>
                <div class="btn large-cross-key-btn left-mark">▲</div>
                <div class="btn large-cross-key-btn center-mark">●</div>
                <button class="btn large-cross-key-btn right-mark" id="right_btn">▲</button>
                <div class="btn large-cross-key-btn bottom-mark" id="bottom_arrow_pc">▲</div>
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
            <article class="w-full bg-work-bg flex flex-col items-center justify-center gap-6 py-16 blue-screen min-h-[45dvh] relative">
                <x-start-menu title="さいしょから はじめる" :flag="true"/>
                <x-start-menu title="このサイト について" :flag="false"/>
                <x-start-menu title="コンタクト じょうほう" :flag="false"/>
                <x-start-detail-pc>
                   <aside class="w-full flex flex-col items-center gap-6">
                       <p class="text-gray-800">なまえを おしえて くれるかい！</p>
                       <input placeholder="ユウスケ" type="text" class="w-[70%]" autofocus id="name_input_pc">
                       <button class="border border-solid border-gray-800 rounded-lg px-4" id="register_name_btn_pc">とうろく</button>
                   </aside>
                </x-start-detail-pc>
                <x-start-detail-pc>
                    <p class="text-gray-800">こんにちは。<br>今井祐輔のポートフォリオへようこそ。このサイトのテーマは僕が幼少期に初めて買ってもらったゲームです。何か遊び心を入れたものにしたいと思い作成しました。<br>
                        恐らく皆さんも一度は遊んだことがあるであろうゲームをモチーフにしています。<br>是非覗いていってみてください。
                    </p>
                </x-start-detail-pc>
                <x-start-detail-pc>
                    <aside class="flex flex-col items-center gap-2">
                        <p class="text-gray-800">メールアドレス</p>
                        <p class="text-2xl text-blue-800 underline"><a href="mailto:yu_suke1125aadxyz@icloud.com">yu_suke1125aadxyz@icloud.com</a></p>
                    </aside>
                </x-start-detail-pc>
            </article>
            <p class="text-white bg-gray-800 w-full text-center pt-6 text-2xl">YUSUKE IMAI PORTFOLIO</p>
        </div>

        {{--ボタン--}}
        <div>
            <aside class="flex gap-10">
                <p><a class="a-large-btn mt-8" id="b_btn_pc">B</a></p>
                <p><a class="a-large-btn" id="a_btn_pc">A</a></p>
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
        <section class="w-[90%] h-[95dvh] bg-work-command-bg shadow-xl rounded-lg overflow-hidden game-container">
            {{--上画面--}}
            <div class="h-[45%] w-[90%] border-solid border-gray-800 game-screen-border rounded-lg m-4 flex flex-col" style="border-width: 15px">
                <article id="game_screen_mobile" class="w-full bg-work-bg flex flex-col items-center justify-center gap-4 py-2 flex-grow overflow-y-scroll relative max-h-[35dvh]">
                    <x-start-menu title="さいしょから はじめる" :flag="true"/>
                    <x-start-menu title="このサイト について" :flag="false"/>
                    <x-start-menu title="コンタクト じょうほう" :flag="false"/>
                    <x-start-detail-pc>
                        <aside class="w-full flex flex-col items-center justify-center h-full gap-4">
                            <p class="text-gray-800">なまえを おしえて くれるかい！</p>
                            <input placeholder="ユウスケ" type="text" class="w-[90%]" autofocus id="name_input_mobile">
                            <button class="border border-solid border-gray-800 rounded-lg px-2 py-1 text-sm" id="register_name_btn_mobile">とうろく</button>
                        </aside>
                    </x-start-detail-pc>
                    <x-start-detail-pc>
                        <p class="text-gray-800">こんにちは。<br>今井祐輔のポートフォリオへようこそ。このサイトのテーマは僕が幼少期に初めて買ってもらったゲームです。何か遊び心を入れたものにしたいと思い作成しました。<br>
                            恐らく皆さんも一度は遊んだことがあるであろうゲームをモチーフにしています。<br>是非覗いていってみてください。
                        </p>
                    </x-start-detail-pc>
                    <x-start-detail-pc>
                        <aside class="flex flex-col items-center justify-center h-full gap-2">
                            <p class="text-gray-800">メールアドレス</p>
                            <p class="text-blue-800 underline"><a href="mailto:yu_suke1125aadxyz@icloud.com">yu_suke1125aadxyz@icloud.com</a></p>
                        </aside>
                    </x-start-detail-pc>
                </article>
                <p class="text-white bg-gray-800 w-full text-center pt-2 md:text-2xl">YUSUKE IMAI PORTFOLIO</p>
            </div>

            {{--上下境目--}}
            <div class="flex w-full">
                <p class="screen-bound left-item"></p>
                <p class="screen-bound right-item"></p>
            </div>

            {{--下画面--}}
            <section class="h-[45%] w-full flex flex-col justify-start items-center mt-2 relative">

                <p class="text-white">◉</p>

                <article class="w-full flex justify-center items-center gap-16">
                    {{--十字キー--}}
                    <div>
                        <div class="large-cross-key-container relative">
                            <div class="btn large-cross-key-btn top-mark" id="top_arrow_mobile">▲</div>
                            <div class="btn large-cross-key-btn left-mark">▲</div>
                            <div class="btn large-cross-key-btn center-mark">●</div>
                            <button class="btn large-cross-key-btn right-mark" id="right_btn">▲</button>
                            <div class="btn large-cross-key-btn bottom-mark" id="bottom_arrow_mobile">▲</div>
                        </div>
                    </div>

                    {{--ボタン--}}
                    <div>
                        <aside class="relative">
                            <div class="rotated-ellipse"></div>
                            <div class="flex gap-4 relative z-10">
                                <p><a class="a-large-btn" id="b_btn_mobile">B</a></p>
                                <p><a class="a-large-btn -mt-6" id="a_btn_mobile">A</a></p>
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
    @vite('resources/js/start.js')
</x-template>

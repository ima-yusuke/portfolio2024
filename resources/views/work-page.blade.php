<x-template title="ポートフォリオ" css="app.css">
    <section class="flex w-full h-full bg-work-bg">
        {{--左側--}}
        <article class="w-full md:w-1/2 flex flex-col pt-6 md:pt-0">
            {{--画像--}}
            <div class="h-1/2 w-full flex items-center justify-center">
                <img src="{{asset("storage/img/".$personalWorkData[0]["image"])}}" alt="work" class="w-[90%] h-[250px] md:w-[80%] md:h-[80%] object-cover rounded-lg" id="work_img">
            </div>

            <div class="h-1/2 w-full flex flex-col items-center gap-4 mb-4">
                {{--タイトル--}}
                <div class="flex justify-center md:justify-end items-center w-full">
                    <p class="-rotate-180 text-3xl md:text-6xl text-red-500 -mr-6 arrow" id="left_arrow">▶</p>
                    <p class="w-[90%] md:w-[80%] md:text-4xl py-2 md:py-4 text-center bg-work-dark-yellow rounded-2xl md:tracking-[30px]" id="current_title">個人開発</p>
                    <p class="text-3xl md:text-6xl text-red-500 -ml-6 arrow" id="right_arrow">▶</p>
                </div>

                {{--説明文--}}
                <div class="bg-white rounded-2xl w-[90%] md:w-full flex-1 md:ml-8 p-4 md:pr-10 flex flex-col gap-4 overflow-y-scroll">
                    <x-work-details title="サービス概要">
                        <p id="text_overview" class="text-sm leading-loose">{{$personalWorkData[0]["overview"]}}</p>
                    </x-work-details>
                    <x-work-details title="開発背景">
                        <p id="text_background" class="text-sm leading-loose">{{$personalWorkData[0]["background"]}}</p>
                    </x-work-details>
                    <x-work-details title="使用言語等">
                        <div class="flex gap-2" id="container_language">
                            @foreach($personalWorkData[0]["language"] as $p_language)
                                <p class="text-sm">{{$p_language}}</p>
                            @endforeach
                        </div>
                    </x-work-details>
                    <x-work-details title="サイトリンク">
                        <a href="{{$personalWorkData[0]["url"]}}" target="_blank" class="text-blue-500 text-sm" id="text_url">こちら</a>
                    </x-work-details>
                </div>
            </div>
        </article>

        {{--右側--}}
        <article class="hidden md:flex w-1/2 border-4 border-solid border-work-border-r-container md:mr-2 rounded-lg">
            <div class="w-full h-full bg-work-dark-yellow py-8 md:py-12 px-1 md:px-2 rounded-lg">
                <x-work-menu :workdata="$personalWorkData" :flag="true" category="personal"/>
                <x-work-menu :workdata="$businessWorkData" :flag="false" category="business"/>
            </div>
        </article>

{{--以下、モバイル用--}}

        {{--haedボタン--}}
        <div class="fixed top-2 flex justify-center w-full gap-4 md:hidden">
            {{--切り替え-L-btn--}}
            <div class="flex items-center gap-1">
                <p class="l-btn arrow">L</p>
                <p class="switch-text cursor-pointer text-sm">きりかえ</p>
                <p class="r-btn arrow">R</p>
            </div>

            {{--open-btn--}}
            <div class="flex items-center gap-1 md:hidden cursor-pointer" id="hamburger_icon">
                <p class="a-btn">A</p>
                <p class="text-sm">ひらく</p>
            </div>

            {{--close-work-btn--}}
            <div class="flex items-center gap-1 md:hidden cursor-pointer">
                <a href="/" class="a-btn">B</a>
                <a href="/" class="text-sm">バトル</a>
            </div>
        </div>

        {{--サイドメニュー--}}
        <div class="side_menu_off border-4 border-solid border-work-border-r-container rounded-lg">
            {{--close-side-menu-btn--}}
            <div class="absolute z-50 right-4 top-1 flex items-center gap-2 md:hidden cursor-pointer" id="close_icon">
                <p class="a-btn">B</p>
                <p>とじる</p>
            </div>
            <div class="w-full h-full bg-work-dark-yellow py-8 px-1 rounded-lg">
                <x-work-menu-mobile :workdata="$personalWorkData" :flag="true" category="personal"/>
                <x-work-menu-mobile :workdata="$businessWorkData" :flag="false" category="business"/>
            </div>
        </div>
    </section>
    @vite(['resources/js/work.js', 'resources/js/side-menu.js'])
</x-template>
<script>
    window.personalLaravel = @json($personalWorkData);
    window.businessLaravel = @json($businessWorkData);
    let personalWorkData = window.personalLaravel;
    let businessWorkData = window.businessLaravel;
</script>

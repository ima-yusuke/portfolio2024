<x-template title="ポートフォリオ" css="app.css">
    <section class="flex w-full min-h-screen bg-work-bg">
        {{--左側--}}
        <article class="w-1/2 flex flex-col">
            {{--画像--}}
            <div class="h-1/2 w-full flex items-center justify-center">
                <img src="{{asset("storage/img/".$personalWorkData[0]["image"])}}" alt="work" class="w-[80%] h-[80%] object-cover rounded-lg" id="work_img">
            </div>

            <div class="h-1/2 w-full flex flex-col gap-4 mb-4">
                {{--タイトル--}}
                <div class="flex justify-end items-center w-full">
                    <p class="-rotate-180 text-6xl text-red-500 -mr-6" id="left_arrow">▶</p>
                    <p class="w-[80%] text-4xl py-4 text-center bg-work-dark-yellow rounded-2xl tracking-[30px]" id="current_title">個人開発</p>
                    <p class="text-6xl text-red-500 -ml-6" id="right_arrow">▶</p>
                </div>

                {{--説明文--}}
                <div class="bg-white rounded-2xl w-full flex-1 ml-8 p-4 pr-10 flex flex-col gap-4">
                    <x-work-details title="サービス概要">
                        <p id="text_overview">{{$personalWorkData[0]["overview"]}}</p>
                    </x-work-details>
                    <x-work-details title="開発背景">
                        <p id="text_background">{{$personalWorkData[0]["background"]}}</p>
                    </x-work-details>
                    <x-work-details title="使用言語・ライブラリー">
                        <div class="flex gap-2" id="container_language">
                            @foreach($personalWorkData[0]["language"] as $p_language)
                                <p>{{$p_language}}</p>
                            @endforeach
                        </div>
                    </x-work-details>
                    <x-work-details title="サイトリンク">
                        <a href="{{$personalWorkData[0]["url"]}}" target="_blank" class="text-blue-500" id="text_url">こちら</a>
                    </x-work-details>
                </div>
            </div>
        </article>

        {{--右側--}}
        <article class="w-1/2 border-4 border-solid border-work-border-r-container mr-2 rounded-lg">
            <div class="w-full h-full bg-work-dark-yellow py-12 px-2 rounded-lg">
                <x-work-menu :workdata="$personalWorkData" :flag="true" category="personal"/>
                <x-work-menu :workdata="$businessWorkData" :flag="false" category="business"/>
            </div>
        </article>
    </section>
    @vite('resources/js/work.js')
</x-template>
<script>
    window.personalLaravel = @json($personalWorkData);
    window.businessLaravel = @json($businessWorkData);
    let personalWorkData = window.personalLaravel;
    let businessWorkData = window.businessLaravel;
</script>

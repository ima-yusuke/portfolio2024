<x-template title="ポートフォリオ" css="app.css">
    <div class="relative h-full w-full bg-battle-bg flex flex-col ">
        {{-- 敵ポケモン --}}
        <section class="flex flex-col gap-8 md:gap-0 flex-grow">
            {{-- ポケモン詳細 --}}
            <article class="pt-2 md:pt-8 pl-6 md:pl-32">
                <x-battle-pokemon-detail name="ヌオー" sex="♀" hp="80" level="100" flag="false"></x-battle-pokemon-detail>
            </article>

            {{-- ポケモンイラスト --}}
            <article class="flex justify-end mr-2 md:mr-10">
                <x-battle-field src="storage/img/pokemon01.png"></x-battle-field>
            </article>
        </section>

        {{-- ポケモンイラスト（モバイル） --}}
        <article class="md:hidden flex justify-start z-10 mb-[-50px]">
            <x-battle-field src="storage/img/pokemon02.png"></x-battle-field>
        </article>

        {{-- メニュー --}}
        <section class="w-full">
            {{-- ポケモン詳細 --}}
            <article class="flex justify-end mr-1 md:mr-[2em] md:mb-[0.5em] z-30 relative">
                <x-battle-pokemon-detail name="今井 祐輔" sex="♂" hp="60" level="27" flag="true"></x-battle-pokemon-detail>
            </article>

            <div class="flex h-[100px] md:h-[11rem] w-full relative">
                {{-- ポケモンイラスト（PC） --}}
                <article class="hidden md:flex justify-start md:pl-10 absolute -top-[200%] md:-top-[25vh] z-10 w-full h-full">
                    <x-battle-field src="storage/img/pokemon02.png"></x-battle-field>
                </article>

                <article class="w-[60%] md:w-[65%] h-full bg-battle-menu-bg border-t-4 border-b-4 border-l-4 border-solid border-yellow-500 z-10">
                    <div class="w-full h-full border-t-8 border-b-8 border-l-8 border-solid border-white md:p-6">
                        <h1 class="text-white md:text-5xl p-4 md:pl-[0.5em] md:pt-[0.5em]" id="player_name">Yusuke Imaiは どうする？</h1>
                    </div>
                </article>
                <article class="h-full flex-1 rounded-lg ml-[-15px] z-50">
                    <div class="bg-white flex flex-col justify-center gap-2 md:gap-6 h-full border-[6px] md:border-[10px] border-solid border-battle-menu-border rounded-lg" style="border-radius: 20px;">
                        <aside class="flex justify-center gap-4 md:gap-20 md:text-4xl pl-2 md:pl-0">
                            <p class="hoverable hover:cursor-pointer">たたかう</p>
                            <a href="/work" class="hoverable hover:cursor-pointer">バッグ</a>
                        </aside>
                        <aside class="flex justify-center gap-4 md:gap-20 md:text-4xl pl-2 md:pl-0">
                            <a href="/about" class="hoverable hover:cursor-pointer">ポケモン</a>
                            <a href="/" class="hoverable hover:cursor-pointer">にげる</a>
                        </aside>
                    </div>
                </article>
            </div>
        </section>
    </div>
    @vite('resources/js/battle.js')
</x-template>

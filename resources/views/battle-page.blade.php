<x-template title="ポートフォリオ" css="app.css">
    <div class="relative min-h-screen w-full bg-bg-battle-green">
        {{--敵ポケモン--}}
        <section>
            {{--ポケモン詳細--}}
            <article class="pt-8 pl-32">
                <x-pokemon-detail name="ヌオー" sex="♀" hp="80" level="100" flag="false"></x-pokemon-detail>
            </article>

            {{--ポケモンイラスト--}}
            <article class="flex justify-end mr-10">
                <x-field src="storage/img/pokemon01.png"></x-field>
            </article>
        </section>

        {{--メニュー--}}
        <section class="absolute bottom-0 w-full">
            {{--ポケモン詳細--}}
            <article class="flex justify-end mr-24 mb-4">
                <x-pokemon-detail name="Yusuke Imai" sex="♂" hp="60" level="27" flag="true"></x-pokemon-detail>
            </article>

            <div class="flex h-[200px] w-full relative">
                {{--ポケモンイラスト--}}
                <article class="flex justify-start pl-10 absolute -top-[60%]">
                    <x-field src="storage/img/pokemon02.png"></x-field>
                </article>

                <article class="w-[65%] h-full bg-bg-menu border-t-4 border-b-4 border-l-4 border-solid border-yellow-500 z-10">
                    <div class="w-full h-full border-t-8 border-b-8 border-l-8 border-solid border-white p-6">
                        <h1 class="text-white text-5xl pl-10 pt-8">Yusuke Imaiは どうする？</h1>
                    </div>
                </article>
                <article class="h-full flex-1 rounded-lg ml-[-15px] z-50">
                    <div class="bg-white flex flex-col justify-center gap-6 h-full border-solid border-menu-border rounded-lg" style="border-width: 10px; border-radius: 20px;">
                        <aside class="flex justify-center gap-20 text-4xl">
                            <p class="hoverable hover:cursor-pointer">たたかう</p>
                            <p class="hoverable hover:cursor-pointer">バッグ</p>
                        </aside>
                        <aside class="flex justify-center gap-20 text-4xl">
                            <a href="/about" class="hoverable hover:cursor-pointer">ポケモン</a>
                            <p class="hoverable hover:cursor-pointer">にげる</p>
                        </aside>
                    </div>
                </article>
            </div>
        </section>
    </div>
</x-template>
<style>
    .hoverable:hover::before {
        content: '▶';
        margin-right: 0.5rem;
        position: absolute;
        left: 0;
        transform: translateX(-100%);
    }
    .hoverable {
        position: relative;
    }
</style>

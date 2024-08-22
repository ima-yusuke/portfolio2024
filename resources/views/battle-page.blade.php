<x-template title="ポートフォリオ" css="app.css">
    <div class="min-h-screen w-full bg-bg-battle-green">
        {{--敵ポケモン--}}
        <section>
            {{--ポケモン詳細--}}
            <article class="pt-8 pl-10">
                <x-pokemon-detail name="ヌオー" sex="♂" hp="80" level="100"></x-pokemon-detail>
            </article>

            {{--ポケモンイラスト--}}
            <article class="flex justify-end mr-10">
                <x-field src="storage/img/pokemon01.png"></x-field>
            </article>
        </section>


        {{--味方ポケモン--}}
        <section>
            {{--ポケモン詳細--}}
            <article class="flex justify-end mr-32 mt-4">
                <x-pokemon-detail name="Yusuke Imai" sex="♂" hp="60" level="27"></x-pokemon-detail>
            </article>

            {{--ポケモンイラスト--}}
            <article class="flex justify-start pl-10">
                <x-field src="storage/img/pokemon02.png"></x-field>
            </article>
        </section>

        {{--メニュー--}}
        <section class="absolute bottom-0 h-[200px] w-full bg-bg-menu border-2 border-solid border-white">
            <div class="flex h-full w-full">
                <article class="w-[70%]">
                    <h1 class="text-white text-5xl pl-10 pt-8">Yusuke Imaiは どうする？</h1>
                </article>
                <article class="h-full w-[40%]">
                    <div class="bg-white flex flex-col justify-center gap-6 h-full border-solid border-menu-border rounded-lg" style="border-width: 10px;">
                        <aside class="flex justify-center gap-20 text-4xl">
                            <p class="hoverable hover:cursor-pointer">たたかう</p>
                            <p class="hoverable hover:cursor-pointer">バッグ</p>
                        </aside>
                        <aside class="flex justify-center gap-20 text-4xl">
                            <p class="hoverable hover:cursor-pointer">ポケモン</p>
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

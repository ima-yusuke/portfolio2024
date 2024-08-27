<x-template title="ポートフォリオ" css="app.css">
    <section class="flex w-full min-h-screen bg-work-bg">
        {{--左側--}}
        <article class="w-1/2 flex flex-col">
            {{--画像--}}
            <div class="h-1/2 w-full">

            </div>

            <div class="h-1/2 w-full flex flex-col gap-4 mb-4">
                {{--タイトル--}}
                <div class="flex justify-end items-center w-full">
                    <p class="-rotate-180 text-6xl text-red-500 -mr-6">▶</p>
                    <p class="w-[80%] text-4xl py-4 text-center bg-work-dark-yellow rounded-2xl tracking-[30px]">どうぐ</p>
                    <p class="text-6xl text-red-500 -ml-6">▶</p>
                </div>

                {{--説明文--}}
                <div class="bg-white rounded-2xl w-full flex-1 ml-8 p-4 flex flex-col gap-4">
                    <aside class="flex flex-col">
                        <h2>サービス概要</h2>
                        <p>this is test</p>
                    </aside>
                    <aside class="flex flex-col">
                        <h2>開発背景</h2>
                        <p>特に開発背景で「自分が解決したかった事象」について書けていることが重要になってきます。</p>
                    </aside>
                    <aside class="flex flex-col">
                        <h2>使用言語</h2>
                        <p>JavaScript,Laravel,Tailwind CSS</p>
                    </aside>
                    <aside class="flex flex-col">
                        <a>リンク</a>
                    </aside>
                </div>
            </div>
        </article>

        {{--右側--}}
        <article class="w-1/2 border-4 border-solid border-work-border-r-container mr-2 rounded-lg">
            <div class="w-full h-full bg-work-dark-yellow py-12 px-2 rounded-lg">
                <div class="w-full h-full bg-work-light-yellow rounded-md pl-16 pt-2 pr-2 flex flex-col gap-4">
                    <div class="flex justify-between text-4xl">
                        <a class="hoverable hover:cursor-pointer">ふしぎなアメ</a>
                        <p>×1</p>
                    </div>
                    <div class="flex justify-between text-4xl">
                        <a class="hoverable hover:cursor-pointer">ふしぎなアメ</a>
                        <p>×1</p>
                    </div>
                    <div class="text-4xl">
                        <a href="/" class="hoverable hover:cursor-pointer">バッグをとじる</a>
                    </div>
                </div>
            </div>
        </article>
    </section>
</x-template>

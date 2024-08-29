<div class="flex flex-col w-full @if($flag==="true") items-end @endif">
    <div class="flex flex-col gap-2 border-2 border-solid border-black bg-white w-[55%] md:w-[30%] rounded-lg">
        {{--上部--}}
        <div class="flex items-center justify-between md:gap-20 pt-2 px-2">
            <aside class="flex items-center gap-1">
                <p class="md:text-3xl pl-1 md:pl-4">{{$name}}</p>
                @if($sex=="♂")
                    <p class="text-blue-400 md:text-3xl">{{$sex}}</p>
                @else
                    <p class="text-pink-400 md:text-3xl">{{$sex}}</p>
                @endif
            </aside>
            <p class="md:text-3xl">Lv:{{$level}}</p>
        </div>

        {{--下部--}}
        <div class="w-full flex flex-col items-end gap-2 pb-2">
            <div class="bg-gray-800 flex justify-end items-center gap-1 md:gap-4 border border-solid border-black rounded-lg w-[140px] md:w-[350px] mr-2 h-4 md:h-7">
                <p class="md:text-xl text-red-300">HP</p>
                <div class="w-[100px] md:w-[300px] bg-gray-800 h-3 md:h-6 relative rounded-lg border-r border-t border-b border-solid border-white">
                    <span class="block bg-green-300 h-full rounded-lg border border-solid border-white" style="width:{{$hp}}%;"></span>
                </div>
            </div>
            @if($flag=="true")
                <aside class="flex w-[40%] justify-between md:text-4xl mr-4">
                    <p>30／</p>
                    <p class="text-end">50</p>
                </aside>
            @endif
        </div>

    </div>
    @if($flag=="true")
        <div class="bg-gray-800 flex justify-end items-center gap-4 border border-solid border-black w-[140px] md:w-[350px] h-4 mr-1">
            <p class="text-base text-yellow-300">EXP</p>
            <div class="w-[100px] md:w-[300px] bg-amber-100 h-3 relative" style="background-image: linear-gradient(to right, transparent 90%, black 100%); background-size: 10px 100%;">
                <span class="block bg-blue-400 h-full border border-solid border-white" style="width:{{$hp}}%;"></span>
            </div>
        </div>
    @endif
</div>

<div class="flex flex-col gap-2 border-2 border-solid border-black bg-white w-[30%] rounded-lg">
    {{--上部--}}
    <div class="flex items-end gap-20 pt-2 pl-2">
        <p class="text-3xl pl-4">{{$name}}<span class="pl-2">{{$sex}}</span></p>
        <p class="text-2xl">Lv:12</p>
    </div>

    {{--下部--}}
    <div class="w-full flex justify-end pb-2">
        <div class="bg-gray-800 flex justify-end items-center gap-4 border border-solid border-black rounded-lg w-[350px] mr-2 h-7">
            <p class="text-xl text-red-300">HP</p>
            <div class="w-[300px] bg-gray-800 h-6 relative rounded-lg border-r border-t border-b border-solid border-white">
                <span class="block bg-green-300 h-full rounded-lg border border-solid border-white" style="width:{{$hp}}%;"></span>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center justify-between w-full px-4">
    <div class="bg-ability-key rounded-full w-[250px] h-[40px] flex items-center justify-center text-white text-2xl z-20">
        {{$key}}
    </div>

    <div class="bg-ability-value py-4 rounded-lg flex justify-start gap-4 flex-1 ml-[-20px] z-10 pl-[30px] w-full">
        {{$slot}}
    </div>
</div>

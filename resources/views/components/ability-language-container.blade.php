<div class="flex flex-col md:flex-row items-center md:items-center md:justify-between w-full md:px-4">
    <div class="w-full md:w-[250px] flex justify-start ml-2 md:ml-0">
        <div class="bg-ability-key-bg rounded-full w-[200px] md:w-full h-[30px] md:h-[40px] flex items-center justify-center text-white md:text-2xl z-20">
            {{$key}}
        </div>
    </div>


    <div class="bg-ability-value-bg py-4 px-2.5 md:px-0 rounded-lg flex justify-start gap-4 flex-1 mt-[-0.5em] md:mt-0 md:ml-[-20px] z-10 md:pl-[30px] w-[95%] md:w-full">
        {{$slot}}
    </div>
</div>

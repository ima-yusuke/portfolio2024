{{--モダルopen時の背景黒幕--}}
<div class="hide fixed min-h-screen w-full flex flex-col justify-center items-center -z-10" id="{{$name}}_modal">
    {{--モダルコンテナ--}}
    <div class="w-[90%] md:w-[80%] flex flex-col items-center justify-center relative rounded-md">
        <button class="absolute -top-4 -right-4 text-2xl w-[50px] h-[50px] bg-red-500 text-white rounded-full" id="close_{{$name}}_modal">X</button>
        <img src="{{asset($src)}}" class="h-[250px] w-full md:h-[750px] object-cover">
    </div>
</div>

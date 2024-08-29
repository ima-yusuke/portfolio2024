<div class="w-full h-full bg-work-light-yellow rounded-md pl-4 md:pl-16 pt-2 pr-2 flex flex-col gap-6 @if($flag===false) hide @endif" id="container_mobile_{{$category}}_menu">
    @foreach($workdata as $work)
        <div class="flex justify-between md:text-4xl">
            <a class="hoverable hover:cursor-pointer {{$category}}_btn" id="{{$work["id"]}}">{{ $work['name'] }}</a>
            <p>×1</p>
        </div>
    @endforeach
    <div class="md:text-4xl">
        <a href="/" class="hoverable hover:cursor-pointer">バッグをとじる</a>
    </div>
</div>
</div>

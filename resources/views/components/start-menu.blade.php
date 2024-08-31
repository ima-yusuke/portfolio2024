<div class="w-[80%] border-solid border-about-border rounded-md bg-white px-4 py-[0.5em] md:py-4 shadow-xl cursor-pointer text-sm"
     style="border-width: 6px;opacity: {{ $flag ? '1' : '0.6' }}; ">
    @if($flag)
        <a href="/battle">{{$title}}</a>
    @else
        <h1>{{$title}}</h1>
    @endif
</div>

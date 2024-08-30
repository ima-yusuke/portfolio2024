<div class="w-[80%] border-solid border-about-border rounded-md bg-white px-4 py-4 shadow-xl cursor-pointer" style="border-width: 8px">
    @if($flag)
        <a href="/battle">{{$title}}</a>
    @else
        <h1>{{$title}}</h1>
    @endif
</div>

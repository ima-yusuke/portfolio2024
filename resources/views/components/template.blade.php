<!DOCTYPE html>
<html lang="ja">
<x-head :title="$title">
    @if(isset($description))
        <meta name="description" content="{{ $description }}"/>
    @endif
    @vite(['resources/css/'.$css,'resources/css/about-1.css','resources/css/side-menu.css','resources/css/start.css'])
</x-head>
<body class="h-full md:overflow-hidden xl:overflow-auto">
<main class="flex-1 h-full">
    {{ $slot }}
</main>
</body>
</html>

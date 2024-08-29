<!DOCTYPE html>
<html lang="ja">
<x-head :title="$title">
    @if(isset($description))
        <meta name="description" content="{{ $description }}"/>
    @endif
    @vite(['resources/css/'.$css,'resources/css/about-1.css'])
</x-head>
<body class="h-full overflow-hidden">
<main class="flex-1 h-full">
    {{ $slot }}
</main>
</body>
</html>

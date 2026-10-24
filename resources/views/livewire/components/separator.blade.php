@php
    $style = $item['style'] ?? 'line';
@endphp

<div class="separator-container my-8 flex justify-center items-center">
    @switch($style)
        @case('line')
            <hr class="w-full border-t-2 border-gray-300">
            @break

        @case('dots')
            <div class="flex space-x-2">
                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
            </div>
            @break

        @case('stars')
            <div class="flex space-x-4 text-gray-400 text-xl">
                <span>★</span>
                <span>★</span>
                <span>★</span>
            </div>
            @break

        @case('space')
            <div class="h-16"></div>
            @break

        @default
            <hr class="w-full border-t-2 border-gray-300">
    @endswitch
</div>

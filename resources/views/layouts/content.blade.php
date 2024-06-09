<div class="py-4">
    <div class="bg-white shadow-sm sm:rounded-lg py-4 px-5"
        @if (isset($style)) style="{{ $style }}" @endif>
        {{ $slot }}
    </div>
</div>

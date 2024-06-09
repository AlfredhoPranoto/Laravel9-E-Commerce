<div {{ $attributes->merge(['class' => 'card h-100 mb-3']) }}>
    @if (isset($img))
        <div class="card-header">{{ $img }}</div>
    @endif
    <div class="card-body d-flex flex-column pt-2 justify-content-evenly">
        <h5 class="card-title">{{ $title }}</h5>
        {{ $slot }}
    </div>
</div>
